<?php

include ("connect.php");

if ($result=$mysqli->query("SELECT * FROM gry ORDER BY ID")){
    if ($result->num-rows>0){
        echo "<table>";
        echo "<tr><th>ID</th><th>NAZWA</yh><th>PLATFORMA</th></tr>";
        while ($row=$result->fetch-object()){
            echo "<tr>";
            echo "<td>".$row->ID ."</td>";
            echo "<td>".$row->NAZWA ."</td>";
            echo "<td>".$row->PLATFORMA ."</td>";
            echo "</tr>";
        echo "<table>";
        }
    }
}