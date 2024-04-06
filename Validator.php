<?php

class Validator
{
    
    static public function string($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
    }
   
    static public function number($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        return is_numeric($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
    }
     static public function datetime($data, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $data);
        return $d && $d->format($format) == $data;
    }
}