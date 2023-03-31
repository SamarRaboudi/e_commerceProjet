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
    <title>Document - about us page</title>
</head>
<body>
<?php include 'components/header.php' ; ?>
<div class="main">
   <div class="banner about-introduction">
    <h1>Everyone Should Live with a Little More Green</h1>
    <p>Bloomscape is here to help strengthen your relationship with plants. We make buying plants easy by delivering healthy, ready-to-go plants to your door and setting you up with the tips and tricks you need to help your plants thrive. Plants make life better. We make plants easy.</p>
   </div>
   <div class="about-container">
    <div class="about-details">
        <h3>Direct From the Greenhouse</h3>
        <p>When you buy a houseplant from a box store or nursery, it probably spends an average of four weeks traveling from a greenhouse to a drafty warehouse on a hot or cold truck. Then, it’s shipped to a store where it likely isn’t getting the water, light, or care it needs to thrive. With Bloomscape, our plants are cared for by plant experts and kept in optimal conditions at our greenhouse where they’re shipped directly to you. So instead of your plant spending 4 weeks in an uncontrolled environment, it spends 3-4 days going from our greenhouse to your front door. This means your plants arrive healthy and already thriving.</p>
    </div>
    <img src="img/about1.png" alt="">
   </div>
   <div class="about-container">
   <img src="img/about2.png" alt="">
    <div class="about-details">
        <h3>Shipped to Your Door</h3>
        <p>Our plants are shipped with care and experience. We’ve learned how to keep plants at the right temperature, protect their roots, and keep them healthy while they travel from our greenhouse to your home. Our innovative packaging holds plants securely in place, preventing damage and decreasing soil spillage. Most shipments will arrive in under a week and all plants will be healthy, undamaged, and ready for you to enjoy.</p>
    </div>
   </div>
   <!-- <div class="testimonial-container">
        <div class="title">
        <img src="" alt="">
        <h1>What People Say About Us</h1>
        </div>
        <div class="container">
            <div class="testimonial-item active">
                <img src="" alt="">
                <h1>Sara Smith</h1>
                <p>“Offering up high quality plants is just the beginning…”</p>
            </div>
            <div class="testimonial-item ">
                <img src="" alt="">
                <h1>Selena Ansaria</h1>
                <p>“Maintaining an indoor garden has never been easier!”</p>
            </div>
            <div class="testimonial-item ">
                <img src="" alt="">
                <h1>sara smith</h1>
                <p>“All you’ll have to do is open the box, pull the plant out, and enjoy it.”</p>
            </div>
            <div class="left-arrow" onclick="nextSlide()"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
   </div> -->
   <?php include 'components/footer.php' ; ?>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/bff030aaba.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php' ; ?>
    
</body>
</html>