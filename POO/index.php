<?php
class Car // Classe
{
    public $comp; //Propriedade da Classe
    public $color = "beige";
    public $hasSunRoof = true;
    public function hello()
    {
        return "beep";
    }

}

$car1 = new Car(); //Instancia da Classe
echo $car1->color;
echo "<br>";
echo $car1->hello();
?>

