<?php
class Empresas
{
  private $conn;
  private $table_name = "empresas";

  public function __construct($db)
  {
    $this->conn = $db;
  }

  function readAll()
  {
    $query = "SELECT 
                  em.IdEmpresa, em.Nombre, em.Razon_Social,em.Direccion,       em.Telefono, em.Correo, em.Estado, em.FechaCreacion
                FROM
                  " . $this->table_name . " em
                ORDER BY
                  em.FechaCreacion DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}
