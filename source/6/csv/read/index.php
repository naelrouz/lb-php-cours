<?php

if(file_exists('users.csv')){
    $csv = fopen('users.csv', 'r');

    echo '<table border="1" style="border-collapse: collapse;">';
    echo '<thead>
                <th>ФИО</th>
                <th>Страна</th>
                <th>Город</th>
                <th>Скайп</th>
                <th>Email</th>
        </thead><tbody>';

    while($row = fgetcsv($csv)){
        $data = str_getcsv($row[0], ';');
        echo "<tr>";
        for($i = 0, $length = count($data); $i < $length; $i++){
            echo "<td style='padding: 5px;'>{$data[$i]}</td>";
        }
        echo "</tr>";
    }

    echo '</tbody></table>';

    fclose($csv);

}