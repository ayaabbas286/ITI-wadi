
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label>Username</label>
   <input type="text" name="username" placeholder="Username" ><br>
    <label>Password</label>
    <input type="password" name="pass" placeholder="write your password"><br>
 <input style="background-color: #007bff" type="submit" name="Register">
</form>
<?php
var_dump($_POST)."<br>";
function is_required($data){
    if(empty($data)){
        echo"Required Data!";
    }else{
        $data=strip_tags($data);
        $data=trim($data);
        $data=htmlspecialchars($data);
        return ($data);
    }
}
echo is_required($_POST['username'])."<br>";
?>
</body>
</html>
