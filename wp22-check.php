<?php

$wp_list = Array(
    'Week 1' => 'Assignment 1',
    'Week 2' => 'Assignment 1',
    'Week 3' => 'Assignment 2',
    'Week 4' => 'Assignment 2',
    'Week 5' => 'Assignment 3',
    'Week 6' => 'Assignment 3',
    'Week 7' => 'Final Project');
foreach ($wp_list as $week => $content){
    echo sprintf("%7s | %15s<br>", $week, $content);

}

?>
