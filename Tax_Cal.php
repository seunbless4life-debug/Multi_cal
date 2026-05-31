<?php
$title = "Tax Calculator";
include_once "Header.php";
?>

<div class="tax_calculator">
    <h2>Tax Calculator</h2>
    <p class="pagemessage">Let us work you through the process of calculating your tax. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
        <p>
            <input type="text" name="employee_name" id="employee_name" required placeholder="Employee Name (Surname First)">
        </p>
        <p>
            <input type="number" name="basic_salary" id="basic_salary" required placeholder="Enter Basic Salary">
        </p>
        <p>
            <input type="radio" name="employed" id="employed" value="10" >
            <label for="Employed">Employed </label>

            <input type="radio" name="employed" id="unemployed" value="10" >
            <label for="Unemployed">Unemployed </label>
        
            <input type="radio" name="self_employed" id="self_employed" value="10">
            <label for="Self-Employed">Self-Employed </label>
        </p>
        <p>
            <input type="submit" value="Calculate Tax">
        </p>

        <?php
        $employee_name = $_POST['employee_name'];
        $basic_salary = $_POST['basic_salary'];
        $employed = $_POST['employed'];
        $unemployed = $_POST['unemployed'];
        $self_employed = $_POST['self_employed'];

        if($basic_salary >= 30000 && $basic_salary <= 100000){
            $tax_amount = 0.0125;
        }else if($basic_salary > 100000 && $basic_salary <= 200000){
            $tax_amount = 0.025;
        }else if($basic_salary > 200000 && $basic_salary <= 500000){
            $tax_amount = 0.0475;
        }else if($basic_salary > 500000 && $basic_salary <= 1000000){
            $tax_amount = 0.1;
        }else if($basic_salary > 1000000 && $basic_salary <= 2000000){
            $tax_amount = 0.175;
        }else if($basic_salary > 2000000 && $basic_salary <= 5000000){
            $tax_amount = 0.2;
        }else if($basic_salary > 5000000 && $basic_salary <= 10000000){
            $tax_amount = 0.23;
        }else if($basic_salary > 10000000 && $basic_salary <= 50000000){
            $tax_amount = 0.25;
        }else{
            $tax_amount = 0.275;
        };




        if($basic_salary <= 30000 && $employed || $unemployed || $self_employed){
            echo "<h4><br><br><i>Hi $employee_name !</i><br>Hurray!!! <br>You cannot be taxed at this time. <br>Your salary is below the minimum wage issued by the government.</h4>";
            exit;
        }else if($basic_salary > 30000 && $basic_salary <= 100000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br><br> your tax is : " . number_format($tax_amount * 100, 2) . " %. <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns on time to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 100000 && $basic_salary <= 200000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 200000 && $basic_salary <= 500000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 500000 && $basic_salary <= 100000  && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 1000000 && $basic_salary <= 2000000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 2000000 && $basic_salary <= 5000000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 5000000 && $basic_salary <= 10000000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 10000000 && $basic_salary <= 50000000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else if($basic_salary > 50000000 && $employed || $unemployed || $self_employed){
            echo "<br><br><i>Hi $employee_name !</i><br> Your tax is : " . number_format($tax_amount * 100, 2) . " % <br> Which means your net salary will be: <b>" . ($basic_salary - ($basic_salary * $tax_amount)) . "</b><br> Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }else{
            echo "<h4><br><br><i>Hi $employee_name !</i><br>Please do well to file your tax returns at the end of the year to avoid penalties. <br><br> Best regards, <br><br> Management.";
        }


















            // $bill_amount = $_POST['basic_salary'];
            // $tax_percentage = $_POST['tax_percentage'];

            // if($tax_percentage <= 15){
            //     echo "<h4><br><br>So Sorry!! You cannot be taxed at this time, please work harder.</h4>";
            //     exit;
            // }else

            // $tax_amount = ($bill_amount * 0.10);
            // echo "CONGRATULATIONS!!! <br><br> The sum of <b>$tax_amount</b> will be deducted from your salary ($bill_amount) as tax. <br><br>
            // Great Job!!! Keep this up and you will get salary raise and promoted... <br><br>
            // Best regards, <br><br>
            // Management.";

        ?>
    </form>