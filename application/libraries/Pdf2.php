<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf2 extends TCPDF
{ 
	function __construct() { 
		parent::__construct(); 
	} 
    // Page footer
    public function Footer() { 
        $this->SetY(-15); 
        $this->SetFont('helvetica', 'I', 8); 
        $this->Cell(0, 5, 'Form No. 13/02, Rev.4 Issued Date : 12 Apr 2022', 0, false, 'R', 0,'', 0, false);
    }
}
/*Author:Tutsway.com */
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */