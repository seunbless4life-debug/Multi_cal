<?php 
    require_once 'header.php';
    $page_title = 'BMI Calculator';
?>

<div class="bmi_calculator">
    <h2>Welcome to BMI Calculator</h2>
    <p>In this section you can get clear clarification on how to calculate your Body Mass Index (BMI). Kindly follow the prompt below to get started. We hope to get feedback from you. Thank you</p>
    <div class="bmi_calculator_form">
        <form action="result.php" method="post">
            <p>
                <input type="number" id="weight" name="weight" autofocus required placeholder="Enter your weight in kg:">
            </p>
            <p>
                <input type="number" id="weight" name="weight" required placeholder="Enter your weight in kg:">
            </p>
            
            <input type="submit" value="Calculate">
        </form>
    </div>
    <div class="results">
        <p><?php include_once 'result.php'; ?></p>
    </div>
</div>