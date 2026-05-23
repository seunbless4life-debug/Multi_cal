<?=
include_once 'header.php';

// $client_mail = $_POST['email'];
//     $client_password = $_POST['password'];
//     <div class="infomations">
//         <?php
//         echo "Your email is: $client_mail";
//         echo "Your password is: $client_password";
//         ?>
//     </div>

?>

<div class="profile_acct">
    <h2>Log-in to Your Lm Account</h2>
    <form action="/" method="POST">
        <p>
            <input type="email" name="email" id="email" required placeholder="Email Address" class="form_styles">
        </p>
        <p>
            <input type="password" name="password" id="password" required placeholder="Enter Password" class="form_styles">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
    <p class="register">
        You don't have an Lm account? <a href="register.php">Register</a> now for free.
    </p>
</div>
<?php
    
?>