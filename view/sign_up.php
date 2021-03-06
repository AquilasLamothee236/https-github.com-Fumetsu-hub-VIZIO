<html>
 <head>
    <meta charset='utf-8'>
    <title>Inscription</title>
 </head>
    <body style="background-color:#f3f3f2;">
         <div align="center">
        <br><hr>
         <h2>Inscription</h2>
         <br>

         <?php
        // bootstrap
        include('./utilitaire/bootstrap.php');
        ?>

        <?php //Renvoi un msg d'erreur si la création du compte à échoué
            if(isset($erreur))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur;
                echo '</div>';
                unset($erreur);
            }
            if(isset($succes))
            {
                echo '<div class="alert alert-success container w-25 p-3" role="alert">';
                echo $succes;
                echo '</div>';
            }
            if(isset($erreur_email))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur_email;
                echo '</div>';
            }
        ?>

         <form action="" method="POST" >
             <table>
                  <tr>
                     <td>
                         <label for="name">Nom</label><br>
                         <input class="form-control" type="text" name="nom" autocomplete="off">
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="name">Prenom</label><br>
                          <input class="form-control" type="text" name="prenom" autocomplete="off">
                      </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="mdp">Mot de passe</label><br>
                        <input class="form-control" type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation mot de passe</label><br>
                         <input class="form-control" type="password" name="mdp2" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mail">E-mail</label><br>
                         <input class="form-control" type="email" name="email" autocomplete="off">
                     </td>
                 </tr>
                
                 <tr>
                     <td>
                         <label for="date">Date de naissance</label><br>
                         <input class="form-control" type="date" name="date_n" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="sex">Sexe</label>
                         <select class="form-control" name="sex">
                         <option value="h">Masculin</option>
                         <option value="f">Feminin</option>
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="tel">Telephone</label>
                         <input class="form-control" type="tel" name="tel" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="statut">Statut</label>
                         <select class="form-control" name="statut">
                         <option value="med">Medecin</option>
                         <option value="pat">Patient</option>
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td align="center">
                         <br/>
                     </td>
                 </tr>
             </table> 

            <form action="./index.php" method="GET">
                <button class="btn btn-success" type="submit" value="Inscription" name="action">S'inscrire</button>
            </form>
         </form>
        <br>
         <form action="./index.php" method="GET">
             <a class="form-text">Déjà enregistré ?</a>
            <button class="btn btn-primary" type="submit" value="LOGIN" name="action">Se connecter</button>
        </form>
        <hr>
 </body>
 </html>