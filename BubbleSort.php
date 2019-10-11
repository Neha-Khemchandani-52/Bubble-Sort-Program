<?php 
/***
 * Description : Bubble sort program in PHP
 * Date Added : 11th October,2019
 * Added By : Neha Khemchandani
 */
function bubbleSort(&$array)
{
    for($i=0;$i<count($array);$i++){
        
        for($j=0;$j<count($array)-1-$i;$j++){
           
            if($array[$j]>$array[$j+1])
            {
                $temp      = $array[$j];
                $array[$j] =  $array[$j+1];
                $array[$j+1] = $temp;

            }
            
        }

    }

}

$input_array = array(55,12,8,2,25,50);
bubbleSort($input_array);
echo '<pre>';
print_r($input_array);

echo "The Sorted array will be : ";
for($k=0;$k<count($input_array);$k++)
{
    echo $input_array[$k]." ";

}

?>