<?php ob_start();?>




<h1> Infos user</h1>
<div>
           
            <form action="indexAdmin.php?action=updateUser&id=<?= $_SESSION['userId']?>" method="POST">

                <label for="userName">votre nom : </label>
                <input type="text" id="userName" name="userName" value="<?= $_SESSION['userName'] ?>">

                <label for="userFirstname">votre prenom : </label>

                <input type="text" id="userFirstname" name="userFirstname" value="<?= $_SESSION['userFirstname'] ?>">

                <label for="userAdress">votre adresse : </label>
                <input type="text" id="userAdress" name="userAdress" value="<?= $_SESSION['userAdress'] ?>">

                <label for="userPhone">votre numero de telephone : </label>
                <input type="number" id="userPhone" name="userPhone" value="<?= $_SESSION['userPhone'] ?>">

                <label for="userMail">votre adresse mail : </label>
                <input type="email" id="userMail" name="userMail" value="<?= $_SESSION['userMail'] ?>">

              

                <div>
                    <button type="submit" data-dismiss="modal">Modifier</button>
                </div>

            </form>
        </div>


<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>