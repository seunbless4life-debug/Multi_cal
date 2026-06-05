<?php
$title = "Electric Calculator";
include_once 'header.php';
?>

<div class="container">
    <h2>Electric Bill Calculator</h2>
    <form action="" method="POST">
        <p>
            <label>Please Select Your Electricity Consumption Machine:
                <p>
                    <input type="radio" name="machine_type" value="pre_paid" id="machine_pre_paid">
                    <label for="machine_pre_paid">Pre-Paid Meter</label>

                    <input type="radio" name="machine_type" value="post_paid" id="machine_post_paid">
                    <label for="machine_post_paid">Post-Paid Meter</label>
                </p>

        </p>
        <p>
            <input type="text" name="customer_name" id="Customer_name" placeholder="Enter customer name">
        </p>
        <p>
            <input type="number" name="consumption" id="units" placeholder="Enter units consumed" >
        </p>
        <p>
            <input type="submit" value="Calculate Bill" id="submit">
        </p>
    </form>

    <?php
        $customer_name = $_POST['customer_name'];
        $consumption = $_POST['consumption'];

    if(isset($_POST['machine_type']) && $_POST['machine_type'] === 'post_paid'){
        $unit = 1.15;

         $total = $consumption * $unit;

    echo "<br><br><br><h3> Hello $customer_name! </h3>";
    echo "Your total electric bill as at" .date("F") ."is $total ";

    }else{
        echo "<br><br><br>Calculator can only be for Post-Paid Meter. Please select the correct machine type.";
    
}
   
    ?>