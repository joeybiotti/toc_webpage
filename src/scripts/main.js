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
const images = ['images/chips.jpg', 'images/pringles.jpg', 'images/ruffles.jpg']; //images are placeholders for now.

const hero = document.querySelector('.hero-image');

const cycleImages = (images, container, step) => {
    images.forEach((image, index) =>(
        setTimeout(() =>{
            container.style.backgroundImage = `url(${image})`
        }, step * (index + 1))
    ))
    setTimeout(() => cycleImages(images, container, step), step * images.length)
}

cycleImages(images, hero, 1000);