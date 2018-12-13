<?php

$fp = fopen('testJsonDataToSort.txt','r');

//var_dump($f);
if ($fp)
{
    while (!feof($fp))
    {
        $mytext = fgets($fp, 300);
        echo $mytext."<br />";

    }
}
fclose($fp); 