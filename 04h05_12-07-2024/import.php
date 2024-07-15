<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function columnNumberToLetter($columnNumber)
{
    $columnLetter = '';
    while ($columnNumber > 0) {
        $remainder = ($columnNumber - 1) % 26;
        $columnLetter = chr(65 + $remainder) . $columnLetter;
        $columnNumber = (int)(($columnNumber - $remainder) / 26);
    }
    return $columnLetter;
}

function importToExcel($inputFile, $outputFile)
{
    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Open the input file
    $handle = fopen($inputFile, 'r');
    if ($handle) {
        $rowNumber = 1;

        while (($line = fgets($handle)) !== false) {
            // Split the line into columns based on multiple spaces
            $columns = preg_split('/\s{4,}/', trim($line));

            // Write the columns to the Excel sheet
            foreach ($columns as $columnNumber => $columnValue) {
                $columnLetter = columnNumberToLetter($columnNumber + 1);
                $cellCoordinate = $columnLetter . $rowNumber;
                $sheet->setCellValue($cellCoordinate, $columnValue);
            }

            $rowNumber++;
        }

        fclose($handle);
    } else {
        echo "Unable to open file!";
        return;
    }

    // Write the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
    $writer->save($outputFile);

    echo "Data successfully imported to $outputFile";
}

// Example usage
$inputFile = 'input.txt';  // File đầu vào
$outputFile = 'output.xlsx';  // File đầu ra
importToExcel($inputFile, $outputFile);
