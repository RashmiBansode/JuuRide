<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>

<body>

 
<nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 mb-5 rounded sticky-top">
        <div class="container-fluid px-5">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#"><img height="60px" src="assets/images/JUU RIDE Logo-Latest.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-4">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <div class="container">
        <div class=" about">
        <img src="assets/images/about.png" class="img-fluid rounded float-end" alt="...">
           
            <input id="ch" type="checkbox">
            <h1 >About Juu Ride</h1>
            <p>JUU Ride is a pioneering Platform as a Service (PaaS) model startup, redefining the landscape of transportation services across India. Born from a vision to revolutionize the way drivers operate and to bridge the gap in transportation accessibility,</p>
            <p> JUU Ride stands at the forefront of a transformative movement.</p>

            <div class="abtcontent">
                <p>Our field-tested product is ready to redefine mobility, offering a diverse range of vehicle options for both passengers and goods. From city rides to outstation trips, we cater to every unique journey, ensuring no one is left behind with our multi-lingual support. But we’re more than just a transportation solution. We’re a movement towards driver empowerment, economic growth in Tier 3 cities, and sustainable, transparent, and affordable transportation.</p> <p>With JUU Ride, you have the power to choose, customize, and shape your transportation experience. Our platform integrates seamlessly with existing apps like WhatsApp and Telegram, and our architecture is built for speed and scalability, ensuring a swift implementation and room for growth.</p> <p>Join us in revolutionizing Indian transportation. Join JUU Ride.</p>

                <label for="ch">Show less</label>
            </div>
           
            <label for="ch">Show more</label>
            <!-- <button class="btn-btn-primary">Learn More</button> -->
        </div>
    </div>


<div class="about-foot "><img class="img-fluid" src="assets/images/about-footer.png" alt=""></div>



    <?php include('./includes/footer.php'); ?>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>