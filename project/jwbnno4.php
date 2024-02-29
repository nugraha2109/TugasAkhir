<?php 

//fungsi untuk print 3 angka terbesar
function print3largest($arr, $arr_size) 
{ 
    $i;
    $first;
    $second; 

        //pengecekan jika array size lebih dari 3, maka input invalid.
    if ($arr_size < 3) 
    { 
        echo " Invalid Input "; 
        return; 
    } 

    $first = $second = PHP_INT_MIN; 
    for ($i = 0; $i < $arr_size ; $i ++) 
    { 
        // jika elemen saat ini adalah
        // lebih besar dari $first
        if ($arr[$i] > $first) 
        {  
            $second = $first; 
            $first = $arr[$i]; 
        } 

        // Jika array[i] berada di antara $fist dan $second
        // lalu perbarui $second
        else if ($arr[$i] > $second) 
        { 
            $second = $arr[$i]; 
        }  
    } 

    echo "Nilai terbesar kedua adalah : ", 
    $second, " "; 
} 


// Inisialiasi array nya
$arr = array(5, 6,7,7,8,8,9,9,10); 
$n = count($arr); 
print3largest($arr, $n); 

?>