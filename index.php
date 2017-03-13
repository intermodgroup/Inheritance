<?php
trait DogBark {
    public function Bark() {
        echo 'Bark ';
    }
    public function Mammal() {
        return true;
    }
}

trait BirdBark {
    public function Bark() {
        echo 'Bird don\'t bark ';
    }
    public function Mammal() {
        return false;
    }
}

class Animal {
	public function Say() {
		echo "This animal say: ";
	}
}

class Dog extends Animal {
	use DogBark;
}

class Bird extends Animal {
	use BirdBark;
}

$o = new Dog();
$o->Say();
$o->Bark();
echo $o->Mammal() . "<br/>";	

$b = new Bird();
$b->Say();
$b->Bark();
echo $b->Mammal();
?>