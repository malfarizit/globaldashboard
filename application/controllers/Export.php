<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Export extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * map to /index.php/welcome/<method_name>
	 * So any other public methods not prefixed with an underscore will
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Main_model', 'export');
    }    
 
    public function index() {
        $data['export_list'] = $this->export->exportList2();
        $this->load->view('export', $data);
    }
    // create xlsx
    public function generateXls() {
        // create file name
		$curdate =  date("Y-m-d");
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList2();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Track Num');
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Description Problem'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Date');
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Type');
		$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Area');		
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Location'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Specific Location'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Issue by'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Issuer');
		$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Priority');
		$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Action Num');
		$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'PIC'); 		
		$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Action');    
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Implement Date');       
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', 'DueDate');
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Picture');
		$objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Suggestion');
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Status');
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Notes');

		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('I1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('J1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('L1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('M1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('M1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('N1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('N1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('O1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');
		$objPHPExcel->getActiveSheet()->getStyle('O1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('P1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('P1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('Q1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('Q1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('R1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('R1')->getFont()->getColor()->setRGB('FFFFFF');		
		$objPHPExcel->getActiveSheet()->getStyle('S1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('S1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('T1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('T1')->getFont()->getColor()->setRGB('FFFFFF');	
		                                           
												   
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(14);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(14);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(10);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(14); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(10); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(10); 
		 // set Row
        $rowCount = 2;
		$rowbase=1;
        foreach ($listInfo as $list) {
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':S'.$rowCount.'')->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowbase.':S'.$rowbase.'')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowbase.':S'.$rowbase.'')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);	
			$objPHPExcel->getActiveSheet()->getRowDimension($rowCount)->setRowHeight(33); 
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $rowbase); 
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->TrackingNum);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->Problem); 
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->Date);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->OCType);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->arename);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->locname);
			$objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->ShortChart); 
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $list->Remark);
			if ( $list->Remark=='Employee'){
				$objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->EmpName);
			}else if ( $list->Remark=='Client'){
				$objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->CustID);
			}else{
				$objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->EmpName);
			} 
			
			$objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $list->Priority);
			$objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $list->AN);
			$objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $list->PIC);
			$objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $list->ACT);
			if($list->IM!='0000-00-00'){
				$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $list->IM);  
			}else{
				$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, '');  
			}
			if($list->DueDate!='0000-00-00'){
				$objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, $list->DueDate); 
			}else{
				$objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, ''); 
			}
			$objPHPExcel->getActiveSheet()->SetCellValue('Q' . $rowCount, '');
            $objPHPExcel->getActiveSheet()->SetCellValue('R' . $rowCount, $list->Suggestion); 
			if ( $list->ST=='Closed'){
				$objPHPExcel->getActiveSheet('')->getStyle('S'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('008000');
				$objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount, $list->ST); 
			}else if($list->ST=='Open' and $list->DueDate < $curdate and $list->DueDate != "0000-00-00") {
				$objPHPExcel->getActiveSheet ('')->getStyle('S'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FF0000');
				$objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount,'Expired' );
			}else{
				$objPHPExcel->getActiveSheet ('')->getStyle('S'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FF0000');
				$objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount, $list->ST);
			}
			$objPHPExcel->getActiveSheet()->SetCellValue('T' . $rowCount, $list->AP);
			// if ( $list->Status=='Closed'){
				// $objPHPExcel->getActiveSheet('')->getStyle('N'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('008000');
				// $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $list->Status); 
			// }else IF ( $list->Status=='Assign'){
				// $objPHPExcel->getActiveSheet ('')->getStyle('N'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FFFF00');
				// $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $list->Status);
			// }else{
				// $objPHPExcel->getActiveSheet('')->getStyle('N'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FF0000');
				// $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $list->Status);
			// } 
            $rowCount++;
            $rowbase++;
        }
        $filename = "ObservationReport". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        $objWriter->save('php://output');  
    }
    
	public function generateQuality() {
        // create file name
		$curdate =  date("Y-m-d");
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportListQuality();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Date');
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'QOC No.'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Raised by');
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Issued by');		
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Issued to'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'ProjectNo.'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Item Description.'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Description of QOC'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'NCR Required?');
		$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Observation Category');
		$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Action to be taken');
		$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Target Date'); 		
		$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'KPI No'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Status'); 

		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('I1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('J1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('L1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('M1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('M1')->getFont()->getColor()->setRGB('FFFFFF');	
		$objPHPExcel->getActiveSheet()->getStyle('N1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('N1')->getFont()->getColor()->setRGB('FFFFFF');		
		$objPHPExcel->getActiveSheet()->getStyle('O1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('1C9AD6');		
		$objPHPExcel->getActiveSheet()->getStyle('O1')->getFont()->getColor()->setRGB('FFFFFF');		
		  									   
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(17);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(40);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(14);		
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(10);  
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);  
		 // set Row
        $rowCount = 2;
		$rowbase=1;
        foreach ($listInfo as $list) { 
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':N'.$rowCount.'')->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowbase.':N'.$rowbase.'')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowbase.':N'.$rowbase.'')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);	
			$objPHPExcel->getActiveSheet()->getRowDimension($rowCount)->setRowHeight(30); 
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $rowbase); 
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->Date);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->CardNo); 
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->Raised_by);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->Issued_by);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->Issued_to);
			$objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->Project_No); 
			$objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->Item_Desc); 
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $list->Description_Observation);
			$objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->NCR);
			$objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $list->Observation_category);
			$objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $list->Action);
			if($list->Target_Date!='0000-00-00'){
				$objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $list->Target_Date);  
			}else{
				$objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, '');  
			} 
			$objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $list->KPI_No); 
			if ($list->Status=='Closed'){
				$objPHPExcel->getActiveSheet('')->getStyle('O'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('008000');
				$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $list->Status); 
			}else if ($list->Status=='Response'){
				$objPHPExcel->getActiveSheet ('')->getStyle('O'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('0E86D4');
				$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount,$list->Status);
			}else{
				$objPHPExcel->getActiveSheet ('')->getStyle('O'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FF0000');
				$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount,$list->Status);
			} 
            $rowCount++;
            $rowbase++;
        }
        $filename = "QOCReport". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        $objWriter->save('php://output');  
    }
	
	public function generateWord3() {
		$incidentnum=$this->uri->segment(3);
		//$incident= $this->Main_model->view_detail('incident', array('IncidentNum' => $incidentnum ))->row_array();	  
		//$incident= $this->Main_model->view_join_incident('incident','department','location','employee','IncidentNum','DeptID','LocID','EmpID',$incidentnum);
		//$incident= $this->Main_model->view_join_incident('incident','department','location','IncidentNum','DeptID','LocID',$incidentnum);
		$incident= $this->Main_model->view_join_incident('incident','department','location','IncidentNum','DeptID','LocID',$incidentnum);
		$this->load->library('Phpword'); 
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15); 
		ob_clean(); 
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('http://cladtekhse.com/Asset/Template/Attachment_A_SR-01.docx');
		$IncTime=date('h:i A', strtotime($incident['Time'])); 
		//$idate=date('d-m-Y', $incident['Incident_Date']);
		$idate= date("d/m/y", strtotime($incident['Incident_Date']));
		$templateProcessor->setValues([
			'Initial_Incident' => $incident['Initial_Incident'], 
			'Incident_Date' => date("d/m/y", strtotime($incident['Incident_Date'])),
			'Time' => $IncTime,
			'SpvName' => $incident['SpvName'],
			'DeptID' => $incident['Dept_Name'],
			'LocID' => $incident['Description'],   
			'CompanyID' => $incident['CompanyID'],
			'EmpName' => $incident['EmpName'],
			// 'Title' => $incident['Title'],
			'Incident_type' => $incident['Incident_type'], 
			'Incident_Desc' => $incident['Incident_Desc'], 
			'Nature_of_injury' => $incident['Nature_of_injury'], 
			'Nature_others' => $incident['Nature_others'], 
			'Part_affected' => $incident['Part_affected'], 
			'Part_affected_others' => $incident['Part_affected_others'], 
			'Type_of_contact' => $incident['Type_of_contact'], 
			'T_Contact_others' => $incident['T_Contact_others'], 
			'Contact_with' => $incident['Contact_with'], 
			'Contact_with_others' => $incident['Contact_with_others'],
			'Emp_statement' => $incident['Emp_statement'],
			'Spv_statement' => $incident['Spv_statement'],
			// 'Spvdate' => $incident['spv_apv_date'],
			'HSEdate' => date("d/m/y", strtotime($incident['hsemanager_apv_date'])),
			'Safetydate' => date("d/m/y", strtotime($incident['safety_apv_date'])),
			'Safety_Name' => $incident['Safety_Name'] 
		]); 
		if($incident['Emp_Title']==''){
			$templateProcessor->setValue('Title',"N/A");
		}else{
			$templateProcessor->setValue('Title', $incident['Emp_Title']);
		}		
		if($incident['PropertyLost']==''){
			$templateProcessor->setValue('PropertyLost',"N/A");
		}else{
			$templateProcessor->setValue('PropertyLost', $incident['PropertyLost']);
		}
		if($incident['NatureLost']==''){
			$templateProcessor->setValue('NatureLost', "N/A");
		}else{
			$templateProcessor->setValue('NatureLost', $incident['NatureLost']);
		}
		if($incident['Object_Involved']==''){
			$templateProcessor->setValue('Object_Involved', "N/A");
		}else{
			$templateProcessor->setValue('Object_Involved', $incident['Object_Involved']);
		} 
		if($incident['Amount_Spill']==''){
			$templateProcessor->setValue('Amount_Spill', "N/A");
		}else{
			$templateProcessor->setValue('Amount_Spill', $incident['Amount_Spill']);
		} 
		if($incident['Image']==''){
			$templateProcessor->setValue('Image', "N/A");
		}else{
			$image=$incident['Image']; 
			$raw =[];
			$raw =explode("/",($image));
			$templateProcessor->cloneRow('Image', count($raw)); 
			for($i=0;$i<count($raw);$i++)
			{
			// $templateProcessor->setValue('AVTOR'.'#'.($i+1), htmlspecialchars($output['AVTOR'][$i])); 
				//GetImg($output['ID'][$i]) my function return image path
				$dd="asset/images/Incident/$raw[$i]"; 
				$templateProcessor->setImageValue('Image'.'#'.($i+1), ['path' => $dd,'width' => 150,'height' => 200,]);
			} 
			//$image=$incident['Image']; 
			//$raw =[];
			//$raw =explode("/",($image));
			//$ro=count($raw);
				// foreach($raw as $w){
					// for ($f = 1; $f <= $ro; $f++) { 
							//$dd="asset/images/Incident/$w->$f";  
							//$templateProcessor->setImageValue('Image',['path' => $dd,'width' => 150,'height' => 200,]);
					// }
				// } 
							
			//$templateProcessor->cloneRow('Image', 2);
		} 
		
		$Date2 = date('d/m/y', strtotime($incident['Incident_Date'] . " + 1 day"));
		if($incident['Incident_type']=='Property Damage' || $incident['Incident_type']=='Environmental'){
			$templateProcessor->setValues([ 
				'SpvName1' => "N/A",
				'SpvName2' => $incident['SpvName'],
				'DeptID1' => "",	
				'Shift' => "", 
				'Incident_Date1' => "N/A",
				'Incident_Date2' => date("d/m/y", strtotime($incident['Incident_Date'])),
				'Investigation_Date1' => "N/A",	
				'Investigation_Date2' => $Date2,
				'Type_of_work1' => "N/A",
				'Type_of_work2' => $incident['Type_of_work1'],  
			]); 				
		}else{
			$templateProcessor->setValues([
				'SpvName1' => $incident['SpvName'],
				'SpvName2' => "N/A",
				'DeptID1' => $incident['Dept_Name'],
				'Shift' => $incident['Shift'], 
				'Incident_Date1' => date("d/m/y", strtotime($incident['Incident_Date'])),
				'Incident_Date2' => "N/A",
				'Type_of_work1' => $incident['Type_of_work1'], 
				'Type_of_work2' => "N/A", 
				'Investigation_Date1' => $Date2,	
				'Investigation_Date2' => "N/A", 
			]); 				
		}
		$sign="asset/images/Sign/SIGN.PNG";  
		if($incident['Supervisor_sign']=='Signed'){
			$templateProcessor->setImageValue('SPV_sign', ['path' => $sign,'width' => 100,'height' => 100,]);
			$templateProcessor->setValue('SPV_Name', $incident['SpvName']);
		}else{
			$templateProcessor->setValue('SPV_sign', "N/A");
		}
		if($incident['SafetyOfficer_sign']=='Signed'){
			$templateProcessor->setImageValue('SO_sign', ['path' => $sign,'width' => 100,'height' => 100,]);
			$templateProcessor->setValue('SO_Name', $incident['Safety_Name']);
		}else{
			$templateProcessor->setValue('SO_sign', "N/A");
		}
		if($incident['HseManager_sign']=='Signed'){
			$templateProcessor->setImageValue('HSEM_sign', ['path' => $sign,'width' => 100,'height' => 100,]);
			$templateProcessor->setValue('HSEM_Name', "Jan Jonswan Hutasoit");
		}else{
			$templateProcessor->setValue('HSEM_sign', "N/A");
		}
		if($incident['HOD_sign']=='Signed'){
			$templateProcessor->setImageValue('HOD_sign', ['path' => $sign,'width' => 100,'height' => 100,]);
			$templateProcessor->setValue('HOD_Name', $incident['HOD_Name']);
		}else{
			$templateProcessor->setValue('HOD_sign', "N/A");
		}
		header("Content-Disposition: attachment; filename=Attachment.docx"); 
		$templateProcessor->saveAs('php://output');
	}
	
	public function generateWord8() {
		$investigationnum=$this->uri->segment(3);
		$investigation= $this->Main_model->view_detail('investigation', array('InvestigationNum ' => $investigationnum ))->row_array();		
		//$investigation =$this->Main_model->view_join_core('investigation','correctiveaction','InvestigationNum',$investigationnum);
		$incidentnum=$investigation['IncidentNum'];
		$incident= $this->Main_model->view_detail('incident', array('IncidentNum ' => $incidentnum ))->row_array();	
		$Dept= $this->Main_model->view_detail('department', array('DeptID ' => $incident['DeptID']))->row_array();	
		$Location1= $this->Main_model->view_detail('location', array('LocID ' => $incident['LocID']))->row_array();	
		$cause=$this->Main_model->view_join_cause('investigation','root','InvestigationNum',$investigationnum);
		//$cause2 =json_encode($cause);
		//echo $cause2;
		//echo json_encode(array($cause));
		//$correct= $this->Main_model->view_detail('correctiveaction', array('InvestigationNum ' => $investigationnum ))->row_array();	
		$correct=$this->Main_model->view_join_core2('investigation','correctiveaction','InvestigationNum',$investigationnum);	
		$cc=json_encode($correct); 	
		$ca=array($correct); 	
		$this->load->library('Phpword');
		$Ins=$investigation['Incident_Severity'];
		$Inc_Sev= explode(',', $Ins);
		$ww=array($investigation);  
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);
		
		ob_clean(); 
		$dds=strtolower($Location1['LocName']);
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('http://cladtekhse.com/Asset/Template/Attachment_B_SR-02.docx');
		$templateProcessor->setValue('Initial_Incident',$incident['Initial_Incident']);
		$IncDate=$incident['Incident_Date'];
		$templateProcessor->setValue('Incident_Date',date("d/m/y", strtotime($incident['Incident_Date'])));
		$templateProcessor->setValue('Time',date('h:i A', strtotime($incident['Time']))); 
		$templateProcessor->setValue('DeptID',$Dept['Dept_Name']);
		$templateProcessor->setValue('LocID',ucwords($dds));
		$templateProcessor->setValue('Incident_type',$incident['Incident_type']);
		$templateProcessor->setValue('Recordable',$investigation['Recordable']);
		$ss[]=explode("/",$Ins);  
		$templateProcessor->setValue('Incident_Severity', $Ins);  
		$templateProcessor->setValue('Incident_Seriousness',$investigation['Incident_Seriousness']);
		if($investigation['Investigation_level']=='Level 1'){
			$ws="$investigation[Investigation_level] aa";
			$templateProcessor->setValue('Investigation_level',"$investigation[Investigation_level]  (SPV, Employee, HSE Team, HSE Manager,HOD, GM)");
		}else if ($investigation['Investigation_level']=='Level 2'){
			$templateProcessor->setValue('Investigation_level',"$investigation[Investigation_level] (SPV, Employee, HSE Team, HSE Manager,HOD)");
			}
		else if($investigation['Investigation_level']=='Level 3'){
			$templateProcessor->setValue('Investigation_level',"$investigation[Investigation_level] (SPV, Employee, HSE Team)");
			} 
		else{
			$templateProcessor->setValue('Investigation_level',"$investigation[Investigation_level] (SPV, Employee, HSE Team, Other Deemeds)");
			} 
		$templateProcessor->setValue('List_Witness',$investigation['List_Witness']); 
		$templateProcessor->setValue('Witness_statement',$investigation['Witness_statement']); 
		$templateProcessor->setValue('Nature_of_injury',$incident['Nature_of_injury']);
		$templateProcessor->setValue('Nature_others',$incident['Nature_others']);
		$templateProcessor->setValue('Part_affected',$incident['Part_affected']);
		$templateProcessor->setValue('Part_affected_others',$incident['Part_affected_others']);
		$templateProcessor->setValue('Type_of_contact',$incident['Type_of_contact']);
		$templateProcessor->setValue('T_Contact_others',$incident['T_Contact_others']);
		$templateProcessor->setValue('Contact_with',$incident['Contact_with']);
		$templateProcessor->setValue('Contact_with_others',$incident['Contact_with_others']);
		$templateProcessor->setValue('SpvName',$incident['SpvName']); 
		$ssdd=explode(";",$investigation['HSE_Rep']);  
		$templateProcessor->setValue('Hse_Rep',$ssdd[0]); 
		
		$templateProcessor->setValue('HSEMName',"Jan Jonswan Hutasoit"); 
		
		$other =explode(';', $investigation['Other_Member']);  
		$sw=count($other);
		$templateProcessor->cloneRow('Other_Member', $sw); 
		for($h=0;$h<$sw;$h++)
        {	
			$ex=explode('/',$other[$h]);
			//$OT1=end($ex);
			//$OT2=$ex[0];
			//$templateProcessor->setValue('Other_Member'.'#'.($h+1),$other[$h]);  
			$templateProcessor->setValue('Other_Member'.'#'.($h+1),$ex[0]);  
			$templateProcessor->setValue('Empid'.'#'.($h+1),$ex[2]);  
			$templateProcessor->setValue('Other_Members'.'#'.($h+1),$ex[1]);  
			$templateProcessor->setValue('Phone'.'#'.($h+1),'(0778) 414140');  
			$templateProcessor->setValue('Incidentdt '.'#'.($h+1),date("d/m/y", strtotime($incident['Incident_Date'])));  
		}  
		$templateProcessor->setValue('Substandard_Practice',$investigation['Substandard_Practice']);
		$templateProcessor->setValue('Substandard_Condition',$investigation['Substandard_Condition']); 
		$templateProcessor->setValue('Explanation1',$investigation['Explanation1']);
		$templateProcessor->setValue('Explanation2',$investigation['Explanation2']); 
		$templateProcessor->setValue('Personal_factor',$investigation['Personal_factor']);
		$templateProcessor->setValue('Job_factor',$investigation['Job_factor']); 
		$templateProcessor->setValue('Explanation3',$investigation['Explanation3']);
		$templateProcessor->setValue('Explanation4',$investigation['Explanation4']);
		$templateProcessor->setValue('Explanation5',$investigation['Explanation5']);
		$templateProcessor->setValue('Lack_of_control',$investigation['Lack_of_control']); 
		
		$rows2 =count($cause);  
		$templateProcessor->cloneRow('No', $rows2); 
        for($i=0;$i<$rows2;$i++)
        { 
			$rr=$cause[$i]['Root_Image']; 
			$img="asset/images/Investigation/$rr"; 
			$templateProcessor->setValue('No'.'#'.($i+1), ($i+1));
			$templateProcessor->setValue('Causes'.'#'.($i+1), htmlspecialchars($cause[$i]['Root_Cause']));
            $templateProcessor->setImageValue('Image'.'#'.($i+1), ['path' => $img,'width' => 100,'height' => 100,]);
        }    
		
		
		$cor =count($correct);  
		$templateProcessor->cloneRow('ID', $cor); 
        for($j=0;$j<$cor;$j++)
        { 
			$ww=$correct[$j]['Cor_Image'];
			$tar=$correct[$j]['ACTDATE'];			
			$img2="asset/images/Investigation/$ww"; 
			$templateProcessor->setValue('ID'.'#'.($j+1), ($j+1));
			$templateProcessor->setValue('CORR'.'#'.($j+1), htmlspecialchars($correct[$j]['CORR']));
			$templateProcessor->setValue('RES'.'#'.($j+1), htmlspecialchars($correct[$j]['RES']));
			$templateProcessor->setValue('TARDATE'.'#'.($j+1), htmlspecialchars($correct[$j]['TARDATE']));			
			if ($tar!='0000-00-00'){
				$templateProcessor->setValue('ACTDATE'.'#'.($j+1), htmlspecialchars(date("d/m/y", strtotime($correct[$j]['ACTDATE']))));
			}else{
				$templateProcessor->setValue('ACTDATE'.'#'.($j+1), '');
			}  
			//$templateProcessor->setValue('ACTDATE'.'#'.($j+1), htmlspecialchars(date("d/m/y", strtotime($correct[$j]['ACTDATE']))));
            if ($ww!=''){
				$templateProcessor->setImageValue('Image2'.'#'.($j+1), ['path' => $img2,'width' => 100,'height' => 100,]);
			}else{ 
				$templateProcessor->setValue('Image2'.'#'.($j+1), '');
			}  
			
			$sign="asset/images/Sign/SIGN.PNG";  
			if($investigation['Status']=='Closed'){
				$templateProcessor->setImageValue('SPV_sign', ['path' => $sign,'width' => 110,'height' => 200,]);
				$templateProcessor->setImageValue('HOD_sign', ['path' => $sign,'width' => 110,'height' => 200,]); 
			}ELSE{
				$templateProcessor->setValue('SPV_sign',''); 
				$templateProcessor->setValue('HOD_sign','');  
			}
        }     
		header("Content-Disposition: attachment; filename=Attachment.docx"); 
		$templateProcessor->saveAs('php://output');
	}
	
}
