<?php
require_once APPPATH."/third_party/PHPExcel.php"; 
 
class Libexcel extends PHPExcel { 
    public function __construct() { 
      parent::__construct(); 
    }

    public function import_master($file_path)
	{      
        try 
        {
	        $inputFileType = PHPExcel_IOFactory::identify($file_path);
	        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
	        $objPHPExcel = $objReader->load($file_path);
        } catch(Exception $e) {
                die('Error loading file "'.pathinfo($file_path,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

		$worksheetData = $objReader->listWorksheetInfo($file_path);
		$totalRows     = $worksheetData[0]['totalRows'];
		$totalColumns  = $worksheetData[0]['totalColumns'];
        $sheet = $objPHPExcel->getSheet(0);
        $highestColumn = $sheet->getHighestColumn();

        $list_data = array();

		for ($row = 3; $row <= $totalRows; $row++) {

            $rowData = $sheet->rangeToArray(
            	'A' . $row . ':' . $highestColumn . $row,
				NULL,
				TRUE,
                FALSE
            );

   //          echo $rowData[0][0]."<br>";
			// echo $rowData[0][1]."<br>";
			// echo $rowData[0][2]."<br>";
			// echo $rowData[0][3]."<br>";
			// echo $rowData[0][4]."<br>";
			// echo $rowData[0][5]."<br>";

			// if($rowData[0][5] == '') echo "true";

            if($rowData[0][0] == '') $date_failure_start = "";
            else $date_failure_start = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][0]));
    //         // $date_failure_start = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][0]));
            
            if($rowData[0][1] == '') $time_failure_start = "";
            else $time_failure_start = PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][1], 'hh:mm:ss');

            if($rowData[0][2] == '') $date_start_repair = "";
            else $date_start_repair = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][2]));

            if($rowData[0][3] == '') $time_start_repair = "";
            else $time_start_repair = PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'hh:mm:ss');

            if($rowData[0][4] == '') $date_repair_finish = "";
            else $date_repair_finish = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][4]));

            if($rowData[0][5] == '') $time_repair_finish = "";
            else $time_repair_finish = PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][5], 'hh:mm:ss');

    		$data = array(
                  "failure_start"=> $date_failure_start.' '.$time_failure_start,
                  "start_repair"=> $date_start_repair.' '.$time_start_repair,
                  "repair_finish"=> $date_repair_finish.' '.$time_repair_finish,
            );
            array_push($list_data, $data);
    	}
    	return $list_data;
	}

    public function createExcelPPJK($parameter)
    {
    	$alphas = range("A", "Z");
    	$objPHPExcel = new PHPExcel();
    	$sNAMESS = "";
    	foreach ($parameter as $key => $value) {
    		${$key}=$value;
    	}
			if(!isset($col)){
				echo "Definisi Kolom tidak ada!";
				die();
			}else{
				$jumlahKolom = count($col);
				if($jumlahKolom==0){
					echo "Definisi Kolom tidak ada!";
					die();
				}else{
					if($jumlahKolom>26){
						$alphas = $this->createColumnsArray("c");
					}
				}
			}
			
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setTitle($sNAMESS);
			$objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(55);
			$loop = 1;
			$arrKolom =0;
			foreach ($col as $colvalue) {
				foreach ($colvalue as $keycol => $valuecol) {
					${$keycol}=$valuecol;
				}
				if(isset($nilai)){
					if($nilai!=""){
						$objPHPExcel->getActiveSheet()->setCellValue($alphas[$arrKolom]."1", $nilai);
					}
				}
				if(isset($fontsize)){
					if($fontsize!=0){
						$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getFont()->setSize($fontsize);
					}
				}
				if(isset($bold)){	
					if($bold){
						$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getFont()->setBold(true);
					}
				}
				$classvertical = PHPExcel_Style_Alignment::VERTICAL_CENTER;
				if(isset($valign)){	
					switch ($valign) {
						case 'top':
							$classvertical = PHPExcel_Style_Alignment::VERTICAL_TOP;
							break;
						case 'bottom':
							$classvertical = PHPExcel_Style_Alignment::VERTICAL_BOTTOM;
							break;
					}
				}
				$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getAlignment()->setVertical($classvertical);

				$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_LEFT;
				if(isset($halign)){	
					switch ($halign) {
						case 'center':
							$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_CENTER;							
							break;
						case 'right':
							$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_RIGHT;
							break;
					}
				}
				$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getAlignment()->setHorizontal($classhorizontal);
				$loop++;
				$arrKolom++;
			}
			if(isset($rsl)){
				$nomor = 1;
				$rowloc = 2;
				foreach ($rsl as $key => $value) {
					$colloc=0;
					$arrKolom =0;
					foreach ($col as $colvalue) {
						foreach ($colvalue as $keycol => $valuecol) {
							$ketemu = false;
							if($keycol=="namanya"){
								if($valuecol=="nomor"){
									$valueval = $nomor;	
								}
								else if($valuecol == 'origin_port_name') {
									$valueval = $value->origin_port_name." - ".$value->destination_port_name;
								}
								else if($valuecol == 'ppjk_status') {
									if($value->ppjk_status == '1') $valueval = "Approved";
									else if($value->ppjk_status == '2') $valueval = "Rejected";
									else $valueval = "Canceled by BAPP";
								}
								else{
									$valueval = $value->$valuecol;	
								}
								$objPHPExcel->getActiveSheet()->setCellValue($alphas[$arrKolom].$rowloc, $valueval);
								$objPHPExcel->getActiveSheet()->getColumnDimension($alphas[$arrKolom])->setAutoSize(true);
								$ketemu = true;
							}
							if($keycol=="format"){
								switch ($valuecol) {
									case 'datetime':
										$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom].$rowloc)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
										break;
									case 'angkakoma':
										$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom].$rowloc)->getNumberFormat()->setFormatCode('_(#,##0.00_);_(\(#,##0.00\);_("-"??_);_(@_)');
										break;			
								}
							}
						}
						$arrKolom++;			
					}
					$rowloc++;
					$nomor++;
				}
			} 
			header('Content-Type: application/vnd.ms-excel'); //mime type
			header('Content-Disposition: attachment;filename="'.$sFILNAM.'.xls"'); //tell browser what's the file name
			header('Cache-Control: max-age=0'); //no cache
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
			$objWriter->save('php://output');    	
			
    }

    function createColumnsArray($end_column, $first_letters = ''){
		  $columns = array();
		  $length = strlen($end_column);
		  $letters = range('A', 'Z');

  		// Iterate over 26 letters.
		  foreach ($letters as $letter) {
	      // Paste the $first_letters before the next.
	      $column = $first_letters . $letter;
	      // Add the column to the final array.
	      $columns[] = $column;
	      // If it was the end column that was added, return the columns.
	      if ($column == strtoupper($end_column))
	          return $columns;
		  }

		  // Add the column children.
		  foreach ($columns as $column) {
	      // Don't itterate if the $end_column was already set in a previous itteration.
	      // Stop iterating if you've reached the maximum character length.
	      if (!in_array(strtoupper($end_column), $columns) && strlen($column) < $length) {
          $new_columns = $this->createColumnsArray(strtoupper($end_column), $column);
          // Merge the new columns which were created with the final columns array.
          $columns = array_merge($columns, $new_columns);
	      }
		  }

		  return $columns;
		}
}