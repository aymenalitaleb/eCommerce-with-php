<?php
session_start();
if (isset($_SESSION['Username'])) {
    header('Location: dashboard.php');
}
include "init.php";
include $tpl . "header.php";
include 'includes/languages/english.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = sha1($_POST['pass']);

    $stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1");
    $stmt->execute(array($username, $password));
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['Username'] = $username;
        header('Location: dashboard.php');
        exit();
    }
}
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off" />
    <input class="form-control input-lg" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="login" />
</form>

<?php include $tpl . "footer.php";?>
