<?php
//require_once('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$path = dirname(__FILE__);

$data = array(
    array(1, 'INV201806001', '1000'),
    array(2, 'INV201806001', '1000'),
    array(3, 'INV201806002', '0'),
    array(4, 'INV201807001', '1000'),
    array(5, 'INV201807001', '1000'),
    array(6, 'INV201807001', '1000'),
    array(7, 'INV201807002', '0'),
    array(8, 'INV201807002', '0'),
);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$row = 3;
$startRow = -1;
$previousKey = '';
foreach($data as $index => $value){
    if($startRow == -1){
        $startRow = $row;
        $previousKey = $value[1];
    }
    $sheet->setCellValue('C' . $row, $value[0]);
    $sheet->setCellValue('D' . $row, $value[1]);
    $sheet->setCellValue('E' . $row, $value[2]);
    $nextKey = isset($data[$index+1]) ? $data[$index+1][1] : null;

    if($row >= $startRow && (($previousKey <> $nextKey) || ($nextKey == null))){
        $cellToMerge = 'E'.$startRow.':E'.$row;
        $spreadsheet->getActiveSheet()->mergeCells($cellToMerge);
        $startRow = -1;
    }

    $row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('test-xls-merge.xlsx');