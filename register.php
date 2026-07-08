<?php
$title = "Sign-up";
include 'header.php';
?>

<div class="register_page">
    <h2>Get Your Lm Account</h2>
    <form action=""  method="POST">
        <div class="register_acct">
            <div class="register_form1 thesameatyle">

                <input type="text" name="Fname" id="Fname" required placeholder="First Name">

                <input type="date" name="dob" id="dob" required placeholder="Date of Birth" pattern="\d{2}-\d{2}-\d{4}">

                <input type="email" name="email" id="email" required placeholder="Email Address" class="form_styles">

                <input type="password" name="password" id="password" required placeholder="Password" class="form_styles">

                <input type="text" name="address" id="address" placeholder="Home Address" class="form_styles">

            </div>

            <div class="register_form2 thesameatyle">

                <input type="text" name="Lname" id="Lname" required placeholder="Last Name">

                <input type="text" name="phone" id="phone" required placeholder="Phone Number" pattern="\d{3}-\d{4}-\d{4}">
    
                <select name="country" id="country" required>
                    <option value= >Select a Country</option>
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="ng">Nigeria</option>
                    <option value="gh">Ghana</option>
                    <option value="br">Brasil</option>
                    <option value="tg">Togo</option>
                </select>

                <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password" class="form_styles">

            </div>
        </div>
        

       
        <p>
            <input type="submit" value="Sign Up">
        </p>
    </form>
    <p class="register">
        Already have an Lm account? <a href="login.php">Log in</a> Now for free.
    </p>
</div>