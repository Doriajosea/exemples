<?php
$team_1_data=["cameroun",3];
echo $team_1_data[0];

$team_1_data=[  
    "name"=>  "cameroun",
    "score"=>  3,
    "url"=> "www.lionsIndomptables.com"
    ];


$team_2_data=[  
    "name"=>  "Togo",
    "score"=>  2,
    "url"=> "www.Togo.com"
    ];
   
var_dump($team_2_data);//permet d afficher le contenu et les informations de type tableau
//print_r($team_2_data);
//echo $team_2_data["name"];
?>