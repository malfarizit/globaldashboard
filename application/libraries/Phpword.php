<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once  APPPATH . '/third_party/PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
Autoloader::register();
Settings::loadConfig();

class Phpword extends Autoloader {

}