<?php ob_start();?>
<h1> change pwd</h1>

<?php echo $_SESSION['userPWD']?>

<form action="index.php?action=changementMdpUser" method="post">

        <label for="pwdUser">password : </label>
        <input type="text" placeholder="pwdUser" name="pwdUser" id="pwdUser">

        <label for="pwdUserc">new Password: </label>
        <input type="password" placeholder="pwdUserc" name="pwdUserc" id="pwdUserc">

        <label for="pwdUsercc">new Password: </label>
        <input type="password" placeholder="pwdUsercc" name="pwdUsercc" id="pwdUsercc">

        <input type="submit" value="OK">
     <!--  <p action ="index.php?action=deconnexionUser">deconnexion user</p> -->
    </form>


<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

