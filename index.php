<html>
    <head>
        <title>PHP Tutorial</title>
</head>
<body>
    <?php
         //echo "Hello Godson";
$y=2;
$ans=$y**2;
echo $ans;
echo "<br>";

$x=10;
for($i=1; $i <= $x; $i++){
    echo $i, ',';

}
echo "<br>";

$x=12;
for($i=2; $i <= $x; $i+=2){
    echo $i, ',';
}
echo "<br>";
$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j"];
for($i=0; $i < count($letters); $i++){
    echo $letters[$i].";";

}

echo "<br>";
$y=4;
if ($y==4){
    echo "y is 4";
}else{
    echo " y is not 4";
}
echo "<br>";

        
$score = 60;
if($score > 69){echo "<br>"; echo "your grade is A";}
elseif ($score > 59){echo "<br>"; echo "your grade is B";}
elseif($score > 49){echo "<br>"; echo "your grade is C";}
elseif($score > 44){echo "<br>"; echo "your grade is D";}
elseif($score > 39){echo "<br>"; echo "your grade is E";}
else {echo "<br>"; echo "your grade is F";}

echo "<br>";
$scores =[
        ["name"=>"lawrence","matno"=>001, "ca"=>15, "exam"=>40],
        ["name"=>"precious","matno"=>002, "ca"=>13, "exam"=>55],
        ["name"=>"progress","matno"=>003, "ca"=>12, "exam"=>30],
        ["name"=>"john","matno"=>004, "ca"=>10, "exam"=>70],
        "name"=>"Alonge",["matno"=>005, "ca"=>15, "exam"=>31],
        ];
            echo '<table border="1">';
            echo '<th>Name</th><th>Mat No</th><th>CA</th></th>Exam</th><th>Grade</th>';
            foreach ($scores as $score)
            {
                    
                    if($score["ca"]+$score["exam"] >69){$grade ="A";}
                    elseif ($score["ca"]+$score["exam"] >59){$grade ="B";}
                    elseif($score["ca"]+$score["exam"] >49){$grade ="C";}
                    elseif($score["ca"]+$score["exam"] >44){$grade ="D";}
                    elseif($score["ca"]+$score["exam"] >39){$grade ="E";}
                    else {$grade="f";}
                        echo '<tr>';

            echo 
             '<td>' .$score["name"]. '</td>
              <td>'.$score["matno"].'</td>
              <td>'.$score["ca"].'</td>
              <td>'.$score["exam"].'</td>
              <td>'.$grade.'</td>';
            echo '</tr>';
        }
        echo '</table>';
?>
</body>
</html>