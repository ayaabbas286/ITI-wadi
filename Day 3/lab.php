<?php
//1- Create an array that contain values (PHP, HTML, CSS, JavaScript)
$values=["PHP","HTML","CSS","JavaScript"];
//2- Print the array elements using loop (2 ways)
echo"<h5>First Method<h5>";
for($i=0;$i<=3;$i++)
{
    echo $values[$i]."<br>";
}
echo "<hr>";
echo"<h5>Second Method<h5>";
foreach($values as $lang){
    echo $lang."<br>";
}
echo "<hr>";
echo "Please Add your Info";
$info=["Name"=>"Aya_Abbas","Age"=>"25","Email"=>"ayaabbas626@gmail.com","Collage"=>"Faculty of Law"];
echo "<table border='1' width='50%'>";
foreach ($info as $key => $value) {
    echo "<tr>
            <td>$key</td>
            <td>$value</td>
          </tr>";
}
echo "</table>";
echo "<hr>";
?>
