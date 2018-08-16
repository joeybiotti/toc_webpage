<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Thoughts On Chips</title>
</head>

<body>
    <h1 class="title">Thoughts On Chips</h1>
        <div class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <p>We eat chips.</p>
                    <p>We review chips.</p>
                </div>
            </div>
        </div>
    <nav class="nav" id="main">
        <ul>
            <li class="logo"><a href="#">Thoughts on Chips.</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="https://www.instagram.com/thoughtsonchips/"><i class="icons fa fa-instagram mr-sm-2" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/thoughtsonchips"><i class="icons fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="blue-area">
            <div id="txt-area">
                <h3 class="text-center ">Contact Us!</h3>
                <form action="mailto:thoughtsonchips@gmail.com?subject=Email from the website">
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-name" placeholder="Name:">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="form-email" placeholder="Email Address:">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="email-body" rows="5" placeholder="Let us know what's on your mind."></textarea>
                    </div>
                    <a href="#" class="btn btn-success">Send</a>
                    <a id="clear-btn" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">&copy 2018, ThoughtsOnChips</footer>
    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>

<?php

if($_POST["message"]) {
    mail("thoughtsonchips@gmail.com", "Form to email", $_POST["message"], "From: test@email.com");
}
?>