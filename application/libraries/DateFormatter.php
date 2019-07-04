<?php
/**
 * Name:    DateFormatter
 * Requirements: PHP5 or above
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class DateFormatter
{
	public function id_date_format($date){
		$month = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$splitedDate = explode('-', $date);
		return $splitedDate[2] . ' ' . $month[ (int)$splitedDate[1] ] . ' ' . $splitedDate[0];
	}
}
