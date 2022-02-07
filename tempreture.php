<?php




function generateNumbers()
{
    $tempeture_per_seconds = [];


    for ($i = 0; $i < 100; $i++) {
        $tempeture_per_seconds[$i] = rand(-35, 50);
    }
    $tempeture_per_seconds[] = $i;
//    var_dump($tempeture_per_seconds);
    return var_dump($tempeture_per_seconds);

}

//echo displayState();
echo generateNumbers();


//function

echo var_dump(generateNumbers());


function ternOnEngineFirst($temp){

    $heat_gear_first = ["Shivaki"=>"First", "is off" => true, "current_temp"=> 18];

    if($temp > $heat_gear_first["current_temp"] )
        return " engine is activated". sleep(1);;

}

function ternOnEngineSecond($temp){

    $heat_gear_second = ["Harvati"=>"Second", "is off" => true, "current_temp"=> 0];


    if($temp > $heat_gear_second["current_temp"] )
        return " engine is slowed down" . sleep(1);

}
function ternOnEngineThird($temp){

    $heat_gear_third = ["Gizalati"=>"Third", "is off" => false, "current_temp"=> 25];


    if($temp > $heat_gear_third["current_temp"] )
    return " engine is deactivated" . sleep(1);



}


