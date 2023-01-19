<?php
    $fem = 5;
    echo"
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      margin:5px;
      width: 30%;
    }
    
    td, th {
      border: 3px solid Black;
      text-align: center;
      padding: 8px;
    }
    tr:nth-child(even) {
        background-color: White;
        color:black;
      }
    div {
        display:flex;
        justify-content: center;
    }
    body {
        background-color:Black;
        color:white;
    }
    th {
        color:Lime;
    }
    
    }
    </style>";
    $ett = 5;
    $två = 10;
    $tre = 15;
    echo "<div>";
    echo "<table>";
    echo "<tr><th>5 Times Table</th><th>Svar</th></tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        echo "<td>$ett x $x</td>";
        echo "<td>".$x*$ett."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<table>";
    echo "<tr><th>10 Times Table</th><th>Svar</th></tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        echo "<td>$två x $x</td>";
        echo "<td>".$x*$två."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<table>";
    echo "<tr><th>15 Times Table</th><th>Svar</th></tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        echo "<td>$tre x $x</td>";
        echo "<td>".$x*$tre."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
?>