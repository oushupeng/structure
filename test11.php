<?php
$dir = './recusion';


function loopDir($dir)
{
    $openFile = opendir($dir);
    while (($file = readdir($openFile)) !== false)
    {
        if ($file != '.' && $file != '..')
        {
            echo $file;
            if (filetype($dir . '/' . $file) == 'dir') loopDir($dir . '/' . $file);
        }
    }
}

function loopDir1($dir){
    $handle = opendir($dir);
    while(false !==($file =readdir($handle))){
        if($file!='.'&&$file!='..'){
            echo $file."<br>";
            if(filetype($dir.'/'.$file)=='dir'){
                loopDir($dir.'/'.$file);
            }
        }
    }
}

function is_prime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return $num . "不是质数";
        }
    }

    return $num . "是质数";
}

loopDir($dir);