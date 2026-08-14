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
$scores =
        [
        ["name"=>"lawrence","matno"=>"001", "ca"=>15, "exam"=>40],
        ["name"=>"precious","matno"=>"002", "ca"=>13, "exam"=>55],
        ["name"=>"progress","matno"=>"003", "ca"=>12, "exam"=>30],
        ["name"=>"john","matno"=>"004", "ca"=>10, "exam"=>70],
        ["name"=>"Alonge", "matno"=>"005", "ca"=>15, "exam"=>31],
        ];
            echo '<table border="1">';
            echo '<th>Name</th><th>Mat No</th><th>CA</th><th>Exam</th><th>Grade</th>';
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


$students = [
    ["name"=>"Lawrence", "department"=>"Computer Science", "matno"=>"CS001", "ca"=>20, "exam"=>60],
    ["name"=>"Precious", "department"=>"Computer Science", "matno"=>"CS002", "ca"=>20, "exam"=>60],
    ["name"=>"Progress", "department"=>"Computer Science", "matno"=>"CS003", "ca"=>20, "exam"=>60],
    ["name"=>"John", "department"=>"Computer Science", "matno"=>"CS004", "ca"=>20, "exam"=>60],
    ["name"=>"Alonge", "department"=>"Computer Science", "matno"=>"CS005", "ca"=>20, "exam"=>60],

    ["name"=>"David", "department"=>"Computer Science", "matno"=>"CS006", "ca"=>10, "exam"=>50],
    ["name"=>"Daniel", "department"=>"Computer Science", "matno"=>"CS007", "ca"=>10, "exam"=>50],
    ["name"=>"Michael", "department"=>"Computer Science", "matno"=>"CS008", "ca"=>10, "exam"=>50],
    ["name"=>"Samuel", "department"=>"Computer Science", "matno"=>"CS009", "ca"=>10, "exam"=>50],
    ["name"=>"Victor", "department"=>"Computer Science", "matno"=>"CS010", "ca"=>10, "exam"=>50],
    ["name"=>"Emeka", "department"=>"Computer Science", "matno"=>"CS011", "ca"=>10, "exam"=>50],
    ["name"=>"Ibrahim", "department"=>"Computer Science", "matno"=>"CS012", "ca"=>10, "exam"=>50],

    ["name"=>"Blessing", "department"=>"Computer Science", "matno"=>"CS013", "ca"=>15, "exam"=>30],
    ["name"=>"Esther", "department"=>"Computer Science", "matno"=>"CS014", "ca"=>15, "exam"=>30],
    ["name"=>"Mary", "department"=>"Computer Science", "matno"=>"CS015", "ca"=>15, "exam"=>30],
    ["name"=>"Joy", "department"=>"Computer Science", "matno"=>"CS016", "ca"=>15, "exam"=>30],

    ["name"=>"Chris", "department"=>"Computer Science", "matno"=>"CS017", "ca"=>12, "exam"=>30],
    ["name"=>"Peter", "department"=>"Computer Science", "matno"=>"CS018", "ca"=>12, "exam"=>30],
    ["name"=>"Andrew", "department"=>"Computer Science", "matno"=>"CS019", "ca"=>12, "exam"=>30],
    ["name"=>"Joseph", "department"=>"Computer Science", "matno"=>"CS020", "ca"=>12, "exam"=>30]
];

echo '<table border="1">';

echo '<tr>
        <th>Name</th>
        <th>Department</th>
        <th>Mat Number</th>
        <th>CA</th>
        <th>Exam</th>
        <th>Total Score</th>
        <th>Grade</th>
      </tr>';

foreach ($students as $student)
{
    $total = $student["ca"] + $student["exam"];

    if ($total > 69)
    { $grade = "A";}
    elseif ($total > 59)
    {$grade = "B";}
    elseif ($total > 49)
    {$grade = "C";}
    elseif ($total > 44)
    {$grade = "D";}
    elseif ($total > 39)
    {$grade = "E";}
    else {$grade = "F";}

    echo '<tr>';

    echo '<td>'.$student["name"].'</td>';
    echo '<td>'.$student["department"].'</td>';
    echo '<td>'.$student["matno"].'</td>';
    echo '<td>'.$student["ca"].'</td>';
    echo '<td>'.$student["exam"].'</td>';
    echo '<td>'.$total.'</td>';
    echo '<td>'.$grade.'</td>';

    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>