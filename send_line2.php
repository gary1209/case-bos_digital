<?php
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$line = $_REQUEST['line'];
$message = $_REQUEST["message"];
$message = "\n姓名：".$name."\n電話：". $phone."\nline：". $line."\n訊息：".$message;

$initData['message'] = $message;
$token = 'yuJWsTSwC9Zwh47lnfJFu8LGgeyPy2p6Vf9bldgP1dk';
 


sendLineNotify($initData, $token);
// echo '<pre>';
// print_r(sendLineNotify($initData, $token));
// echo '</pre>';
echo "<script charset='UTF-8'></script><script>alert('傳送成功');location.href ='contact_us.php'</script>";

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