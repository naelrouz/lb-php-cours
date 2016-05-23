<?php

$filters = array(
    'name' => array(
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => array('regexp' => '/^[A-Z]{1}[a-z]+$i/')
    ),
    'lastname' => array(
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => array('regexp' => '/^[A-Z]{1}[a-z]+$i/')
    ),
    'age' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array('min_range' => 18, 'max_range' => 90)
    ),
    'email' => array(
        'filter' => FILTER_VALIDATE_EMAIL
        )
    );

$clean = filter_input_array(INPUT_POST, $filters);

print_r($clean);