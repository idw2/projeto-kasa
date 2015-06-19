<?php

App::uses('AppHelper', 'View/Helper');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class LibHelper extends AppHelper {

    public $helpers = array('Html');

    public function date_format($timestamp) {

        $piece = explode(" ", $timestamp);
        $date = $piece[0];
        $hour = $piece[1];

        $format_date = self::formatDateForBrazil($date);
        $format_hour = self::formatHourForBrazil($hour);
        $format_new = "{$format_date} {$format_hour}";
        return $format_new;
    }

    public function formatDateForBrazil($date) {
        $dtaFormatada = $date;
        $pieces = explode("-", $dtaFormatada);
        if (sizeof($pieces) > 2) {
            $newDate = "{$pieces[2]}/{$pieces[1]}/{$pieces[0]}";
            return $newDate;
        } else {
            return false;
        }
    }

    public function formatDateForUSA($date) {
        $dtaFormatada = $date;
        $pieces = explode("/", $dtaFormatada);
        if (sizeof($pieces) > 2) {
            $newDate = "{$pieces[2]}-{$pieces[1]}-{$pieces[0]}";
            return $newDate;
        } else {
            return false;
        }
    }

    public function formatHourForBrazil($hour) {
        $dtaFormatada = $hour;
        $pieces = explode(":", $dtaFormatada);
        $newHour = "{$pieces[0]}h{$pieces[1]}";
        return $newHour;
    }

    public function url_amigavel($name) {
        $name = mb_strtolower(trim($name), "UTF-8");
        $name = str_replace("á", "a", $name);
        $name = str_replace("ã", "a", $name);
        $name = str_replace("â", "a", $name);
        $name = str_replace("à", "a", $name);
        $name = str_replace("é", "e", $name);
        $name = str_replace("ê", "e", $name);
        $name = str_replace("í", "i", $name);
        $name = str_replace("ó", "o", $name);
        $name = str_replace("õ", "o", $name);
        $name = str_replace("ô", "o", $name);
        $name = str_replace("ú", "u", $name);
        $name = str_replace("ç", "c", $name);
        $name = str_replace(" - ", " ", $name);
        $name = preg_replace("/([^a-zA-Z0-9])/", " ", $name);
        $name = preg_replace("/([^a-zA-Z0-9]){7}|([^a-zA-Z0-9]){6}|([^a-zA-Z0-9]){5}|([^a-zA-Z0-9]){4}|([^a-zA-Z0-9]){3}|([^a-zA-Z0-9]){2}/", " ", $name);
        $name = str_replace(" ", "-", $name);
        return $name;
    }

    public function limpaValorReal($valor) {
        $valor = str_replace(",", "", $valor);
        $valor = str_replace(".", "", $valor);
        return $valor;
    }

    public function formataReais($valorReal) {
        $size = strlen($valorReal);
        $result = null;
        if ($size >= 9) {
            //9.999.999,99   
            if ($size == 9) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -9, 1);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 10) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -10, 2);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 11) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -11, 3);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            }
            return $result;
        } elseif ($size == 8) {
            //999.999,99    
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -8, 3);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 7) {
            //99.999,99    
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -7, 2);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 6) {
            //9.999,99 
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -6, 1);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 5) {
            //999,99     
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 4) {
            //99,99       
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -4, 2);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 3) {
            //9,99                
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -3, 1);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 2) {
            //0,99              
            $p1 = substr($valorReal, -2);
            $result = "0," . $p1;
            return $result;
        }
        return false;
    }

}
