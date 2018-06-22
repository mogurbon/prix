<?php

if (($gestor = fopen("Orders.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $customers[] = ['customer_name'=>$datos[2],'customer_last_name' => $datos[3],'customer_email' => $datos[4],'customer_gender' => $datos[5],'customer_address' => $datos[6],'customer_address' => $datos[7]];

        echo PHP_EOL;
    }
    $num = 0;

    #array_search(40489, array_column($userdb, 'uid'));

    $b = [];
    array_walk_recursive($customers, function($customers) use (&$b) {
        $b[] = $customers;
    });
    #var_dump($b);

    $repetidos = array_keys(
        array_filter(
            array_count_values($b), function($v, $k) {
            return $v > 1;
        }, ARRAY_FILTER_USE_BOTH)
    ); // es necesario PHP 5.6 para utilizar tanto keys como values en array_filter

    var_dump($repetidos);
    fclose($gestor);
}