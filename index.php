<?php
    class Person{

        // protected $familyname="";
        // public $name="";
        function __construct($name="Tevi")
        {
            $this->name=$name;
        }

        public function getFullName()
        {
            return $this->familyname."-".$this->name;
        }

    }



    $person1= new Person("Dara");
    $person1->familyname="Phoeng";
    echo $person1->getFullName();

    // $person2= new Person("Andy");
    // $person2->familyname="Van";
    // echo $person2->getFullName();
    // $username = $_POST["username"];
    // echo $username;
?>