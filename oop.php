<!-- REPO: php-oop-2
GOAL:
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
- fai un refactoring con variabili private. -->


<?php


class Persona {

  public $name;
  public $lastname;

  function __construct($name, $lastname) {
    // una volta acquisiti andiamo a impostarli nelle variabili d istanza
    $this -> name = $name;
    $this -> lastname = $lastname;
  }

  function __toString() {
    return $this -> name . " "
          .$this -> lastname;
  }
}

class Ospite extends Persona {

  public $dateOfBirth;

  function __construct($name, $lastname, $dateOfBirth) {
    parent::__construct($name, $lastname);
    $this -> dateOfBirth = $dateOfBirth;
  }
  function __toString() {
    return parent::__toString() . " "
          . $this -> dateOfBirth;
  }

}

class Pagante extends Persona {
  public $address;

  function __construct($name, $lastname, $address){
    parent::__construct($name, $lastname);
    $this -> address = $address;
  }
  function __toString(){
    return parent::__toString() . " "
          . $this -> address;
  }
}

// una volta impostate le 3 classi, l extend e le magic vado a dichiarare persona p1

 $p1 = new Persona("Carlo", "Bianchi");
 $p2 = new Persona("Mario", "Rossi");

echo "Persona 1: " . $p1 . "<br>";
echo "Persona 2: " . $p2 . "<br>";
echo "<br>";

$o1 = new Ospite ("Paolo", "Gialli", "2000.10.01");
$o2 = new Ospite ("Sara", "Viola", "1999.03.01");

echo "Ospite 1: " . $o1 . "<br>";
echo "Ospite 2: " . $o2 . "<br>";
echo "<br>";

$pa1 = new Pagante ("Marco", "Verdi", "Via Falsetto, 123");
$pa2 = new Pagante ("Federica", "Neri", "Via Cavour, 10");

echo "Pagante 1: " . $pa1 . "<br>";
echo "Pagante 2: " . $pa2 . "<br>";
echo "<br>";
