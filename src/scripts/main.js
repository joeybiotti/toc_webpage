//Sticky Nav
const nav = document.querySelector('#main');
const topOfNav = nav.offsetTop;

function fixNav(){
    if(window.scrollY >= topOfNav){
        document.body.style.paddingTop = nav.offsetHeight;
        document.body.classList.add('fixed-nav');
    } else {
        document.body.style.paddingTop = 0;
        document.body.classList.remove('fixed-nav');
    }
}

window.addEventListener('scroll', fixNav);

//Change Hero Image Background
// const images = ['images/chip2.png']; //images are placeholders for now.

// const hero = document.querySelector('.hero-image');

// const cycleImages = (images, container, step) => {
//     images.forEach((image, index) =>(
//         setTimeout(() =>{
//             container.style.backgroundImage = `url(${image})`
//             container.style.backgroundSize = 'cover'
//             container.style.backgoundPosition = 'center'
//             container.style.display = 'block'
//             container.style.height = '100%'
//             container.style.width = '100%'
//         }, step * (index + 1))
//     ))
//     setTimeout(() => cycleImages(images, container, step), step * images.length)
// }

// cycleImages(images, hero, 3000);

//Secret Code-- opens modal
const pressed = [];
const secretCode = 'chips';

window.addEventListener('keyup', (e) =>{
    console.log(e);
    pressed.push(e.key);
    pressed.splice(-secretCode.length -1, pressed.length - secretCode.length);

    if(pressed.join('').includes(secretCode)){
        activateSecretArea();
    };
    console.log(pressed);

    function activateSecretArea(){
        const secretArea = document.querySelector('#modal');
        const close = document.querySelector('.close');

        //Modal opens if the user enters the secret code
        secretArea.style.display = 'block';

        //Modal closes when user clicks the "x"
        close.onclick = ()=> {
            secretArea.style.display = 'none';
        };

        //If user clicks the modal, modal closes
        window.onclick = ()=> {
            if(event.target == secretArea){
                secretArea.style.display = 'none';
            };
        };
    };
})