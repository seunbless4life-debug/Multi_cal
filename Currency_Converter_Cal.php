<?php
$title = "Currency Converter";
include_once 'header.php';
?>
<div class="currency_converter">
    <h2>Currency Converter</h2>
    <p class="pagemessage">Let us work you through the process of converting currencies. Kindly follow the prompt below to get started. We hope to get feedbacks from you. Thank you</p>
    <form action="" method="POST">
        <p>
            <input type="number" name="amount" id="amount" required placeholder="Enter Amount">
        </p>
        <p>
            <select name="from_currency" id="from_currency" required>
                <option value="USD">US Dollar</option>
                <option value="EUR">Euro</option>
                <option value="GBP">British Pound</option>
            </select>
        </p>
        <p>
            <select name="to_currency" id="to_currency" required>
                <option value="USD">US Dollar</option>
                <option value="EUR">Euro</option>
                <option value="GBP">British Pound</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Convert">
        </p>

        <?php
            $amount = $_POST['amount'];
            $from_currency = $_POST['from_currency'];
            $to_currency = $_POST['to_currency'];

            // Simple conversion rates (for demonstration purposes only)
            $conversion_rates = [
                'USD' => ['EUR' => 0.85, 'GBP' => 0.73],
                'EUR' => ['USD' => 1.18, 'GBP' => 0.86],
                'GBP' => ['USD' => 1.37, 'EUR' => 1.16]
            ];

            if (isset($conversion_rates[$from_currency][$to_currency])) {
                $converted_amount = $amount * $conversion_rates[$from_currency][$to_currency];
                echo "<h3>Converted Amount is <h2>$converted_amount</h2></h3>";
            } else {
                echo "<p>Conversion not available for the selected currencies.</p>";
            }
        ?>
    </form>