<?php


//$student_one = array("Maths"=>95, "Physics"=>90,
//    "Chemistry"=>96, "English"=>93,
//    "Computer"=>98);
//
//
///* Looping through an array using foreach */
//echo "Looping using foreach: \n";
//foreach ($student_one as $subject => $marks){
//    echo "Student one got ".$marks." in ".$subject."\n";
//}
//
///* Looping through an array using for */
//echo "\nLooping using for: \n";
//$subject = array_keys($student_one);
//$marks = count($student_one);
//
//for($i=0; $i < $marks; ++$i) {
//    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n";
//}


//$a = [1=>'first',2=>"second"];

//foreach ($a as $index => $number){
//    echo ' this ' . $index . ' for ' . $number  . ' \n';
//}

//$keys = array_keys($a);
//$subjects = count($a);
//
// for ($i=0; $i < $subjects; $i++ ){
//     echo $keys[$i] . " " . $a[$keys[$i]] . "\n";
// }


//$temperature_per_seconds = [];
//
//
//for ($i = 0; $i < 100; $i++) {
//    $temperature_per_seconds[$i] = rand(-35, 50);
//}
//$temperature_per_seconds[] = $i;
//
//print_r($temperature_per_seconds);
//
//function activationEngines($temp){
//
//    $heat_gear_first = ["Shivaki"=>"First", "is off" => false, "current_temp"=> 18];
//    $heat_gear_second = ["Harvati"=>"Second", "is off" => true, "current_temp"=> 0];
//
//    if
//
//}
//$b = ['tern off'=> true,'current temp'=>'18' ];
//$c = ['tern off'=> false,'current temp'=>'0' ];
//$a  = [1,5,18,25,59,0,-35];
//foreach ($a as $temp){
//    if ($temp < $b['current temp']){
////        $incremented  = $temp += 5;
//        echo sleep(1 ). $message_activated . " " .  $temp  . " " . "has increased to"." ". ++$temp . "\n";
//    }else{
//        echo sleep(1 ) . $message_deactivated . " ".  $temp . "\n";
//    }
//    if ($temp < $c["current temp"]){
//        echo sleep(1) .
//    }

//}
//////////////////////////////////////////////////////////////////////////////
//$temperatures_per_second = [];
//
//
//for ($i = 0; $i < 100; $i++) {
//    $temperatures_per_second[$i] = rand(-35, 50);
//}
//$temperatures_per_second[] = $i;
//
//
//function activateEngine($temperatures_per_second)
//{
//
//
//    $heat_gear_first = ["Shivaki" => "First", "is off" => false, "current_temp" => 18];
//    $heat_gear_second = ["Harvati" => "Second", "is off" => true, "current_temp" => 0];
//    $lower_message = "current temperature lower then"
//    foreach ($temperatures_per_second as $temp)
//    {
//        if ($temp < $heat_gear_first['current temp']) {
//            $incremented = $temp += 5;
//            echo sleep(1) . $lower_message . " " . $heat_gear_first["current temp"] . " " . $heat_gear_first['Shivaki'] . "engine activated." . " "
//                . "Temperature was" . $temp . "Now it is  " . " " . $temp = $heat_gear_first["current temp"] . "\n";
//        } else {
//            echo sleep(1) . $heat_gear_first[''] . " " . $temp . "\n";
//        }
//        if ($temp < $heat_gear_second["current temp"]) {
//            echo sleep(1) .
//        }
//    }
//}
//
//
//echo activateEngine($temperatures_per_second);


//////////////////////////////////////////////////////////////////////////////////////





function activateEngine($max_temp)

{
    $temperatures_per_second = [];


    for ($i = 0; $i < $max_temp; $i++) {
        $temperatures_per_second[$i] = rand(-35, 50);
    }
    $temperatures_per_second[] = $i;

    $heat_gear_first = ["Shivaki" => "First", "is off" => false, "current_temp" => 18];
    $heat_gear_second = ["Harvati" => "Second", "is off" => true, "current_temp" => 0];
    $lower_message = "current temperature lower then";
    foreach ($temperatures_per_second as $temp)
    {
        if ($temp < $heat_gear_first["current_temp"]) {

            echo sleep(1) . $lower_message . " " . $heat_gear_first["current_temp"] . " " . $heat_gear_first['Shivaki'] . "engine activated." . " "
                . "Temperature was" . " " . $temp ." ". "Now it is" . " " .($temp + rand(10,15)) . "\n";

        }
        if ($temp < $heat_gear_second["current_temp"]) {
            echo sleep(1) . $lower_message . " " . $heat_gear_second["current_temp"] . " " . $heat_gear_second['Harvati'] . " " ."engine activated." . " "
                . "Temperature was" . " " . $temp . " " .  "Now it is" . " " .($temp + rand(20,25)) . "\n";
        }
    }
}


echo activateEngine(10);




