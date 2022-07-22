<?php

include 'list.php';

$status = 'all';
$filter = array();
foreach ($list as $key =>$item) {
    if ($status === 'all' || $item['complete']  == $status) {
        $filter[] = $key;
        // var_dump($key,$item);
        // echo '<pre>';
        // var_dump($key,$item);
        // echo '</pre>';
    }
}

// echo '<pre>';
// var_dump($staus, boolval('all'), $status === 'all');
// var_dump($filter,$list);
// echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Compplete</th>';
echo '</tr>';
foreach ($filter as $id) {
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . '</td>\n';
    echo '<td>' . $list[$id]['priority'] . '</td>\n';
    echo '<td>' . $list[$id]['due'] . '</td>\n';
    echo '<td>';
    if ($list[$id]['complete']) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    echo '</td>\n';
    echo '</tr>';
}
echo '</table>';
// $list = array($task1, $task2);
var_dump($list);
// echo $list[0]['title'];
// var_dump($task1);

?>