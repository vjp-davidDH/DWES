<?php

abstract class Persona
{
    protected $nombre;
    protected $apellidos;
    protected $edad;

    public function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function __toString(): string
    {
        return "$this->nombre" .  "$this->apellidos" . "$this->edad";
    }

    abstract public static function toHtml(Persona $p);
}

class Empleado extends Persona
{

    private static $sueldoTope = 3333;

    private $sueldo;
    private $numTfno;

    public function __construct($nombre, $apellidos, $edad, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getNumTfno()
    {
        return $this->numTfno;
    }

    public function setNumTfno($numTfno): self
    {
        $this->numTfno = $numTfno;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return "Mi nombre es: " . $this->nombre . " y mis apellidos son: " . $this->apellidos;
    }

    public function debePagarImpuestos(Persona $p) : bool {
        return $p->edad > 21;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->numTfno[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return "Estos son los tfnos" . implode(", ", $this->numTfno);
    }

    public function vaciarTelefonos(): void
    {
        $this->numTfno = [];
    }

    public static function toHtml(Persona $p)
    {
        if ($p instanceof Empleado) {
            return "<p>Nombre: {$p->getNombre()}
            Apellidos: {$p->getApellidos()}
            Sueldo: {$p->getSueldo()}
            </p>";
        }
    }

    public function __toString(): string {
        return "$this->nombre" . "$this->apellidos" . "$this->edad" . "$this->sueldo";
    }
}

$empleado = new Empleado("David", "Domínguez Hinjos", 2000);
echo $empleado->getNombreCompleto() . "<br>";
if ($empleado->debePagarImpuestos()) {
    echo "Tiene que pagar impuestos </br>";
} else {
    echo "No tiene que pagar impuestos </br>";
}
echo $empleado->anyadirTelefono(625325746);
echo $empleado->listarTelefonos();
echo $empleado->vaciarTelefonos();
echo $empleado->listarTelefonos();
echo Empleado::toHtml($empleado);
