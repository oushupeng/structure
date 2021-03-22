<?php
function replaceSpace($s) {
    // $a = str_replace(' ', '%20', $s);

    // $a = join('%20',explode(' ', $s));

    $a = '';
    $length = strlen($s);
    for($i=0;$i<$length;$i++)
    {
        if($s[$i] == ' ')
        {
            $a .= '%20';
        }
        else
        {
            $a .= $s[$i];
        }
    }
    return $a;
}

echo replaceSpace('We are happy.');