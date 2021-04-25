<!doctype html>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="text" name="username" required />
<input type="password" name="password" required />
<input type="submit" value="submit"/>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['username'];
$userPassword=$_POST['password'];
echo "Details:$user $userPassword";
}
?>
