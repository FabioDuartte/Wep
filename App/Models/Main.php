<?php

// namespace App\Models;

// use App\Controllers\MasterController;

// require_once '../../index.php';

// Estava pensando em alterar os nomes dos arquivos!!
// Temos que padronizar a interface.
// Tem mesmo que ter a barra de busca?
// Fábio precisa arrumar a parte do Gerente

/* Métodos que devo Fazer
    
*/

// $name = 'Renato';

// $MC = new MasterController();

// $Customer = new Customer($name, '050', '@@ola', 'kkOla881244', '33451321', '8888', '777', '2525',);
// $food = new MenuFoods("Panquecas", "5.90", "12", array("3 Ovos", "Pimenta do reino", "Cebola", "Salsicha", "Coentro", "Sal"));
// $drink = new MenuDrinks("Suco de Laranja", "2.50", "6", "Do Vale");


// $order = new Order($Customer, array($food, $drink));
// echo $order->getTotalOrderAmount();
// echo "<br>";
// echo $order->getOrderingCustomer()->getUserName();

// echo $Customer->getCustomerCard()->getCardExpiry();

$i = 0;
$h = 'i';
$j = 'j';

while ($i < 10) {
    $item[$i] = array($row[$h], $row[$j], $row[$h]);
    $i++;
}

foreach ($item as $value) {
    foreach ($value as $key => $ass) {
        echo "$key => $ass";
    }
}