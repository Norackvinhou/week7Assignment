<?php 

    //Multipul inheritance in php is using traits
    // Advantage
    //traits are used to declare methods that can be used in multiple classes
    // traits recude code duplication
    trait type1
    {
        public function get_type1()
        {
            echo "fast-food\n";
        }
    }
    trait type2
    {
        public function get_type2()
        {
            echo "instance-food";
        }
    }
    // Disadvantage of using trait is u cannot see the implement fuction in the classes
    

    class food 
    {
        use type1, type2;
    }

    // class use traits methods type1 and type2
    // and also other class can also called the traits function to reduce code
    $obj= new food;
    $obj->get_type1();
    $obj->get_type2();


?>