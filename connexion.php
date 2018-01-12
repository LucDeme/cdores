<?php
//session_start();
//include("./menu.php");
?>
<script type="text/javascript">
 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});

</script>
<script type="text/javascript" name="test">

document.location.href = './document.php';

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Sign In</p>
                <form method="post" name="formlogin" class="login">
                	<input type="text" placeholder="Username" name="user" required />
                	<input type="password" placeholder="Password" name="password" required/>
                	<input type="submit" value="login" name="login" class="btn btn-success btn-sm" />
                	<div class="remember-forgot">
                	    <div class="row">
                	        <div class="col-md-6">
                	            <div class="checkbox">
                	                <label>
                	                    <input type="checkbox" />
                	                    Remember Me
                	                </label>
                	            </div>
                	        </div>
                	        <div class="col-md-6 forgot-pass-content">
                	            <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
                	        </div>
                	    </div>
                	</div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_POST["login"])) { // on verifie le mdp et usename
$mdp_crypt = sha1($_POST["password"]);
$username = $_POST["user"];
$control = verification($mdp_crypt, $username)[0]["count(*)"];
if (intval($control) > 0){ //connecté
	echo "connecté";
	$_SESSION['estAuthentifié']=true;

	if ($_SESSION['estAuthentifié']===true){
    include("./navbar.php");

	}
	else 
		exit();
	}
else { //non connecté
	echo "non connecté haha";

}
}




Function verification($mdp_crypt, $username){
	try
{
    $bdd = new PDO('mysql:host=localhost;dbname=CDO;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete = "SELECT count(*) FROM `utilisateur` WHERE `Emailutilisateur` = '".$username."' and `MDPutilisateur` = '".$mdp_crypt."'";
$reponse = $bdd->query($requete);
return $reponse->fetchAll();
}


?>


