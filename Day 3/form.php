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
$info=["Name"=>"Aya_Abbas","Age"=>"25","Email"=>"ayaabbas626@gmail.com","Collage"=>"Faculty of Law"];
echo "<table border='1' width='40%' align='center'>
 <tr>
   <td>Name </td>
  <td>
  
  <?php
  $info=["Name"=>"Aya_Abbas","Age"=>"25","Email"=>"ayaabbas626@gmail.com","Collage"=>"Faculty of Law"];

  
  ?>
</td>
 </tr>
 <tr>
     <td>Age</td>
   <td>1200$</td>
 </tr>
 <tr>
     <td>Email </td>
     <td>1400$</td>
 </tr>
<tr>
   <td>Collage </td>
     <td>1400$</td>
 </tr>
     </table>";
echo "<hr>";