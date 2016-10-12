<?php

return array(
    'userName' => array(
        'value' => '',
        'title' => 'Логин магазина',
        'description' => 'Логин магазина, полученный при подключении',
        'control_type' => 'input',
    ),
    'password' => array(
        'value' => '',
        'title' => 'Пароль магазина',
        'description' => 'Пароль магазина, полученный при подключении',
        'control_type' => 'input',
    ),
    'test_mode' => array(
        'value' => '1',
        'title' => 'Тестовый режим',
        'description' => '',
        'control_type' => 'checkbox',
    ),
    'paynent_mode' => array(
        'value' => 1,
        'title' => 'Режим оплаты',
        'description' => '',
        'control_type' => waHtmlControl::RADIOGROUP,
        'options' => array(
            1 => 'Одностадийная оплата',
            2 => 'Двухстадийная оплата',
        )
    ),
    'ssl_version' => array(
        'value' => 0,
        'title' => 'Версия SSL',
        'description' => '',
        'control_type' => 'select',
        'options' => array(
            0 => 'Определяется автоматически',
            1 => 'CURL_SSLVERSION_TLSv1',
            2 => 'CURL_SSLVERSION_SSLv2',
            3 => 'CURL_SSLVERSION_SSLv3',
            4 => 'CURL_SSLVERSION_TLSv1_0',
            5 => 'CURL_SSLVERSION_TLSv1_1',
            6 => 'CURL_SSLVERSION_TLSv1_2',
        )
    ),
);
