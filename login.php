<!-- <?php include('./Includes/header.php'); ?>

<div class="empty-container-2">
    
</div>
<div class="empty-container beginStickyNav">
    <button class="login">Login</button>
    <?php if (isset($_POST['login'])) {
        $pdo =  include('./Includes/db.php');
        $sql = "SELECT * FROM clients";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $clients = $statement->fetchAll();
    ?>
        <div class="table">
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-2">Username</div>
                    <div class="col col-3">Name</div>
                    <div class="col col-4">Email</div>
                </li>
                <?php foreach ($clients as $client) { ?>
                    <li class="table-row">
                        <div data-label="Username :" class="col col-1"><?php echo $client['username'] ?></div>
                        <div data-label="Name :" class="col col-2"><?php echo $client['name'] ?></div>
                        <div data-label="Email :" class="col col-3"><?php echo $client['email'] ?></div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</div>

<div class="modal-overlay">
    <div class="modal-container">
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <h3>Log In</h3>
        <form id="login-form" action="login.php" method="POST">
            <label for="username"></label>
            <input id="user" name="user" type="text" placeholder="Enter Username">
            <label for="password"></label>
            <input id="psw" type="password" name="psw" placeholder="Enter Password">
            <input name="login" type="submit" value="Login">
        </form>
        <div class="social-container">
            <h4>Or Login Via</h4>
            <button class="facebook-btn">Login with Facebook</button>
            <button class="google-btn">Login with Google</button>
            <h4>Don't have an account?<span class="modal-register-text">Register</span></h4>
        </div>
    </div>
</div>

<?php include('./Includes/footer.php') ?>
<script src="./Js/navbar.js"></script>
<script src="./Js/login.js"></script>
</body>

</html> -->