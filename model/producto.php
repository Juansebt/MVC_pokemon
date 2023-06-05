<?php
namespace modelo;

use Exception;
use PDOException;

include_once "conexion.php";

class Producto
{
    private $id;
    private $nombrePro;
    private $precioPro;
    private $cantidadPro;
    private $descripcionPro;
    private $estado;
    public $conexion;
    function __construct()
    {
        $this->conexion = new \Conexion();
    }
    
    function  create()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("INSERT INTO productos(nombrePro,precioPro,cantidadPro,descripcionPro,estado) VALUES (?,?,?,?,'A')");
            $sql->bindParam(1, $this->nombrePro);
            $sql->bindParam(2, $this->precioPro);
            $sql->bindParam(3, $this->cantidadPro);
            $sql->bindParam(4, $this->descripcionPro);
            $sql->execute();
            return "Producto Registrado";
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    function read()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("SELECT * FROM productos");
            $sql->execute();
            $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    function update()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("UPDATE productos SET nombrePro=?, precioPro=?, cantidadPro=?, descripcionPro=? WHERE id=?");
            $sql->bindParam(1,$this->nombrePro);
            $sql->bindParam(2,$this->precioPro);
            $sql->bindParam(3,$this->cantidadPro);
            $sql->bindParam(4,$this->descripcionPro);
            $sql->bindParam(5,$this->id);
            $sql->execute();
            return "Producto Modificado";
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("DELETE FROM productos WHERE id=?");
            $sql->bindParam(1,$this->id);
            $sql->execute();
            return "Producto eliminado";
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    function readId()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("SELECT * FROM productos WHERE id=?");
            $sql->bindParam(1,$this->id);
            $sql->execute();
            $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    function estado()
    {
        try {
            $sql = $this->conexion->getCon()->prepare("UPDATE productos SET estado = ? WHERE id = ?");
            $sql->bindParam(1, $this->estado);
            $sql->bindParam(2, $this->id);
            $sql->execute();
            return "Estado modificado";
        } catch (PDOException $e) {
            return "Error Modelo: " . $e->getMessage();
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombrePro
     */
    public function getNombrePro()
    {
        return $this->nombrePro;
    }

    /**
     * Set the value of nombrePro
     */
    public function setNombrePro($nombrePro): self
    {
        $this->nombrePro = $nombrePro;

        return $this;
    }

    /**
     * Get the value of precioPro
     */
    public function getPrecioPro()
    {
        return $this->precioPro;
    }

    /**
     * Set the value of precioPro
     */
    public function setPrecioPro($precioPro): self
    {
        $this->precioPro = $precioPro;

        return $this;
    }

    /**
     * Get the value of cantidadPro
     */
    public function getCantidadPro()
    {
        return $this->cantidadPro;
    }

    /**
     * Set the value of cantidadPro
     */
    public function setCantidadPro($cantidadPro): self
    {
        $this->cantidadPro = $cantidadPro;

        return $this;
    }

    /**
     * Get the value of descripcionPro
     */
    public function getDescripcionPro()
    {
        return $this->descripcionPro;
    }

    /**
     * Set the value of descripcionPro
     */
    public function setDescripcionPro($descripcionPro): self
    {
        $this->descripcionPro = $descripcionPro;

        return $this;
    }

    /**
     * Get the value of estadoPro
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estadoPro
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}

?>