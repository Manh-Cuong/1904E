<?php
class Student{

    public $name="Lê Mạnh Cường";
    public $age=22;
    public $location="Hà Nội";
    public $point=10;

    public function __construct()
    {
        echo "<br>".__METHOD__;
    }

    public function printInfo(){
        echo "<br>".__METHOD__;
        echo "<br>Tên: ".$this->name;
        echo "<br>Tuổi: ".$this->age;
        echo "<br>Quê: ".$this->location;
        echo "<br>Điểm: ".$this->point;

    }

}
//khởi tạo đối tượng

$Cuong=new Student();

