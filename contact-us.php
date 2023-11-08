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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link active" href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container ">

        <div class="row d-flex justify-content-center align-items-center contact">
            <div class=" col-md-5 col-sm-7  col-lg-7 con1">
                <h1 class="mb-3">Contact Us</h1>
                <p><b >Agnibhu Technologies Private Limited </b> <br> Address: Khatha No 29/29, Subramanya Nilaya,  Behind Irani Bunglow, Hassan – 573201 <br> Phone: 08172 – 355146 </p>
                <p>Email: customer.support@juuride.com</p>
                <button class="btn btn-warning rounded-pill  btn1 m-2">Call Now</button>

            </div>
            <div class="col-md-5 contactimg"> <img class="img-fluid" src="assets/images/contact-us.png" alt=""></div>
        </div>
    </div>

    <div class="container cform">
        <h3><b>Got a question for us? <br> Send us a message and we will respond <br> to you as soon as possible.</b></h3>

        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone_no">Phone No.</label></label>
                    <input type="number" class="form-control" id="phone_no"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="msg">Your Message</label>
                <textarea class="form-control" id="msg" rows="4"></textarea>
            </div>

            <button class="btn btn-warning rounded-pill my-4 btn1 m-2">Submit Form</button>       
         </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>









    <?php include('./includes/footer.php'); ?>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>