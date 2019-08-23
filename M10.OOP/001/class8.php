<?php
class Student{

    public $name="Lê Mạnh Cường";
    public $age=22;
    public $location="Hà Nội";
    public $point=10;

    public function changeInfo($name_pram,$age_pram)
    {
        echo "<br>".__METHOD__;
        $this->name=$name_pram;
        $this->age=$age_pram;
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

$tuan=new Student();
$tuan->changeInfo("Lê Mạnh Cường !",23);
echo "<pre>";
print_r($tuan);
echo "</pre>";

