<html>
<head>
    <meta http-equiv="refresh" content="3"> 
     <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<h3>
<?php
 // magic methods
/*
class FavColour{
    public $data;
    function __construct($data){
        $this->data = $data;
    }
    function setData($data){
        $this->data = $data;
    }
    public function __destruct(){
        echo "This is destruct function";
    }
}

$fc1 = new FavColour("Some Data");
$fc2 = clone $fc1;
$fc2->setData("More Data");


for distrust and construct
echo "<pre>";
print_r($fc1);
print_r($fc2);

*/

class Demo{
    public $data = ["name"=>"Mithu Roy", "Roll"=>'23'];
    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else {
            echo "This key($key) in not defined.<br>";
        }
        
    }
}
echo "<pre>";

$testObj = new Demo();
echo $testObj->name;










?>
</h3>
</body>
</html>