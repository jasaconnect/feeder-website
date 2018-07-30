<?php

error_reporting("E_ALL");
require('config.php');
$data = [
    "key" => $config['key'],
    "secret" => $config['secret'],
    "service_id" => urlencode($_POST['service_id']), //int
    "date_start" => urldecode($_POST['date']), //datetime
    "date_end" => urlencode($_POST['date']),//datetime
    "description" => urlencode($_POST['description']),
    "alamat_kota" => urlencode($_POST['alamat_kota']),
    "location" => urlencode($_POST['location']),
    "type" => urlencode($_POST['type']),
    "latitude" => urlencode($_POST['latitude']),
    "longitude" => urlencode($_POST['longitude']),
    "ref" => $_SERVER['HTTP_HOST'],
    "user_id" => 0,
    "user_name" => urlencode($_POST['user_name']),
    "user_email" => urlencode($_POST['user_email']),
    "user_phone" => urlencode($_POST['user_phone']),
    "user_gender" => urlencode($_POST['user_gender']),
    "alamat_beda" => 0,
    "user_address" => urlencode($_POST['user_address']),
    "unit_amount" => urlencode($_POST['unit_amount'])
];

$data['user'] = [
    'name' => urlencode($_POST['user_name']),
    'email' => urlencode($_POST['user_email']),
    'phone' => urlencode($_POST['user_phone']),
    'gender' => urlencode($_POST['user_gender']),
    'password' => '9988001122',
    'address' => urlencode($_POST['user_address']),
];

$data['items'][] = [
    'q' => 'Merk',
    'a' => 'Samsung'
];

$data['items'][] = [
    'q' => 'Jenis Bahan',
    'a' => 'kulit'
];
$data['items'][] = [
    'q' => 'Warna',
    'a' => 'merah'
];

$data['items'][] = [
    'q' => 'No Seri',
    'a' => '76218321321321673'
];

$dataEncoded = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $config['endpoint']);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataEncoded);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($dataEncoded))
);
$result = curl_exec($ch);
echo $result;
die;
