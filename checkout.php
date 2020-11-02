<?php
$orderId = $_POST["orderId"];
$orderAmount = $_POST["amount"];

$customerName = $_POST["customerName"];
$customerEmail = $_POST["customerEmail"];
$customerPhone = $_POST["customerPhone"];
 
// echo $orderId . "|" . $orderAmount;
$host = "http://localhost/kanhapark";
$notifyUrl = $host. "notify.php";
$returnUrl = $host. "return.php";

$orderDetails = array();
$orderDetails["notifyUrl"] = $notifyUrl;
$orderDetails["returnUrl"] = $returnUrl;

//$userDetails = getUserDetails($orderId);
$order = getOrderDetails($orderId);

$orderDetails["customerName"] = $customerName;
$orderDetails["customerEmail"] = $customerEmail;
$orderDetails["customerPhone"] = $customerPhone;

$orderDetails["orderId"] = $order["orderId"];
$orderDetails["orderAmount"] = $orderAmount;
$orderDetails["orderNote"] = $order["orderNote"];
$orderDetails["orderCurrency"] = $order["orderCurrency"];

$orderDetails["appId"] = "817539a931df2fc405a9376f035718";

$orderDetails["signature"] = generateSignature($orderDetails);

// echo json_encode($orderDetails);

function generateSignature($postData){
  $secretKey = "d6b08f464d5ed8e1ea8dc8f6b613fae3c8776bd8";
 ksort($postData);
 $signatureData = "";
 foreach ($postData as $key => $value){
      $signatureData .= $key.$value;
 }
 $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
 $signature = base64_encode($signature);
 return $signature;
}
?>
 <!--<form id="redirectForm" method="post" action="https://cashfree.com/billpay/checkout/post/submit">-->
 <form id="redirectForm" method="post" action="https://www.cashfree.com/checkout/post/submit">
 
    <input type="hidden" name="appId" value="<?php echo $orderDetails["appId"] ?>"/>
    <input type="hidden" name="orderId" value="<?php echo $orderDetails["orderId"] ?>"/>
    <input type="hidden" name="orderAmount" value="<?php echo $orderDetails["orderAmount"] ?>"/>
    <input type="hidden" name="orderCurrency" value="<?php echo $orderDetails["orderCurrency"] ?>"/>
    <input type="hidden" name="orderNote" value="<?php echo $orderDetails["orderNote"] ?>"/>
    <input type="hidden" name="customerName" value="<?php echo $orderDetails["customerName"] ?>"/>
    <input type="hidden" name="customerEmail" value="<?php echo $orderDetails["customerEmail"] ?>"/>
    <input type="hidden" name="customerPhone" value="<?php echo $orderDetails["customerPhone"] ?>"/>
    <input type="hidden" name="returnUrl" value="<?php echo $orderDetails["returnUrl"] ?>"/>
    <input type="hidden" name="notifyUrl" value="<?php echo $orderDetails["notifyUrl"] ?>"/>
    <input type="hidden" name="signature" value="<?php echo $orderDetails["signature"] ?>"/>
  </form>

  <script>document.getElementById("redirectForm").submit();</script>

<?php


//function getUserDetails($orderId) {
//    return array(
//      "customerName" => "Manish Kumar",
//      "customerEmail" => "Manish.nigam007@gmail.com",
//      "customerPhone" => "8744944802"
//    );
//}

function getOrderDetails($orderId) {
  return array(
    "orderId" => time(),
   // "orderAmount" => $orderAmount,
    "orderNote" => "test order",
    "orderCurrency" => "INR"
  );
}



 ?>
