
    <?php include ("form.php");
    $info=["FirstName"=> $_POST['fn'],
        "LastName"=> $_POST['ln'],
        "Address"=>$_POST['Address'],
        "country"=> $_POST["country"],
        "Gender"=>$_POST["GENDER"],
        "Skills"=>$_POST["php"]];
    $skills=$_POST['skills'];
    echo "<table border='1' width='50%'>";
    foreach ($info as $x => $value) {
        echo "<tr>
            <td>$x</td>
            <td>$value</td>
          </tr>";
    }
    foreach ($skills as $y => $value) {
        echo "<tr>
            <td>$y</td>
            <td>$value</td>
          </tr>";
    }
    echo "</table>";
    echo "<hr>";
    ?>