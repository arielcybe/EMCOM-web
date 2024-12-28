use PHPUnit\Framework\TestCase;

<?php

class FormularioTest extends TestCase{
    $_POST['nombre'] = 'John';
    $_POST['email'] = 'john@example.com';
    $_POST['phone'] = '123456789';
    $_POST['categoria'] = 'importacion';
    $_POST['pais'] = 'china';
    $_POST['adress'] = '123 Street';
    $_POST['city'] = 'City';
    $_POST['enterprise'] = 'Company';
    $_POST['merch'] = 'Goods';
    $_POST['clausula'] = 'EXW';
    $_POST['valor'] = '1000';
    $_POST['kilos'] = '500';
    $_POST['carga'] = 'LCL';
    $_POST['detalles-curso'] = 'Additional details';

    include('enviar.php');

    $this -> assertTrue($emailSint);
}