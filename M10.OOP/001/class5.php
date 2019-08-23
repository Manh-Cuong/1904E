<?php
class Student{

    public $name="Lê Mạnh Cường";
    public $age=22;
    public $location="Hà Nội";
    public $point=10;
    public function printInfo(){
        echo "<br>".__METHOD__;
        echo "<br>Tên: ".$this->name;
        echo "<br>Tuổi: ".$this->age;
        echo "<br>Quê: ".$this->location;
        echo "<br>Điểm: ".$this->point;

    }

}
//khởi tạo đối tượng

$tuan=new Student();

echo "<pre>";
print_r($tuan);
echo "</pre>";

$tuan->printInfo();
//gọi đến các thuộc tính của class từ bên ngoài class
echo "<br>---------".$tuan->name;
echo "<br>---------".$tuan->age;
echo "<br>---------".$tuan->location;
echo "<br>---------".$tuan->point;