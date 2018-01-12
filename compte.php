<?php
include("./menu.php");

try
{
	echo '<br />';
    $bdd = new PDO('mysql:host=localhost;dbname=CDO;charset=utf8', 'root', '');
    // echo'connexion OK <br />'; border="1" width="70%" align="center"
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM utilisateur' ); // IL FAUT FINIR LINNER JOIN POUR NOM PRENOM STAGIAIRE
?>
<!--SELECT * FROM stage inner join entreprise on stage.id_entreprise=entreprise.id_entreprise'*/
-->
    <table class="tblstages" >
<br>
      <tr>
          <th>#</th>
          <th>Année</th>
          <th>Classe</th>
          <th>Nom entreprise</th>
          <th>Activité</th>
          <th>Site</th>
          <th>Telephone</th>
     <!--     <th>Prenom stagiaire</th>
          <th>Nom stagiaire</th>-->
      </tr>
    <?php //on affiche les ligne du tableau avec la boucle while
while ($donnees = $reponse->fetch())
{
?>
  <tr>
    <th><?php echo $donnees['IDutilisateur'];?></th>

      </tr>
  </tr>

  in
<?php
}
$reponse->closeCursor(); //libère la connexion du serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
?>

</table>

