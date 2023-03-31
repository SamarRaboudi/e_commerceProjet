<?php 
include 'components/connection.php' ; 
?>
<style type="text/css">
    <?php include 'style.css' ; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicon@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<?php include 'components/header.php' ; ?>
<div class="main">
    <div class="banner about-introduction banner-contact">
        <h1>Get in touch!</h1>
    </div>
    <div class="form-container">
        <form action="" method="post">
            <div class="title">
                <img src="img/logo.png" alt="" class="logo">
                <h1>leave a message</h1>
            </div>
            <div class="input-field">
                <p>your name <span>*</span></p>
                <input type="text" name="name">
            </div>
            <div class="input-field">
                <p>your email <span>*</span></p>
                <input type="email" name="email">
            </div>
            <div class="input-field">
                <p>your number <span>*</span></p>
                <input type="text" name="number">
            </div>
            <div class="input-field">
                <p>your message <span>*</span></p>
                <textarea name="message"  ></textarea>
            </div>
            <button type="submit" name="submit-btn" class="btn">Send Message</button>
        </form>
    </div>
    <div class="address">
            <div class="title">
                <img src="" alt="" class="logo">
                <h1>Contact Details</h1>
            </div>
            <div class="box-container">
                <div class="box">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <h4>address</h4>
                    <p>1092 Sousse, Tunisia</p>
                </div>
                </div>
                <div class="box">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <h4>phone number</h4>
                    <p>12 456 789</p>
                </div>
                </div>
                <div class="box">
                <i class="fa-solid fa-at"></i>
                <div>
                    <h4>email</h4>
                    <p>project@gmail.com</p>
                </div>
                </div>
            </div>
        </div>
   <?php include 'components/footer.php' ; ?>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/bff030aaba.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php' ; ?>
    
</body>
</html>