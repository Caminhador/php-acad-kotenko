<?php

function createExcelFile($min = 1, $max = 9) {
    $excel = new PHPExcel();

    $alphabet = range('A', 'Z');
    for ($col = $min; $col <= $max; $col++) {
        for ($row = $min; $row <= $max; $row++) {
            $result = $col * $row;
            $excel->getActiveSheet()->setCellValue("{$alphabet[$col]}{$row}", "{$col} x {$row} = {$result}");
        }
    }

    $file = __DIR__ . '/files/' . time() . '.xlsx';

    $writer = new PHPExcel_Writer_Excel2007($excel);
    $writer->save($file);

    return $file;
}
