<?=
include 'header.php';
?>

<div>
    <h2>Log-in to Your Lm Account</h2>
    <form action="" method="POST">
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
        Already have an Lm account? <a href="profile_acct.php">Log in</a> Now for free.
    </p>
</div>