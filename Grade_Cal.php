<?php

$title = 'School Grade';
include_once 'header.php';
?>

<div class="bmi_calculator">
    <h2>Grade Calculator</h2>
    <p>In this section you can calculate your grades with ease. To calculate your grade, please enter your scores in the fields below. Kindly follow the prompt below to get started. We hope to get feedback from you. Thank you</p>
    <div class="bmi_calculator_form">
        <form action="" method="post">
            <p>
                <input type="text" id="names" name="names" autofocus required placeholder="Enter your Full Name:">
            </p>
            <p>
                <input type="text" id="courses" name="courses" required placeholder="Enter Course Name:">
            </p>
            <p>
                <input type="number" id="grade" name="grade" required placeholder="Enter Grade (0-100):">
            </p>
            
            <input type="submit" step="0.01" value="Calculate">
        </form>

        <?php
            $names = $_POST['names'];
            $courses = $_POST['courses'];
            $grade = $_POST['grade'];

            if($grade >= 90 && $grade <= 100){
               echo "<h3> Hello $names! Your grade for $courses is <h2>A</h2> which means you have an excellent performance.</h3>";
            }elseif($grade >= 80 && $grade < 90){
                echo "<h3> Hello $names! Your grade for $courses is <h2>B</h2> which means you have a good performance.</h3>";
            }elseif($grade >= 70 && $grade < 80){
                echo "<h3> Hello $names! Your grade for $courses is <h2>C</h2> which means you have a satisfactory performance.</h3>";
            }elseif($grade >= 60 && $grade < 70){
                echo "<h3> Hello $names! Your grade for $courses is <h2>D</h2> which means you have a poor performance.</h3>";
            }elseif($grade >= 0 && $grade < 60){
                echo "<h3> Hello $names! Your grade for $courses is <h2>F</h2> which means you have failed the course. Please work harder next time.</h3>";
            }