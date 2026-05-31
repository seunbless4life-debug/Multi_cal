<?php
$title = "Age Calculator";
include_once 'header.php';
?>
<div class="age_calculator">
    <h2>Your Age Calculator</h2>
    <p class="pagemessage">Let us work you through the process of calculating your age. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
    <p>
        <input type="number" name="current_year" id="current_year" required placeholder="Enter Current Year">
    </p>
    <p>
        <input type="number" name="birth_year" id="birth_year" required placeholder="Enter Your Birth Year">
    </p>
    <p>
        <input type="submit" value="Calculate">
    </p>

    <?php
        $current_year = $_POST['current_year'];
        $birth_year = $_POST['birth_year'];

        $age = $current_year - $birth_year;

        echo "<h3>Your Age is <h2>$age</h2></h3>";
    ?>