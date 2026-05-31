<?php
$title = "Tax Calculator";
include_once "Header.php";
?>

<div class="tax_calculator">
    <h2>Tax Calculator</h2>
    <p class="pagemessage">Let us work you through the process of calculating your tax. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
        <p>
            <input type="number" name="basic_salary" id="bill_amount" required placeholder="Enter Basic Salary">
        </p>
        <p>
            <input type="text" name="employee_name" id="tip_percentage" required placeholder="Employee Name">
        </p>
        <p>
            <input type="submit" value="Calculate Tax">
        </p>

        <?php
            $bill_amount = $_POST['basic_salary'];
            $tax_percentage = $_POST['tax_percentage'];

            if($tax_percentage <= 15){
                echo "<h4><br><br>So Sorry!! You cannot be taxed at this time, please work harder.</h4>";
                exit;
            }else

            $tax_amount = ($bill_amount * 0.10);
            echo "CONGRATULATIONS!!! <br><br> The sum of <b>$tax_amount</b> will be deducted from your salary ($bill_amount) as tax. <br><br>
            Great Job!!! Keep this up and you will get salary raise and promoted... <br><br>
            Best regards, <br><br>
            Management.";

        ?>
    </form>