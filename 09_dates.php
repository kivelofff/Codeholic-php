<?php

// Print current timestamp
echo time().'<br>';
// Print current date
echo date('D, d M Y H:i:s').'<br>';
// Print yesterday
echo date('D, d M Y H:i:s', time() - 60*60*24).'<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('G:i:s A; D, jS F y').'<br>';
// String to timestamp
$date = '2021-11-19 12:19:18';
var_dump(date_parse($date));
echo '<br>';
echo '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$format_date= 'Fri, 19 Nov 2021 12:18:10';
var_dump(date_create_from_format( 'D, j M Y H:i:s', $format_date));
    echo '<br>';