<?php
    function mrBrulee($operand, $N, $arr_source){
        $operand = strtoupper($operand);
        $arr_D = []; //array to save all of the numbers and will be joined later
        $arr_k = []; //number from position k in array string
        if($N > 1000){
            return "Forbidden N. Please change N to below 1000";
        }
        for($i = 1; $i <= $N; $i++){
            array_push($arr_D, strval($i));
        }
        $arr_D = join($arr_D);
        foreach($arr_source as $src){
            array_push($arr_k, $arr_D[$src - 1]);
        }
        // operation starts
        if($operand == "SUM"){ // tambah
            return array_sum($arr_k);
        }elseif($operand == "MUL"){ // kali
            $result = null;
            foreach($arr_k as $num){
                if($result == null){
                    $result = $num;
                }else{
                    $result *= $num;
                }
            }
            return $result;
        }elseif($operand == "SUB"){ // kurang
            $result = null;
            foreach($arr_k as $num){
                if($result == null){
                    $result = $num;
                }else{
                    $result -= $num;
                }
            }
            return $result;
        }elseif($operand == "DIV"){ // bagi
            $result = null;
            foreach($arr_k as $num){
                if($result == null){
                    $result = $num;
                }else{
                    $result /= $num;
                }
            }
            return $result;
        }else{
            return "No Operand found";
        }
    }
    echo mrBrulee('SUM',20,[11,13,15]);
    echo "<br>";
    echo mrBrulee('MUL',20,[12,15,17]);
?>