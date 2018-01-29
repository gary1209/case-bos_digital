<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$message = $_REQUEST["message"];
$message = "\n".$name."\n". $email."\n". $phone."\n". $message;

$initData['message'] = $message;
$token = '797QBGJeRBlTaIrUCVYLct5CY2EEJzabxEC5wu7qmWU';
 


sendLineNotify($initData, $token);
// echo '<pre>';
// print_r(sendLineNotify($initData, $token));
// echo '</pre>';
echo "<script>alert('傳送成功');location.href ='index.php'</script>";

// echo '<meta http-equiv=REFRESH CONTENT=2;url=user.php>';
function sendLineNotify($initData, $token,$url = 'https://notify-api.line.me/api/notify') {
    $ch = curl_init();
    $header[] = 'Authorization: Bearer';
    $header[] = $token;
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => array(implode(' ',$header)),
        CURLOPT_POSTFIELDS => http_build_query($initData),
    ));

    $result = curl_exec($ch);
    curl_close($ch); 
    $aResult = json_decode ($result, TRUE);
    return $aResult;
}
?>