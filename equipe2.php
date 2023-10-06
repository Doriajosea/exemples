<?php
$team_1_data=["name"=>"maroc","score"=>1, "url"=>"www.maroc.com"];
$team_2_data=["name"=>"togo","score"=>2, "url"=>"www.togo.com"];
$team_3_data=["name"=>"cameroun","score"=>3, "url"=>"www.cameroun.com"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array Table</title>
</head>
<body>
    <?php
    // notion de parametre et de 
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

   
    echo "<h2>team 1:</h2>";
    readOne($team_1_data);

    echo "<h2>team 2:</h2>";
    readOne($team_2_data);

    echo "<h2>All teams:</h2>";
    readAll([$team_1_data, $team_2_data,$team_3_data]);
    ?>
</body>
</html>



