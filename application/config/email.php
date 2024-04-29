<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$ci =& Get_instance ();

$ci->load->model('email_model');
$email = $ci->email_model->lista();

$config['protocol']     = $email[0]->protocol;
$config['smtp_host']    = $email[0]->smtp_host;
$config['smtp_port']    = $email[0]->smtp_port;
$config['smtp_timeout'] = '7';
$config['smtp_user']    = $email[0]->smtp_user;
$config['smtp_pass']    = $email[0]->smtp_pass;
$config['charset']      = $email[0]->charset;
$config['newline']      = "\r\n";
$config['crlf']         = "\r\n";
$config['mailtype']     = 'html';
$config['validate']   = TRUE;
if ($email[0]->smtp_crypto != ''){
    $config['smtp_crypto']   = $email[0]->smtp_crypto;
}