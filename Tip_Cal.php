<?php
$title = "Tip Calculator";
include_once "Header.php";
?>

<div class="tip_calculator">
    <h2>Tip Calculator</h2>
    <p class="pagemessage">Let us work you through the process of calculating your tip. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
        <p>
            <input type="number" name="basic_salary" id="bill_amount" required placeholder="Enter Basic Salary">
        </p>
        <p>
            <input type="number" name="tip_percentage" id="tip_percentage" required placeholder="Provide number of days worked">
        </p>
        <p>
            <input type="submit" value="Calculate Tip">
        </p>

        <?php
            $bill_amount = $_POST['basic_salary'];
            $tip_percentage = $_POST['tip_percentage'];

            if($tip_percentage <= 15){
                echo "<h4><br><br>So Sorry!! You cannot get tips at this time, please work harder.</h4>";
                exit;
            }else

            $tip_amount = ($bill_amount * 0.10);
            echo "CONGRATULATIONS!!! <br><br> The sum of <b>$tip_amount</b> will be added to your salary ($bill_amount) as tip. <br><br>
            Great Job!!! Keep this up and you will get salary raise and promoted... <br><br>
            Best regards, <br><br>
            Management.";

        ?>
    </form>
</div>