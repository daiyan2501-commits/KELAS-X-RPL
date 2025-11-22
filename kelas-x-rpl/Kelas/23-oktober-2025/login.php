<h1>login</h1>
<form action="">
<input type="email" name="email" placeholder="email"><br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" value="login" name="submit"><br>




</form>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "matyasir@gmail.com" && $password == "antok123") {
        $_SESSION['email'] = $email;
        $_SESSION["email"] = $email;
        header("location: index.php");
    } else {
        echo "login invalid";
    }
        echo "login berhasil";
    
    

}
?>
