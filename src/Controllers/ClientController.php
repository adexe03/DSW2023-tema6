<?php

namespace Adexe\Tema6\Controllers;

class ClientController
{
  private $router;

  public function __construct($router)
  {
    $this->router = $router;
  }

  public function index()
  {
    echo "Esto es index de ClientController";
  }

  public function show($params)
  {
    $id = $params['id'];
    echo "<p>Mostrando el cliente con el id: $id</p>";
    $url = $this->router->generate('car_client_show', ['id' => $id]);
    echo "<p><a href=\"$url\">Muestra los coches del usuario</a></p>";
  }
}
