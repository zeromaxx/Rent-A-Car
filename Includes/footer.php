<?php
if (isset($_POST['newsSubmit'])) {
    require_once('./Includes/db.php');
    $username = $_POST['newsLetter-username'];
    $name = $_POST['newsLetter-name'];
    $email = $_POST['newsLetter-email'];

    $sql = "INSERT INTO clients (username,name,email)
            VALUES('$username','$name','$email')";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $rowCount = $statement->rowCount();
}
?>
<div class="footer-container">
    <div class="footer-contact">
        <div class="footer-content">
            <h5>Contact Us</h5>
            <a href="#">1-567-124-44227</a>
            <br>
            <a href="#">184 Main Street East Perl Habour 8007</a>
            <br>
            <a href="#">Mon - Sat 8.00 - 18.00 Sunday CLOSED</a>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.7765267329023!2d23.943930930943754!3d37.93565084583873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1901ad9e75c61%3A0x38b215df0aeeb3aa!2zzpTOuc61zrjOvc6uz4IgzpHOtc-Bzr_Ou865zrzOrc69zrHPgiDOkc64zrfOvc-Ozr0!5e0!3m2!1sel!2sgr!4v1655462999999!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="news-container">
        <div class="news-form-container">
            <form id="newsletterForm" method="POST">
                <h3>Newsletter</h3>
                <h5>Don't miss a thing! Sign up to receive daily deals</h5>
                <label for="username">Username</label>
                <input placeholder="Εισάγεται Username..." id="newsLetter-username" name="newsLetter-username" type="text">
                <label for="name">Name</label>
                <input placeholder="Εισάγεται Όνομα..." name="newsLetter-name" id="newsLetter-name" type="text">
                <label for="email">Email</label>
                <input placeholder="Εισάγεται Email..." id="newsLetter-email" type="email" name="newsLetter-email">
                <input type="submit" name="newsSubmit" id="newsSubmit" value="Εγγραφή στο Newsletter">
            </form>

        </div>
    </div>
</div>
<div class="copyright-container">
    <div class="copyright">
        <h6>© Copyright 2022</h6>
        <div class="footer-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="our-cars.php">Our Cars</a></li>
                <li><a href="rent-cost.php">Rental Cost</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
    </div>

</div>

<script>
    const newsLetterUsername = document.getElementById("newsLetter-username");
    const newsLetterEmail = document.getElementById("newsLetter-email");
    const newsLetterName = document.getElementById("newsLetter-name");
    const newsBtn = document.getElementById("newsSubmit");

    newsBtn.addEventListener("click", function(e) {
        if (newsLetterUsername.value == "" || newsLetterEmail.value == "" || newsLetterName.value == "") {
            e.preventDefault();
            newsLetterUsername.placeholder = "Please insert a value";
            newsLetterEmail.placeholder = "Please insert a value";
            newsLetterName.placeholder = "Please insert a value";
            newsLetterUsername.classList.add("placeholder-color");
            newsLetterEmail.classList.add("placeholder-color");
            newsLetterName.classList.add("placeholder-color");
        }
    });
</script>