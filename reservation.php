<link rel="stylesheet" href="./gg.css" >
<link rel="stylesheet" href="./navbar.php" >
<?php
include("./navbar.php");



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
    <table class="tblcontact" >

      <tr>
          <th><center><b>ID_ENTREPRISE</b></center></th>
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
