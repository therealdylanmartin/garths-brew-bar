<?php
$email = $_POST['email'];
if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    // MailChimp API credentials
    $apiKey = '';
    $listID = '';
    
    // MailChimp API URL
    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
    
    // member information
    $data = array(
        'email_address' => $email,
        'status'        => 'subscribed'
    );
    $json = json_encode($data);
    
    // send a HTTP POST request with curl
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    ob_start();
	print_r($result);
	print_r($data);
	error_log(ob_get_contents());
	ob_end_clean();
    curl_close($ch);
}
