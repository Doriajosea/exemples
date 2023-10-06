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
print_r($team_2_data);
echo $team_2_data["name"];
//var_dump($team_2_data[0]);//*ne fonctionne pas . on a plus acces a l index lorsque nous avons un tableau associative
echo"<br><br>";

foreach( $team_2_data as $data ){
echo"<br><br>";
echo $data;
}
$team_3_data=[  
    "name"=>  "Mali",
    "score"=>  2,
    "url"=> "www.Mali.com"
    ];
echo"<br><br>";

$teams=[$team_1_data,$team_2_data,$team_3_data];
var_dump($teams);
echo"<br><br>";
echo "<ul>";
foreach($teams as $data){
//if("score"== 2){
//var_dump($teams);
//}
echo"<br><br>";


if($data["score"]== 2){
//var_dump($data);
//echo"<li>". $data['name'] ."</li>";
?>
<li>l equipe du <?php echo$data["name"] ?> a <?php echo$data["score"] ?> points  </li>



<?php
}
}
echo "</ul>";

// crud(create , read , update  , delete )

$team_4_data=[  
    "name"=>  "Burkina",
    "score"=>  5,
    "url"=> "www.burkina.com"
    ];

 array_push($teams,$team_4_data);
 //var_dump($teams);

 // creation dune fonction
 
 function showTeams($param)
 {
   
    var_dump($param);
?>

<table border="2">
<thead>
    <td>nom</td>
    <td>score</td>
    <td>url</td>
</thead>
    <tbody>
<?php
  foreach($param as $teamData)
  {
    ?>

    <tr>
        <td> <?php echo $teamData["name"]; ?></td>
        <td> <?php echo $teamData["score"]; ?></td>
        <td> <?php echo $teamData["url"]; ?></td>  
    </tr>
    </tbody>
    <?php
  }
   
?>

</table>
 
<?php
 }
 showTeams($teams) ;

//  * CREATE

 function addTeam($teams,$newTeam)
    {
            // verifie s'il existe (prochaine fois)
        array_push($teams,$newTeam);
        showTeams($teams);

    }
    $newTeam=[
        "name"=>  "Senegal",
        "score"=>  2.5,
        "url"=> "www.senegal.com"
    ];
    // pour mettre a jour le tableau de nouveau teams c est egale a //
   addTeam($teams,$newTeam);
    var_dump($teams);
   


/*foreach ($teams as $teamData) {
    if ($teamData)
}


// Modifier le score dans le tableau et supprimer langola */




?>