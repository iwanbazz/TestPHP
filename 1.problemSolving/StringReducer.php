<?php

echo 'Sample Input 0 : '.stringReducer('aaabccddd'),', ';
echo 'Sample Input 1 : '.stringReducer('aa'),', ';
echo 'Sample Input 2 : '.stringReducer('baab'),', ';

function StringReducer($s)
{
    $len = strlen($s);
    $r = '';

    // sorting
    $split = str_split($s);
    sort($split);
    $s = implode('', $split);

    if ($len >= 1 && $len <= 100) {
        $r = Check($s, '');
    }

    return $len == '' ? '' : $r;
}

function Check($c, $result)
{
    if (strlen($c) > 1) {
        // get first character
        $a = substr($c, 0, 1);
        $b = substr($c, 1, 1);

        if ($a == $b) {
            $c = substr($c, 2, strlen($c));
            return Check($c, $result);
        } else {
            $result .= $a;
            $c = substr($c, 1, strlen($c));
            return Check($c, $result);
        }
    } else { // if only one left
        $result .= $c;
    }

    return $result;
}
