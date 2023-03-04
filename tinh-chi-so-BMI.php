<?php
class Person
{
    public $name;
    public $age;
    public $gender;
    public $height;
    public $weight;
    public function __construct($name, $age, $gender, $height, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function getBMI()
    {
        $bmi = $this->weight / ($this->height * $this->height);
        return round($bmi, 1);
    }
    public function getCategory()
    {
        $bmi = $this->getBMI();
        if ($bmi < 18.5) {
            return "Gầy";
        } elseif ($bmi < 25) {
            return "Bình thường";
        } elseif ($bmi < 30) {
            return "Thừa cân";
        } elseif ($bmi < 35) {
            return "Béo phì độ I";
        } elseif ($bmi < 40) {
            return "Béo phì độ II";
        } else {
            return "Béo phì độ III";
        }
    }
}
$persons = array(
    new Person('Roanldo', 37, 'Nam', 1.87, 82),
    new Person('Messi', 35, 'Nam', 1.69, 60),
    new Person('Suarez', 35, 'Nam', 1.80, 88),
    new Person('Taylor', 32, 'Nữ', 1.80, 62),
    new Person('Selena', 31, 'Nữ', 1.76, 58)
);
foreach ($persons as $person) {
    echo "Tên: " . $person->name . "<br>";
    echo "Tuổi: " . $person->age . "<br>";
    echo "Giới tính: " . $person->gender . "<br>";
    echo "Chiều cao: " . $person->height . " m<br>";
    echo "Cân nặng: " . $person->weight . " kg<br>";
    echo "Chỉ số BMI: " . $person->getBMI() . "<br>";
    echo "Phân loại BMI: " . $person->getCategory() . "<br><br>";
}
