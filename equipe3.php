<?php
$team_1_data=["name"=>"maroc","score"=>1, "url"=>"www.maroc.com"];
$team_2_data=["name"=>"togo","score"=>2, "url"=>"www.togo.com"];
$team_3_data=["name"=>"cameroun","score"=>3, "url"=>"www.cameroun.com"];
$teams=[$team_1_data,$team_2_data,$team_3_data];

?>


    <?php
    
    function readOne($team) {
        echo "<table border='1'>";
        echo "<tr>";
            foreach ($team as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        
        echo "</table>";
    }

    
    function readAll($teams) {
        echo "<table border='1'>";
        foreach ($teams as $team) {
            echo "<tr>";
            foreach ($team as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    function addTeam(&$teams, $newTeamData) {
        return array_push($teams, $newTeamData);
    }
    
    function delTeam(&$teams, $teamName) {
        foreach ($teams as $key => $team) {
            if ($team['name'] == $teamName) {
                unset($teams[$key]);
            }
        }
        
    }

    echo "<h2>team 1:</h2>";
    readOne($team_1_data);

    echo "<h2>team 2:</h2>";
    readOne($team_2_data);

    echo "<h2>Toutes les equipes avant dajouter burkina :</h2>";
    readAll($teams);

    $newTeamData = [
        "name" => "burkina",
        "score" => 4,
        "url" => "www.burkina.com"
    ];
    addTeam($teams, $newTeamData);
    
    echo "<h2>Toutes les equipes apres ajouter burkina:</h2>";
    readAll($teams);

    
    delTeam($teams, "togo ");    

    echo "<h2>Toutes les equipes apres supprimer togo:</h2>";
    readAll($teams);
    ?>