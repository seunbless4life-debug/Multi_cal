<?php
$title = "Loan Calculator";
include_once 'header.php';
?>

<div class="loan_calculator">
    <h2>Welcome to Loan Calculator</h2>
    <p class="pagemessage">You are welcome to our loan page, here we can offer you upto <b>500,000,000.00</b>. within minutes, lets take you through the process, but before we begin, lets time 30 seconds of your time to see how our loan plan works. Please fill the form below. we will also like you to drop a comment on our contact page. We hope you like our credit options.</p>

    <div class="loan_calculator_form">
        <div class="form_calculator">
            <form action="" method="POST">
                <p>
                    <input type="number" id="loan_value" name="loan_value" autofocus placeholder="How much loan do you wish(000,000):">
                </p>
                <p>
                    <input type="number" id="tenor" name="tenor" placeholder="Your loan tenor (in months):">
                </p>
                
                <input type="submit" value="Calculate">
            </form>
        </div>
        <div>
            <?php 
                $Loan_value = $_POST['loan_value'];
                $tenor = $_POST['tenor'];
                if($tenor <= 6){
                    $rate = 5;
                }elseif($tenor > 6 && $tenor <= 12){
                    $rate = 10;
                }elseif($tenor > 12 && $tenor <= 24){
                    $rate = 15;
                }else{
                    $rate = 0;
                }

                if ($Loan_value === ""){
                    echo "<br><br>Enter a Loan Value from 10,000 or above";
                }elseif($Loan_value <= 9999){
                    echo "<br><br><p class='error'>Sorry, you cannot apply for a loan below 9,999</p>";}
                    // break;
                else{

                    $total_loan = "";

                    $total_loan = $Loan_value + ($Loan_value * $rate/100);          

                    echo "<br><br><br><br><br><br><p>CONGRATULATIONS!!!,<br><br> You have been approved a loan of <b>$Loan_value</b>, <br>A tenor of $tenor Months <br> your Interest Rate is $rate%" . "<br><br></p>";

                    echo "Please note that your total repayment is $total_loan.00, and your monthly repayment is " . number_format(($total_loan / $tenor), 2) . ".00" . "<br><br>";

                        for($i = 1; $i <= $tenor; $i++){
                            echo "Repayment $i payment is " . number_format(($total_loan / $tenor), 2) .".00 <br>";
                        }
                        
                }







                // if($Loan_value <= 100000 && $tenor <= 6){
                // $total_loan = $Loan_value + ($Loan_value * $rate)
                // echo" Congratulations, you have been approved a loan of $total_loan.00, with a tenor of $tenor months and your interest rate is $rate. <br*2> 
                // Please note that your total repayment is $total_loan.00, and your monthly repayment is "($total_loan / $tenor).".00"

                //     for($i = 1; $i <= $tenor; $i++){
                //         echo "Your month $i payment is "($total_loan / $tenor).".00 <br>";
                //     }
                //     break;
                // }elseif($Loan_value <= 100000 && $tenor > 6 && $tenor <= 12){
                //     $total_loan = $Loan_value + ($Loan_value * $rate)
                //     echo" Congratulations, you have been approved a loan of $total_loan.00, with a tenor of $tenor months and your interest rate is $rate. <br*2> 
                //     Please note that your total repayment is $total_loan.00, and your monthly repayment is "($total_loan / $tenor).".00"

                //     for($i = 1; $i <= $tenor; $i++){
                //         echo "Your month $i payment is "($total_loan / $tenor).".00 <br>";
                //     }
                // }elseif($Loan_value > 100000 && $Loan_value <= 5000000 && $tenor <= 6){
                //     $total_loan = $loan_value + ($loan_value * $rate)
                //     echo" Congratulations, you have been approved a loan of $total_loan.00, with a tenor of $tenor months and your interest rate is $rate. <br*2> 
                //     Please note that your total repayment is $total_loan.00, and your monthly repayment is "($total_loan / $tenor).".00"

                //     for($i = 1; $i <= $tenor; $i++){
                //         echo "Your month $i payment is "($total_loan / $tenor).".00 <br>";
                //     }

                // }elseif($Loan_value > 100000 && $Loan_value <= 5000000 && $tenor > 6 && $tenor <= 12){
                //     $total_loan = $loan_value + ($loan_value * $rate)
                //     echo" Congratulations, you have been approved a loan of $total_loan.00, with a tenor of $tenor months and your interest rate is $rate. <br*2> 
                //     Please note that your total repayment is $total_loan.00, and your monthly repayment is "($total_loan / $tenor).".00"
                // }
                
            ?>          
        </div>
    </div>    
</div>

                