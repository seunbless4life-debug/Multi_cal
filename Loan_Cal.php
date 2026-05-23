<?=
include_once 'header.php';
?>

<div class="loan_calculator">
    <h2>Welcome to Loan Calculator</h2>
    <p>You are welcome to our loan page, here we can offer you upto <b>500,000,000.00</b>. within minutes, lets take you through the process, but before we begin, lets time 30 seconds of your time to see how our loan plan works. Please fill the form below. we will also like you to drop a comment on our contact page. We hope you like our credit options.</p>

    <div class="loan_calculator_form">
        <div class="form_calculator">
            <form action="" method="POST">
                <p>
                    <input type="number" id="loan_value" name="loan_value" autofocus required placeholder="How much loan do you wish(000,000):">
                </p>
                <p>
                    <input type="number" id="tenor" name="tenor" required placeholder="Your loan tenor (in months):">
                </p>
                
                <input type="submit" value="Calculate">
            </form>
        </div>
        <div class="results">
            <p>
                <?php 
                 $Loan_value =$_POST['loan_value'];
                 $tenor = $_POST['tenor'];
                case1:($Loan_value <= 100000 && $tenor <= 12):{
                    $total_loan =$loan_value+($loan_value*0.10);
                    echo "Your Loan is: ₦$total_loan";
                    echo "interest on $total_loan is: 10%";
                    echo "Monthly repayment is: $total_loan / $tenor;
                    break;
                    
                    . number_format($total_loan, 2);
                } && $tenor <= 60):
                    $interest = 0.05;
                    $total_interest = $Loan_value * $interest;
                    $total_repayment = $Loan_value + $total_interest;
                    echo "Your total repayment amount is: " . number_format($total_repayment, 2);
                    break;
            
                ?>
            </p>
        </div>
    </div>    
</div>