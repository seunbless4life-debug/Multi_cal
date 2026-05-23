<!-- <?php
include_once 'header.php';

$numb1 = $_POST['weight'];
$numb2 = $_POST['height'];
$result = $numb1 / ($numb2 * $numb2);

echo "$result";
?> -->

<?php 
     $Loan_value = $_POST['loan_value'];
     $tenor = $_POST['tenor'];
     $total_loan = "";
    
    if($Loan_value <= 1000000 && $tenor <= 6){
    $rate === 5%;
    $total_loan = $Loan_value + ($Loan_value * $rate);

    echo" Congratulations, you have been approved for a loan of $total_loan.00, with a tenor of $tenor months and an interest rate of 5%. <br> Please note that your total repayment is $total_loan.00, and your monthly repayment is "($total_loan / $tenor).".00";
    
    }
    echo "You will get a loan."
?>
          




























 }elseif($Loan_value > 1000000 && $Loan_value <= 5000000){
                    $rate === 10%
                }
                echo "<p class='error'>Sorry, you cannot apply for a loan above 500,000,000.00</p>";    