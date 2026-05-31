<?php
$title = "Salary Calculator";
include_once "Header.php";
?>

<div class="salary_calculator">
    <h2>Your Salary Calculator</h2>
    <p class="pagemessage">Let us work you through the process of calculating your salary. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
    <p>
        <input type="number" name="net_salary" id="salary" required placeholder="Enter Your Net Salary">
    </p>
    <p>
        <input type="number" name="days_worked" id="days_worked" required placeholder="Number of Days Worked">
    </p>
    <p>
        <input type="number" name="salary_loan" id="salary_loan"  placeholder="Salary Loan Amount">
    </p>
    <p>
        <input type="submit" value="Calculate">
    </p>

    <?php
        $net_salary = $_POST['net_salary'];
        $days_worked = $_POST['days_worked'];
        $salary_loan = $_POST['salary_loan'];

        $daily_salary = $net_salary / 30;
        $total_earned = $daily_salary * $days_worked;
        $final_salary = $total_earned - $salary_loan;

        echo "<h3>Your Daily Salary is <h2>$daily_salary</h2></h3>";
        echo "<h3>Your Total Earned Salary is <h2>$total_earned</h2></h3>";
        echo "<h3>Your Final Salary after Loan Deduction is <h2>$final_salary</h2></h3>";
    ?>
</form>
</div>



    