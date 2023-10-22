<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/PHPMailer/PHPMailer.php';

class PHPMailerLib extends PHPMailer
{
    public function __construct()
    {
        parent::__construct();
    }
}