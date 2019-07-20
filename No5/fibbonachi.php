<?php 
    function evenSum($max){
        $before = 1;
        $current = 1;
        $arr = [];
        for($i=0;$i <= $max; $i++){
            if($current >= $max){
				break;
			}
            if($current % 2 == 0){
                array_push($arr, $current);
            }
            $fbnc = $before + $current;
            $before = $current;
            $current = $fbnc; 
        }
        return array_sum($arr);
        
    }
    function oddSum($max){
        $before = 1;
        $current = 1;
        $arr = [];
        for($i=0;$i <= $max; $i++){
            if($current > $max){
				break;
			}
            if($current % 2 != 0){
                array_push($arr, $current);
            }
            $fbnc = $before + $current;
            $before = $current;
            $current = $fbnc; 
        }
        return array_sum($arr);
        
    }
    $max = 100;
    echo "evenSum(1000)= ".evenSum(1000);
    echo "<br>";
    echo "oddSum(100)= ".oddSum(100);
    echo "<br>";
    echo "oddSum(1000)= ".oddSum(1000);
?>