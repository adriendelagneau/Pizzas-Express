<?php ob_start();?>
<h1> change pwd</h1>

<?php echo $_SESSION['userPWD']?>

<form action="index.php?action=changementMdpUser" method="post">

        <label for="actualPwdUser">password : </label>
        <input type="password" placeholder="actualPwdUser" name="actualPwdUser" id="actualPwdUser">

        <label for="newPwdUser">new Password: </label>
        <input type="password" placeholder="newPwdUser" name="newPwdUser" id="newPwdUser">

        <label for="newPwdUserConfirm">new Password: </label>
        <input type="password" placeholder="newPwdUserConfirm" name="newPwdUserConfirm" id="newPwdUserConfirm">

        <input type="submit" value="OK">
     <!--  <p action ="index.php?action=deconnexionUser">deconnexion user</p> -->
    </form>


<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

