<?php

require("/Users/joeybb/Workspace/freelance/t_o_c_v2/vendor/phpmailer/phpmailer/src/PHPMailer.php");


$mail = new PHPMailer\PHPMailer\PHPMailer();

$msg = '';

//Don't run unless submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require("/Users/joeybb/Workspace/freelance/t_o_c_v2/vendor/autoload.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;

    $mail->setFrom('test@example.com', 'First Last');
    $mail->addAddress('thoughtsonchips@gmail.com', 'Admin');

    if($mail->addReplyTo($_POST['email'], $_POST['name'])){
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
    Email: {$_POST['email']}
    Name: {$_POST['name']}
    Message: {$_POST['message']}
EOT;
    }
    if (!$mail->send()) {
        $msg = 'Sorry, something went wrong. Please try again later.';
    } else {
        $msg = 'Message sent! Thanks for contacting us.';
    }
} else {
    $msg = 'Invalid email address, message ignored.';
}

?>

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
            <h3>Contact Us!</h3>

            <?php if (empty($msg)) {
                echo "<h2>$msg</h2>";
            } ?>

            <form method="POST">
                <label for="name">Name: <input type="text" name="name" id="name"></label><br>
                <label for="email">Email address: <input type="email" name="email" id="email"></label><br>
                <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br>
                <input type="submit" value="Send">
            </form>
            </div>
        </div>
    </div>
    <footer class="text-center">&copy 2018, ThoughtsOnChips</footer>
    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>