<?php
class Vehicle{ // создаем общий класс Vehicle (транспортное средство)
	private $model;
	private $number;
	private $country;
	private $speed;
	public function __construct(){
		$this->model;
		$this->number;
		$this->country;
		$this->speed;
	}
	public function setMod($mod){$this->model = $mod; return $this;}
	public function setNum($num){$this->number = $num; return $this;}
	public function setCntr($cntr){$this->country = $cntr; return $this;}
	public function setSp($sp){$this->speed = $sp; return $this;}
	public function getVehicle(){
		return 'Данные транспортного средства:<br/>1) Модель: '.$this->model.'<br/>2) Регистрационный номер: '.$this->number.'<br/>3) Cтрана изготовления: '.$this->country.'<br/>4) Максимальная скорость: '.$this->speed.'<br/>';
	}
}

class Mercedes extends Vehicle{//в класс Mercedes наследуем общие свойства класса Vehicle
	private $HPS; //создаем уникальное свойство класса Mercedes - HPS (гидроусилитель)
	public function setHPS($brand){$this->HPS = $brand;}
	public function getHPS(){return '5) ГУР: '.$this->HPS;}
}

class Peugeot extends Vehicle{//в класс Peugeot наследуем общие свойства класса Vehicle
	private $EPS; //создаем уникальное свойство класса Peugeot - EPS (электроусилитель)
	public function setEPS($brand){$this->EPS = $brand;}
	public function getEPS(){return '5) ЭУР: '.$this->EPS;}
}

$car1 = new Vehicle();//создаем переменную
$car1->setMod('Peugeot 107')->setNum('AE4577HE')->setCntr('France')->setSp('160');
echo '<pre>';
echo 'I) car-1, getVehicle = '.$car1->getVehicle();

echo '<pre>';
$car2 = clone $car1; //просто проверочное клонирование для отработки сеттера
$car2->setMod('Peugeot 301')->setNum('AE3921HK')->setCntr('France')->setSp('200');
echo 'II) car-2, getVehicle = '.$car2->getVehicle();

echo '<pre>';
$car3 = new Mercedes();//исп. конструктор класса Vehicle
$car3->setMod('Mercedes GL-500')->setNum('AE6215AI')->setCntr('Germany')->setSp('300');
echo '<pre>';
$car3->setHPS('A 001 466 13 01');
echo 'III) car-3, getVehicle = '.$car3->getVehicle();
echo $car3->getHPS();
print_r($car3);

echo '<pre>';
$car4 = new Peugeot();//исп. конструктор класса Vehicle
$car4->setMod('Peugeot 3008')->setNum('AE9999AE')->setCntr('France')->setSp('250')->setEPS('4007 YQ');
echo 'IV) car-4, getVehicle = '.$car4->getVehicle();
echo $car4->getEPS();
print_r($car4);
?>