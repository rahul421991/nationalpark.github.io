<?php
// echo json_encode($_POST);
$orderId = $_POST["orderId"];
$orderAmount = $_POST["orderAmount"];
$referenceId = $_POST["referenceId"];
$txStatus = $_POST["txStatus"];
$paymentMode = $_POST["paymentMode"];
$txMsg = $_POST["txMsg"];
$txTime = $_POST["txTime"];
$signature = $_POST["signature"];
$data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
$secretKey = "5597a68b35cc65bd532af0148f79ac51fba9b401";
$hash_hmac = hash_hmac('sha256', $data, $secretKey, true) ;
$computedSignature = base64_encode($hash_hmac);
if ($signature == $computedSignature) {
	?>
        <script>
            alert("Your order is successfully confirmed!");
            <?php header('location:payment.php'); ?>
        </script>
   <?php
 } else {
	 ?>
   echo "<h1>Something went wrong</h1>";
        <script>
            alert("Something went wrong");
            <?php header('location:payment.php'); ?>
        </script>
   <?php
  // Reject this call
}

 ?>
