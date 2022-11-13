<?php
include('./Includes/header.php');

?>

<div class="our-cars-image-container beginStickyNav">
    <img src="Images/gallery11.jpg" alt="">
</div>

<div class="rent-cost-container">
    <div class="rent-cost-info">
        <div class="rent-cost-header">
            <h1>Features</h1>
            <p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>1 review</span>
        </div>
        </p>
        <div class="rent-container-2">
            <i class="fa-solid fa-person"></i>
            <span>5 Passengers</span>
            <i class="fa-solid fa-suitcase-rolling"></i>
            <span>4 Luggages</span>
            <i class="fa-solid fa-table-columns"></i>
            <span>Auto</span>
            <i class="fa-solid fa-car"></i>
            <span>5 Doors</span>
        </div>
        <div class="rent-container-3">
            <h3>Refueling</h3>
            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
        </div>
        <div class="rent-container-3">
            <h3>Car Wash</h3>
            <p>Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
        </div>
        <div class="rent-container-3">
            <h3>No Smoking</h3>
            <p>See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
        </div>
    </div>
    <div class="rent-cost-calculator-container">
        <div class="rent-form-container">
            <form id="rent-form" action="rent_cost.php" method="POST">
                <label for="age">Ηλικία Οδηγού</label></span>
                <input id="age" type="number" name="age" placeholder="Age ...">
                <label for="cubic">Κυβικά Αυτοκινήτου</label>
                <input id="cubic" type="number" name="cubic" placeholder="Cubic ...">
                <label for="">Ημέρες προς Ενοικίαση</label>
                <input id="day" type="number" name="day" placeholder="Days ...">
                <input id="submitBtn" type="submit" name="submit" value="Calculate Rental Cost">
            </form>
        </div>
        <div class="rent-cost-results-container">
            <?php if (isset($_POST['submit'])) {
                include('./Includes/functions.php');
            ?>
                <h2>Ασφάλιστρα:</h2> <span><?php echo calcInsurance($cubic, $age) ?>&euro;</span>
                <h2>Ενοικίαση:</h2> <span><?php echo calcRent($cubic, $day) ?>&euro;</span>
                <h2>Τελικό Ποσό:</h2> <span><?php echo totalcost($age, $cubic, $day) ?>&euro;</span>
            <?php } ?>
        </div>
    </div>
</div>

<?php include('./Includes/footer.php'); ?>

<script src="./Js/navbar.js"></script>
<script>
    const age = document.getElementById('age');
    const cubic = document.getElementById('cubic');
    const day = document.getElementById('day');
    const rentForm = document.getElementById('rent-form');

    rentForm.addEventListener('submit', function(e) {
        if (cubic.value == "" || age.value == "" || day.value == "") {
            e.preventDefault();
            cubic.placeholder = "Please Insert a value";
            day.placeholder = "Please Insert a value";
            age.placeholder = "Please Insert a value";
        } else
        if (cubic.value < 0 || age.value < 0 || day.value < 0) {
            e.preventDefault();
        }
    })
</script>
</body>

</html>