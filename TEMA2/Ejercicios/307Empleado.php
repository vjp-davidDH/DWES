<?php
include_once "307Persona.php";
class Empleado extends Persona
{

    private static $sueldoTope = 3333;

    private $sueldo;
    private $numTfno;

    public function __construct($nombre, $apellidos, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos);
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

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope;
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

    public static function toHtml(Persona $emp): string
    {
        if ($emp instanceof Empleado) {
            return "<p>Nombre: {$emp->getNombre()}<br>
                    Apellidos: {$emp->getApellidos()}<br>
                    Sueldo: {$emp->getSueldo()}</p>";
        }
        return "<p>Nombre: {$emp->getNombre()}<br>Apellidos: {$emp->getApellidos()}</p>";
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
