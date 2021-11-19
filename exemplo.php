<?php

    require_once "vendor/autoload.php";

    use Wesley\Digitalcep\Search;

    $busca = new Search;

    $resultado = $busca->getAddressFromZipcode('38412-330');

    print_r($resultado);