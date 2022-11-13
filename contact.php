<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
$title = ucwords($title);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/our-cars.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Car Rental <?= $title ?></title>
    <style>
        .contact-form-container img {
            width: 100%;
            min-height: 100vh;
            margin: auto;
            display: block;
            object-fit: cover;
        }

        .contact-form-container {
            position: relative;
        }

        .contact-form-container-1 {
            border-radius: 5px;
            min-width: 40%;
            margin: auto;
            position: absolute;
            border: 1px solid black;
            top: 5rem;
            left: 5rem;
            z-index: 5;
            background-color: black;
            color: white;
            height: 600px;
            height: fit-content;
        }

        .contact-form-container-1 h1 {
            padding: 10px;

        }

        .contact-form-container-1 form {
            height: 100%;
            padding: 30px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            line-height: 2.5;
        }

        .contact-form-container-1 form input {
            height: 40px;
            border-radius: 3px;
            border: none;
            transition: all linear 0.3s;
            outline: none;
        }

        .contact-form-container-1 textarea {
            outline: none;
        }

        .contact-form-container-1 label {
            font-size: small;
            font-weight: 600;
        }

        .contact-form-container-1 input[type="submit"] {
            border-radius: 3px;
            cursor: pointer;
            border: none;
            width: 25%;
            border: none;
            font-weight: 600;
            color: white;
            background-color: #04dbc0;
            margin-top: 1rem;
        }

        .contact-form-container-1 input[type="submit"]:hover {

            background-color: #5856d6;
            transition: all linear 0.3s;
        }

        .google-map {
            position: relative;
            overflow: hidden;
        }

        .google-map iframe {
            width: 100%;
            height: 600px;
        }

        .company-contact {
            background-color: #5856d6;
            height: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            color: white;
        }

        .company-contact p {
            font-size: small;
        }

        .company-contact-1 {
            display: flex;
        }

        .company-contact-1>div {
            margin: 1rem;
            display: flex;
            flex-direction: column;
            text-align: center;
            flex: 1;
            height: 150px;
            justify-content: space-evenly;
            height: fit-content;
        }

        .fa-location-dot,
        .fa-envelopes-bulk,
        .fa-phone {
            font-size: 2.5rem;
            cursor: pointer;
            color: white;
        }

        @media (max-width:1100px) {
            .contact-form-container-1 {
                width: 85%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
    </style>
</head>

<nav class="navbar">

    <div class="logo-brand"><a href="index.php"></a>
        <span class="nav-text"><a href="index.php">GcCarRental</a></span>
        <i class="toggle fa-solid fa-bars"></i>
    </div>
    <div class="navbar-links-container">
        <ul class="links">
            <li><a href="our_cars.php">Our Cars</a></li>
            <li><a href="rent_cost.php">Rental Cost</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Admin</a></li>
        </ul>
    </div>
</nav>

<body>

    <?php
    if (isset($_POST['submit'])) {
        require('./Includes/db.php');
        $name = $_POST['contact-firstname'];
        $phonenumber = $_POST['contact-phonenumber'];
        $email = $_POST['contact-email'];
        $subject = $_POST['contact-subject'];
        $message = $_POST['contact-message'];

        $sql = "INSERT INTO messages (name,phone_number,email,subject,message)
            VALUES('$name','$phonenumber','$email','$subject','$message')";
        $statement = $conn->prepare($sql);
        $statement->execute();
    }

    ?>

    <div class="contact-form-container beginStickyNav">
        <img src="./Images/contact-img.jpg" alt="">
        <div class="contact-form-container-1">
            <h1>Get In Touch With Us</h1>
            <form action="contact.php" id="contactForm" method="POST">
                <label for="fname">Name</label>
                <input type="text" id="contact-firstname" name="contact-firstname" placeholder="Your firstname ..">

                <label for="phonenumber">Phone Number</label>
                <input type="text" id="contact-phonenumber" name="contact-phonenumber" placeholder="Your Phone Number..">

                <label for="email">Email</label>
                <input type="email" id="contact-email" name="contact-email" placeholder="Your Email..">


                <label for="subject">Subject</label>
                <input type="text" id="contact-subject" name="contact-subject" placeholder="Your subject..">

                <label for="message">Message</label>
                <textarea name="contact-message" id="contact-message" id="" cols="30" rows="10" placeholder="Your Message.."></textarea>

                <input type="submit" name="submit" value="Send">
        </div>
        </form>
    </div>


    <div class="company-contact">
        <h1>Contact Us</h1>
        <h3>Explore our first class limousine & car rental services</h3>
        <div class="company-contact-1">
            <div>
                <a href=""><i class="fa-solid fa-location-dot"></i></a>
                <h2>Adress</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                </p>
                <p>elit. Facilis, neque!</p>
            </div>
            <div>
                <a href=""><i class="fa-solid fa-envelopes-bulk"></i></a>
                <h2>E-mail</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                <p>elit. Facilis, neque!</p>
            </div>
            <div>
                <a href=""><i class="fa-solid fa-phone"></i></a>
                <h2>Phone</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                </p>
                <p>elit. Facilis, neque!</p>
            </div>
        </div>
    </div>


    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.7765267329023!2d23.943930930943754!3d37.93565084583873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1901ad9e75c61%3A0x38b215df0aeeb3aa!2zzpTOuc61zrjOvc6uz4IgzpHOtc-Bzr_Ou865zrzOrc69zrHPgiDOkc64zrfOvc-Ozr0!5e0!3m2!1sel!2sgr!4v1655462999999!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <?php include('./Includes/footer.php') ?>

    <script src="./Js/navbar.js"></script>
    <script src="./Js/contact.js"></script>
</body>

</html>