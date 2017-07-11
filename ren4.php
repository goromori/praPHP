<?php
class Dog{
private $Name;  
private $Age;  
public function setName($name){  
$this->Name=$name;  

}  
public function setAge($age){   
$this->Age=$age;  
}  
public function ShowProfile(){  
echo "名前は".$this->Name.",年齢は".$this->Age."歳です"; 
}
}
$suzume = new Dog();
$unagi = new Dog();
$suzume->setName("Suzume");
$suzume->setAge(14);
$unagi->setName("Unagi");
$unagi->setAge(2);
$suzume->ShowProfile();
echo "<br>";
$unagi->ShowProfile();
?>
