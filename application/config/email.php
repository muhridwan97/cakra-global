<?php defined('BASEPATH') OR exit('No direct script access allowed');
$config = [
    'protocol'  => 'smtp',
    'smtp_host' => 'mail.hijoy.id',
    'smtp_port' => 465,
    'smtp_user' => 'auto-replay@hijoy.id',
    'smtp_pass' => 'Subject2024$$',
    'smtp_crypto' => 'ssl', // Untuk SSL
    'mailtype'  => 'html',
    'validation' => TRUE, // Untuk validasi email
    'smtp_auth' => TRUE, // Otentikasi SMTP
    'smtp_timeout' => 7, // Timeout untuk koneksi SMTP
    'crlf' => "\r\n", // Line break untuk email
    'newline' => "\r\n" // Line break untuk email
];
// $config = [
//     'protocol' => 'smtp',
//     'smtp_host' => 'sandbox.smtp.mailtrap.io',
//     'smtp_port' => 2525,
//     'smtp_user' => 'b2c3b262f2dfe1',
//     'smtp_pass' => 'e2a5dc1c26701a',
//     'mailtype' => 'html',
//     'crlf' => "\r\n",
//     'newline' => "\r\n"
//     ];
