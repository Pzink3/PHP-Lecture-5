<link rel="stylesheet" type="text/css" href="font-face.css">
<link rel="stylesheet" type="text/css" href="font.css">
        <?php
class Person {
    public $firstName;
    public $lastName;
    public $nickName;
    public $gender;
    public $age;
    
    function construct($nickName, $firstName, $lastName, $gender, $age){
        $this->nickName = $nickname;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->age = $age;
}
function getName(){
    return "Hello world! My name is " . $this->firstName . " " . $this->lastName . '.';
    
}
}
class otherPerson extends Person{
    function construct($nickName, $firstName, $lastName, $gender, $age) {
        parent::construct($nickName, $firstName, $lastName, $gender, $age);
        
        
    }
    function greet(){
}
}
class anotherPerson extends Person{
    function construct($nickName, $firstName, $lastName, $gender, $age) {
        parent::construct($nickName, $firstName, $lastName, $gender, $age);
    }
    function hello(){
}
}

$me = new Person("The Z", "Parker", "Zink", "male", "16");
$firstName = "Parker";
$lastName = "Zink";
$nickName = "The Z";
$gender = "male";
$age = "16";
print "Hello world! My name is " . $firstName . " " . $lastName . ", but you can call me " . $nickName . ". I am a " . $age . "-year old " . $gender . ".";



        ?>
    