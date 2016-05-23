<?php

$old_pass = 'hello';
//$check_pass = 'hello';

$old_pass_hash = password_hash($old_pass, PASSWORD_DEFAULT);
echo '<br>'.$check_pass;
echo '<br>'.$old_pass_hash;
//exit;

echo '<br>';
if(password_verify($check_pass, $old_pass_hash)){
    echo "Все good";
} else {
    echo "Пароли не совпадают";
}

