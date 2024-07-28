<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProyecto extends Model
{
    use HasFactory;
    public static $id;
    public static $nombre;
    public static $FechaInicio;
    public static $Estado;
    public static $Responsable;
    public static $Monto;

    public function __construct()
    {
        //constructor para poder instanciar el objeto
    }
    //accesadores - get
    
    public static function getId()
    {
        return self::$id;
    }
    public static function getNombre()
    {
        return self::$nombre;
    }
    public static function GetDate()
    {
        return self::$FechaInicio;
    }
    public static function GetEstado()
    {
        return self::$Estado;
    }
    public static function GetResponsable()
    {
        return self::$Responsable;
    }
    public static function GetMonto()
    {
        return self::$Monto;
    }
    //mutadores - set
    public function setId($_n)
    {
        $this->id = $_n;
    }
    public function setNombre($_n)
    {
        $this->nombre = $_n;
    }
    public function setDate($_n)
    {
        $this->activo = $_n;
    }
    public function setEstado($_n)
    {
        $this->activo = $_n;
    }
    public function setResponsable($_n)
    {
        $this->activo = $_n;
    }
    public function setMonto($_n)
    {
        $this->activo = $_n;
    }
}
