<?php
$string = "cihuyyy";
foreach(count_chars($string,1) as $i => $val)
{
    echo "huruf \"", chr($i), "\" keluar $val kali.\n";
};
?>