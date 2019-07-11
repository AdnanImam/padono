<?php
/**
 * Name:    DateFormatter
 * Requirements: PHP5 or above
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulasi
{
	function calculateMu($data) {
        $sum = 0;
        foreach ($data as $key => $value) {
            $sum += $value;
        }
        return $sum/sizeof($data);
    }

    function calculateSigma($data) {
        $n = sizeof($data);
        $sum = 0;
        $square_sum = 0;
        foreach ($data as $key => $value) {
            $sum += $value;
            $square_sum += pow($value, 2);
        }
        $sum_square = pow($sum, 2);
        return sqrt((($n * $square_sum) - $sum_square) / ($n * ($n-1)));
    }

    function calculateLamda($data){
        return 1/$this->calculateMu($data);
    }

    function calculateFti($data){
        sort($data);
        $result = array();
        foreach ($data as $key => $value) {
            array_push($result, ((($key+1)-0.3)/(sizeof($data)+0.4)));
        }
        return $result;
    }

    function calculateYi($data){
        $fti = $this->calculateFti($data);
        $result = array();
        foreach ($fti as $key => $value) {
            array_push($result, log(log(1/(1-$value))));
        }
        return $result;
    }

    function calculateXi($data){
        sort($data);
        $result = array();
        foreach ($data as $key => $value) {
            array_push($result, log($value));
        }
        return $result;
    }

    function calculateXiYi($data){
        $result = 0;
        $xi = $this->calculateXi($data);
        $yi = $this->calculateYi($data);

        for ($i=0; $i < sizeof($xi); $i++) { 
            $result += $xi[$i] * $yi[$i];
        }
        return $result;
    }

    function calculateSumOfXiSquare($data)
    {
        $square_sum = 0;
        $xi = $this->calculateXi($data);
        foreach ($xi as $key => $value) {
            $square_sum += pow($value, 2);
        }
        return $square_sum;
    }

    function calculateSumXiSquare($data)
    {
        $sum = 0;
        $xi = $this->calculateXi($data);
        foreach ($xi as $key => $value) {
            $sum += $value;
        }
        return pow($sum, 2);
    }
    

    function calculateSumXiSumYi($data)
    {
        $resultXi = 0;
        $resultYi = 0;
        $xi = $this->calculateXi($data);
        $yi = $this->calculateYi($data);

        foreach ($xi as $key => $value) {
            $resultXi += $value;
        }
        foreach ($yi as $key => $value) {
            $resultYi += $value;
        }

        return $resultXi * $resultYi;
        
    }

    function calclateBeta($data){
        $n = sizeof($data);
        $xiyi = $this->calculateXiYi($data);
        $sumXiSumYi = $this->calculateSumXiSumYi($data);
        $sumOfXiSquare = $this->calculateSumOfXiSquare($data);
        $sumXiSquare = $this->calculateSumXiSquare($data);

        return ($xiyi-($sumXiSumYi/$n))/($sumOfXiSquare-($sumXiSquare/$n));
    }
    
    function calculateSumXi($data)
    {
        $sum = 0;
        $xi = $this->calculateXi($data);
        foreach ($xi as $key => $value) {
            $sum += $value;
        }
        return $sum;
    }

    function calculateSumYi($data)
    {
        $sum = 0;
        $yi = $this->calculateYi($data);
        foreach ($yi as $key => $value) {
            $sum += $value;
        }
        return $sum;
    }

    function calculateAlpha($data)
    {
        $n = sizeof($data);
        $sumXi = $this->calculateSumXi($data);
        $sumYi = $this->calculateSumYi($data);
        return ($sumYi/$n)-($this->calclateBeta($data)*($sumXi/$n));
    }

    function calculateEta($data)
    {
        $e = 2.718281828459045235360287471352;
        return pow($e, -($this->calculateAlpha($data)/$this->calclateBeta($data)));
    }

    function calculateQo($data)
    {
        $result = array();
        for ($i=0; $i < sizeof($data); $i++) { 
            array_push($result, ($i+1)/sizeof($data));
        }
        return $result;
    }

    function calculateQeNormal($data)
    {
        $result = array();
        sort($data);
        $mu = $this->calculateMu($data);
        $sigma = $this->calculateSigma($data);
        foreach ($data as $key => $value) {
            array_push($result, $this->getCdf($value, $mu, $sigma));
        }
        return $result;
    }

    function calculateQeEksponensial($data)
    {
        sort($data);
        $result = array();
        $lamda = $this->calculateLamda($data);
        foreach ($data as $key => $value) {
            array_push($result, 1-exp((-$value)*$lamda));
        }
        return $result;
    }

    function calculateQeWeibull($data)
    {
        sort($data);
        $result = array();
        $beta = $this->calclateBeta($data);
        $eta = $this->calculateEta($data);
        
        foreach ($data as $key => $value) {
            array_push($result, 1 - (1/exp(pow($value/$eta, $beta))));
        }
        return $result;
    }

    function calculateDMaxNormal($data)
    {
        $di = array();
        $qo = $this->calculateQo($data);
        $qe = $this->calculateQeNormal($data);
        array_push($di, 0);
        for ($i=0; $i < sizeof($qo); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i]));
        }
        for ($i=1; $i < sizeof($qe); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i-1]));
        }
        return max($di);
    }

    function calculateDMaxExponensial($data)
    {
        $di = array();
        $qo = $this->calculateQo($data);
        $qe = $this->calculateQeEksponensial($data);
        array_push($di, 0);
        for ($i=0; $i < sizeof($qo); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i]));
        }
        for ($i=1; $i < sizeof($qe); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i-1]));
        }
        return max($di);
    }

    function calculateDMaxWeibull($data)
    {
        $di = array();
        $qo = $this->calculateQo($data);
        $qe = $this->calculateQeWeibull($data);
        array_push($di, 0);
        for ($i=0; $i < sizeof($qo); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i]));
        }
        for ($i=1; $i < sizeof($qe); $i++) { 
            array_push($di, abs($qe[$i]-$qo[$i-1]));
        }
        return max($di);
    }

    function getCdf($value, $mu, $sigma){
        $t = $value-$mu;
        $y = 0.5*$this->erfcc(-$t/($sigma*sqrt(2.0)));
        if ($y>1.0) $y = 1.0;
        return $y;
    }
     
    function erfcc($x) {
        $z = abs($x);
        $t = 1. / (1. + 0.5*$z);
        $r = 
            $t * exp(-$z*$z-1.26551223+
            $t*(1.00002368+
            $t*(.37409196+
            $t*(.09678418+
            $t*(-.18628806+
            $t*(.27886807+
            $t*(-1.13520398+
            $t*(1.48851587+
            $t*(-.82215223+
            $t*.17087277)))))))));
        if ($x >= 0.)
            return $r;
        else
            return 2 - $r;
    }

    function gamma($data)
    {
        if ($data == 0.0) {
            return 0;
        }
        static $p0 = 1.000000000190015;
        static $p = array(
            1 => 76.18009172947146,
            2 => -86.50532032941677,
            3 => 24.01409824083091,
            4 => -1.231739572450155,
            5 => 1.208650973866179e-3,
            6 => -5.395239384953e-6
        );
        $y = $x = $data;
        $tmp = $x + 5.5;
        $tmp -= ($x + 0.5) * log($tmp);
        $summer = $p0;
        for ($j=1; $j<=6; ++$j) {
            $summer += ($p[$j] / ++$y);
        }
        return exp(0 - $tmp + log(2.5066282746310005024157652848110452530069867406099 * $summer / $x));
    }
}
