<?php
class Mobile {
    // thuộc tính
    public $name;
    // thuộc tính
    public $model;
    // thuộc tính
    public $product;
    //
    public $price;
    /**
     * Phương thức khai sinh
     */
    public function khaisinh() {
    }
    public function laythongtin() {
        $result = '<br> name : ' .$this->name;
        $result .= '<br> model : ' .$this->model;
        $result .= '<br> product : ' .$this->product;
        $result .= '<br> price : ' .$this->price;
        return $result;
    }
    public function infomation($name, $model, $product, $price) {
        $this->name = $name;
        $this->model = $model;
        $this->product = $product;
        $this->price = $price;
    }
}
$apple = new Mobile();
echo "<pre>";
print_r($apple);
echo "</pre>";
$apple->infomation(apple:'iphone x', 'apple', '999$');
echo "<pre>";
print_r($apple);
echo "</pre>";


$samsung = new Mobile();
$samsung->infomation(samsung:'G alaxy A7', 'Samsung','500$');
echo "<pre>";
print_r($samsung);
echo "</pre>";


$xiaomi = new Mobile();
$xiaomi->infomation(xiaomi:'Xiaomi Mi8', 'Xiaomi', '150$');
echo "<pre>";
print_r($xiaomi);
echo "</pre>";


$oppo = new Mobile();
$oppo->infomation(oppo:'Oppo F9', 'Oppo', '200$');
echo "<pre>";
print_r($oppo);
echo "</pre>";