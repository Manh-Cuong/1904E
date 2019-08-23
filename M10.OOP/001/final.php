<?php
class Student{
    public $name;
    public $age;
    public $location;
    public $point;

    public function __construct($name_pram,$age_pram,$location_pram)
    {
        $this->name=$name_pram;
        $this->age=$age_pram;
        $this->location=$location_pram;

        echo "<br>__METHOD__".__METHOD__;
    }

    public function printInfo(){
        echo "<br>".__METHOD__;
        echo "<br>Tên :".$this->name;
        echo "<br>Tuổi :".$this->age;
        echo "<br>Địa chỉ :".$this->location;
    }

    public function calculatePoint($point_arr_pram){
        if (is_array($point_arr_pram) && !empty($point_arr_pram)){
            $count=0;
            $total=0;
            foreach ($point_arr_pram as $key => $value){
                $total+=$value;
                $count++;

            }
            $point=$total/$count;
            $this->point=$point;
        }
        return false;
    }
}

$Cuong=new Student("Lê Manh Cường",21,"Hà Nội");
echo "<br>Gọi đến phương thức method printInfo";
$Cuong->printInfo();

echo "<br>In ra tên ngoài class".$Cuong->name;
echo "<br>In ra tuổi ngoài class".$Cuong->age;
echo "<br>In ra địa chỉ ngoài class".$Cuong->location;

echo "<br>In ra cấu trúc ngoài class";

echo "<pre>";
print_r($tuan);
echo "</pre>";

//gọi đến phương thức calculatePoint
$Cuong->calculatePoint();
echo "<br>Điểm :".$Cuong->point;




