<?php
class Person
{
 //atributos (elementos)
 //antes de poner el atributo se puede colocar la seguridad del archivo
 private $nombre;
 public $apellido;
 //metodos (comportamiento)
 public function caminar(){

 }
 public function __construct($nombre, $apellido)
 {
     $this-> nombre = $nombre;
     $this->apellido = $apellido;
 }
}
//otro archivo para objeto(clases con valores)
require_once(archivo_class);
$luis = new Person(nombre:'luis', apellido:'fernandez');

echo $luis -> name;



