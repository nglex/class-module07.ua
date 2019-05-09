<?php
class Vehicle{ // создаем общий класс Vehicle (транспортное средство)
	private $model;
	private $number;
	private $country;
	private $speed;
	public function __construct($mod, $num, $cntr, $sp){
		$this->model = $mod;
		$this->number = $num;
		$this->country = $cntr;
		$this->speed = $sp;
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
	public function setHPS($brand){
		$this->HPS = $brand;
	}
	public function getHPS(){
		return '5) ГУР: '.$this->HPS;
	}
}

class Peugeot extends Vehicle{//в класс Peugeot наследуем общие свойства класса Vehicle
	private $EPS; //создаем уникальное свойство класса Peugeot - EPS (электроусилитель)
	public function setEPS($brand){
		$this->EPS = $brand;
	}
	public function getEPS(){
		return '5) ЭУР: '.$this->EPS;
	}
}

$car1 = new Vehicle('Peugeot 107','AE4577HE', 'France', '160');//создаем переменную
echo '<pre>';
echo 'I) car-1, getVehicle = '.$car1->getVehicle();

echo '<pre>';
$car2 = clone $car1; //просто проверочное клонирование для отработки сеттера
$car2->setMod('Peugeot 301')->setNum('AE3921HK')->setCntr('France')->setSp('200');
echo 'II) car-2, getVehicle = '.$car2->getVehicle();

echo '<pre>';
$car3 = new Mercedes('GL-500','AE6215AI', 'Germany', '300');//исп. конструктор класса Vehicle
echo '<pre>';
$car3->setHPS('A 001 466 13 01');
echo 'III) car-3, getVehicle = '.$car3->getVehicle();
echo $car3->getHPS();

echo '<pre>';
$car4 = new Peugeot('3008','AE9999AE', 'France', '250');//исп. конструктор класса Vehicle
echo '<pre>';
$car4->setEPS('4007 YQ');
echo 'IV) car-4, getVehicle = '.$car4->getVehicle();
echo $car4->getEPS();
?>