<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendNotyController extends Controller
{
 static   public function send(string $message,string $to,string $title)
    {




$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
"registration_ids":["'.$to.'":{
    "body": "'.$message.'",
    "title":"'.$title.'",
    "name":"iiiiiii",
    "da":"kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk"
}}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: key=AAAA7DWmgxk:APA91bE98OARURMVug42-x8i-Y0_BjbpRgxC5HdTY9WKkGAR26By_bX3FZX1pgx7Hatz3Wjo3v1d1e68He2fKzPo6bvmilu8TT2q4e7GPYoU0_i76GyLvZnsWxZtBmD-XYtkeJky-aV9',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}}
