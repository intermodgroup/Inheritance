<?php
trait DogBark {
    public function Bark() {
        echo 'Bark ';
    }
}

trait BirdBark {
    public function Bark() {
        echo 'Bird don\'t bark ';
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

$b = new Bird();
$b->Say();
$b->Bark();
?>