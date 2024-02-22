<?php
    use YooKassa\Model\Notification\NotificationSucceeded;
    use YooKassa\Model\Notification\NotificationWaitingForCapture;
    use YooKassa\Model\Notification\NotificationEventType;
    require __DIR__ . '/vendor/autoload.php';
    require __DIR__ . '/functionsDB.php';
    include ('config.php');
    $source = file_get_contents('php://input');
    $requestBody = json_decode($source, true);

try {
        $payment_status = $requestBody['object']['status'] ?? '';
        $payment_id = $requestBody['object']['id'] ?? '';
        $payment_paid = $requestBody['object']['paid'] ?? '';
        $payment_amount = $requestBody['object']['amount']['value'] ?? '';
        $payment_order_id = $requestBody['object']['metadata']['orderNumber'] ?? '';
        
                if ($payment_status == 'succeeded' && $payment_paid) {
                    if(checkPaymentStatus($conn, $payment_order_id)){
                            // the payment is already in use
                    } else{
                        $user_id = getUserFromOrder($conn, $payment_order_id);
                        $subscriptionDate = updateOrder($conn, $payment_order_id, $payment_amount, $user_id);
                        updateSubscription($conn, $user_id, $subscriptionDate);
                    }
                    
                }
        

} catch (Exception $e) {
    file_get_contents(__DIR__ . '/errors.txt', $e->getMessage() . PHP_EOL, FILE_APPEND);
}



?>

<?php
    $payment = $notification->getObject();
?>