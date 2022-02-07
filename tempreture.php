<?php




function generateNumbers()
{
    $tempeture_per_seconds = [];


    for ($i = 0; $i < 100; $i++) {
        $tempeture_per_seconds[$i] = rand(-35, 50);
    }
    $tempeture_per_seconds[] = $i;

    return  var_dump($tempeture_per_seconds);


}
echo generateNumbers();


function ternOnEngine($temp){

    $heat_gear_first = ["Shivaki"=>"First", "is off" => false, "current_temp"=> 18];
    $heat_gear_second = ["Harvati"=>"Second", "is off" => true, "current_temp"=> 0];

        

    if($temp > $heat_gear_first["current_temp"] ){

        return " engine is activated" . $temp++ ;
    }
    if($temp > $heat_gear_second["current_temp"] ){
        return " engine is slowed down" . $temp++ ;
    }

}


