
<!DOCTYPE html>
<html>
<body>


<?php       
if(isset($_POST['gen']))
{
    $token=random_bytes(8);
    $dev_token=bin2hex($token);
    echo "the security key is:<input type='text'value='$dev_token'/>";
    $connection=mysqli_connect("localhost","root","","test");
    $result=mysqli_query($connection,"update keygen set token='$dev_token' where ID=799");
}


?>
<form method="post">
<input type="submit" name ="gen" value="Generate Token" />
</form>
</body>
</html>



