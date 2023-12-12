
    <?php
    $info=["FirstName"=> $_POST['fn'],
        "LastName"=> $_POST['ln'],
        "Address"=>$_POST['Address'],
        "country"=> $_POST["country"],
        "Gender"=>$_POST["GENDER"]];
    $skills=$_POST['skills'];
    echo "<table border='1' width='50%'>";
    foreach ($info as $x => $value) {
        echo "<tr>
            <td>$x</td>
            <td>$value</td>
          </tr>";
    }
    echo "<tr><td > skills</td><td>";
    foreach($skills as $Skill){
        echo $Skill."<br> ";
    }
    echo "</table>";
    echo "<hr>";
    ?>