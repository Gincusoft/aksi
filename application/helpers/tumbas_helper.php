<?php

/*
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

if (!function_exists('human_to_sql')) {

  /**
   * 
   * @param String $date
   * @return String
   */
  function human_to_sql($date) {
    $data = explode(' ', $date);

    $months_arr = array(
        'Januari' => '01',
        'Februari' => '02',
        'Maret' => '03',
        'April' => '04',
        'Mei' => '05',
        'Juni' => '06',
        'Juli' => '07',
        'Agustus' => '08',
        'September' => '09',
        'Oktober' => '10',
        'November' => '11',
        'Desember' => '12',
    );

    return "{$data[2]}-{$months_arr[$data[1]]}-{$data[0]}";
  }

}

if (!function_exists('sql_to_human')) {

  /**
   * 
   * @param String $date
   * @return String
   */
  function sql_to_human($date) {
    $data = explode('-', $date);

    $months_arr = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    );

    return "{$data[2]} {$months_arr[$data[1]]} {$data[0]}";
  }

}

function sql_to_human_simple($date) {
  return date('d/m/Y', strtotime($date));
}

function timestamp_to_human($date) {
  return date('d M Y H:i:s', strtotime($date));
}

if (!function_exists('month_indo')) {

  /**
   * 
   * @param String $date
   * @return String
   */
  function month_indo($month) {
    $months_arr = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    );

    return $months_arr[$month];
  }

}

if (!function_exists('format_idr_currency')) {

  /**
   * Format the number to Indonesia Currency <br>
   * Example : 50.000
   * @param String $number The number want to format
   * @return String
   */
  function format_idr_currency($number) {
    return number_format($number, 0, ',', '.');
  }

}

if (!function_exists('encode')) {

  /**
   * Encode string
   * 
   * @param type string Input string
   * 
   * @return string base64
   */
  function encode($param) {
    $param = 'gincu_token' . $param;
    return strtr(rtrim(base64_encode($param), '='), '+/', '-_');
  }

}

if (!function_exists('decode')) {

  /**
   * Decode string
   * 
   * @param type base64 Input base64 string
   * 
   * @return string
   */
  function decode($param) {
    $decode = base64_decode(strtr($param, '-_', '+/'));
    return str_replace('gincu_token', '', $decode);
    ;
  }

}
?>