<!DOCTYPE html>
<html>
    <body>
        <h1>Test</h1>
        <?php
            // this is a single line comment
            $my_first_var; //declaring
            $my_first_var = 2; //assignment
            $my_second_var = 3; //declare and assign
            /*
            this is multi
            line
            comment
            */
            // echo $my_first_var;
        ?>
        
        <?php
            $x = "my string";
            $x = 65462468;
            $x = 140.234;
            $x = true;
            $x = array("Volvo", "BMW", "Toyota");
            $x = null;
            // var_dump($x);
            
            $first_part = "first part";
            $second_part = "second part";
            $concatenate = $first_part . " " . $second_part;
            $concatenate .= ". Append";
            // echo $concatenate;
            ?>
            <?php //phpinfo(); ?>
            
            <?php //echo 1 + 1; ?><br/>
            <?php //echo 2 - 1; ?><br/>
            <?php //echo 3 * 2; ?><br/>
            <?php //echo 12 / 3; ?><br/>
            <?php //echo 5 % 2; ?><br/>
            
            <?php
                $y = 2;
                $y++;
                $y--;
                
                $y += 4;
                $y -= 3;
                $y *= 3;
                $y /= 2;
                //echo $y;
            ?>
            
            <?php
                if(false){
                    // echo "first block";
                } else if (false) {
                    // echo "second block";
                } else {
                    // echo "third block";
                }
            ?>
            <?php
                $x = 2;
                $y = 2;
                if($x <= $y){
                    // echo "true!";
                } else {
                    // echo "false!";   
                }
            ?>
            <?php
                if(true || false){
                    //echo "true!";
                } else {
                    //echo "false!";
                }
            ?>
            <?php
                // $cars = array('Volvo', 'BMW', 'Toyota');
                // $cars[4] =  'asdf';
                // $cars[] = "added to end";
                // echo count($cars);
                // print_r($cars);
                // $x = 1;
                // while($x <= 5){
                //     echo "The number is" . $x . "<br/>";
                //     $x++;
                // }
                // for ($x = 0; $x < 10; $x ++){
                //     echo "The number is: " . $x . "<br/>";
                // }
                $colors = array('red', 'gree', 'blue', 'yellow');
                foreach($colors as $key => $value){
                    // echo $key . ": " . $value . "<br/>";
                }
            ?>
            
            <?php 
                function addOneAndPrint($param1){
                    echo $param1 + 1;
                }
                
                // addOneAndPrint(2);
            ?>
            <?php 
                // echo strlen("hello world!");
            ?>
            <?php
                $nums = array(12,355, 54221, 0, 44);
                sort($nums);
                // print_r($nums);
            ?>
            
<?php
    class Car {
        
        protected $wheels;
        
        public function __construct($num_wheels){
            $this->wheels = $num_wheels;
        }
        
        public function getWheels(){
            return $this->wheels;
        }
        
        public function setWheels($num_wheels){
            if($num_wheels < 12){
                $this->wheels = $num_wheels;
            }
        }
    }
    
    class Humvee extends Car {
        public function start(){
            echo "WELCOME TO THE JUNGLE...";
        }
        
        public function getWheels(){
            echo "getting wheels brah";
            return parent::getWheels();
        }
    }
    
    $my_car = new Humvee(4);
    
    // print_r($my_car);
    // $my_car->wheels = 3;
    $my_car->setWheels(11);
    // print_r($my_car);
    
    echo $my_car->getWheels();
    
    $my_car->start();
?>
    </body>
</html>
