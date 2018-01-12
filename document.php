
<?php
include("./navbar.php");
//include("./feuille de style.css");

try
{
	echo '<br />';
    $bdd = new PDO('mysql:host=localhost;dbname=CDO;charset=utf8', 'root', '');
 // echo'connexion OK <br />';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM document ');
?>
    <table class="tblentreprise" >

      <tr>
          <th>Titre document</th>
          <th><center>ID_ENTREPRISE</center></th>
      </tr>
    <?php //on affiche les ligne du tableau avec la boucle while
while ($donnees = $reponse->fetch())
{
?>
  <tr>
    <th><?php echo $donnees['Titredocument'];?></th>

  </tr>
<?php
}
$reponse->closeCursor();
?>

</table>
</body>
