<?php 
    $title = "BMI Calculator";
    require_once 'header.php';
?>

<div class="bmi_calculator">
    <h2>Welcome to BMI Calculator</h2>
    <p>In this section you can get clear clarification on how to calculate your Body Mass Index (BMI). Kindly follow the prompt below to get started. We hope to get feedback from you. Thank you</p>
    <div class="bmi_calculator_form">
        <form action="" method="post">
            <p>
                <input type="text" id="weight" name="weight" autofocus required placeholder="Enter your weight (Kg):">
            </p>
            <p>
                <input type="text" id="height" name="height" required placeholder="Enter your Height(M2):">
            </p>
            
            <input type="submit" step="0.01" value="Calculate">
        </form>
        <?php
        // $ans = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $numb1 = $_POST['weight'];
            $numb2 = $_POST['height'];
            $result = $numb1 / ($numb2 * $numb2);
            $ans = "";

            if($result <= 18.5){
               $ans = "<h3>Your Body Mass Index is <h2>$result</h2> which means you are underweight.</h3>";
            }elseif($result > 18.5 && $result <= 24.9){
                $ans = "<h3>Your Body Mass Index is <h2>$result</h2> which means you are normal weight CONGRATULATIONS!</h3>";
            }elseif($result > 24.9 && $result <= 29.9){
                $ans = "<h3>Your Body Mass Index is <h2>$result</h2> which means you are overweight!</h3>";
            }elseif($result > 29.9 && $result <= 34.9){
                $ans = "<h3>Your Body Mass Index is <h2>$result</h2> which means you are Obese!!!</h3>";
            }elseif($result > 34.9){
                $ans = "<h3>Your Body Mass Index is <h2>$result</h2> which means you are Extremely Obese!!!</h3>";
            }
        }
        ?>
    </div>

    <div class="bmi_calculator_result">
        <h1>Hello</h1>
        <?php 
        echo $_SERVER['REQUEST_METHOD'];
            echo "word" .$ans; 
        ?>
    </div>
</div>