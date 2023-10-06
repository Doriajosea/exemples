<?php

$team_1_data = ["etalons",3];
echo $team_1_data[0];

$team_1_data=[
    "name" => "etalons",
    "score" => 3,
    "url" => "www.etolons.com"
];
var_dump($team_1_data);  // permet d'afficher le contenu et les informations de type tableau
print_r($team_1_data);


$team_2_data=[
    "name" => "elephans",
    "score" => 1,
    "url" => "www.elephans.com"
];
var_dump($team_2_data);
echo $team_2_data["name"];
echo"<br><br>";

foreach($team_2_data as $data){
    echo"<br><br>";
    echo $data;
}

$team_3_data=[
    "name" => "allouhaite",
    "score" => 2,
    "url" => "www.allouhaite.com"
];
$teams = [$team_1_data,$team_2_data,$team_3_data];
var_dump($teams);
echo "<br></br>";
echo "<ul>";

foreach($teams as $data){

    echo"<br><br>";
    if ($data ["score"] == 2) {
        echo "<li>". $data["name"]."</li>";
    }
}
echo "</ul>";
/*if ("score" == 2){
    var_dump($teams);
}*/

$team_4_data=[
    "name" => "lion",
    "score" => 0,
    "url" => "www.lion.com"
];

array_push ($teams,$team_4_data);

var_dump($teams);

?>

<?php

function showTeams($param) {
    var_dump($param);
}



?>

<table>
    <thead>
        <td>name</td>
        <td>score</td>
        <td>url</td>
    </thead>
    <?php
        foreach ($param as $teamData) {
    ?>
    <tbody>
        <td> <?php echo $teamData ["name"]; ?> </td>
        <td> <?php echo $teamData ["score"]; ?> </td>
        <td> <?php echo $teamData ["url"]; ?> </td>
    </tbody>
    <?php
        }
        ?>
</table>