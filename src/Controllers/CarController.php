<?php

namespace Adexe\Tema6\Controllers;

class CarController
{

  public function index()
  {
    echo "Esto es index de CarController";
  }

  public function show($params)
  {
    $matricula = $params['matricula'];
    echo "Esto es show de CarController: mostrando el coche con id: $matricula";
  }

  public function showCarClient($params)
  {
    $id = $params['id'];
    echo "Muestra todos los coches del cliente $id";
  }
}
