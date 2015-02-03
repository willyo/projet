   <html>
   <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>Inscription</title>
   </head>
   <header>
		<IMG SRC="gphyart.png" style="text-align:center" alt="logo_gphy_art" class="images_petit2">
		<hr width="100%" color="blue">
   </header>
   <H1 align ="center"><font color="blue">Inscription</H1></font>
   <br><br><br>
   <body bgcolor="white">
   <form id="form3" name="form_ins_art" method="GET" action="profil.php">
   <fieldset>
   <legend>Vos Identifiants</legend>
	<p>
        <label>Indentifiant :</label> <input type="text" name="id" placeholder="Identifiant" > <br> <br>
	</p>
	<p>
        <label>Mot de passe :</label> <input type="text" name="mdp" placeholder="Mot de passe"> <br><br>
	</p>
	</fieldset>
	<fieldset>
    <legend>Vos coordonnées</legend>
	<p>
        <label>Nom d'artiste :</label> <input type="text" name="nom" placeholder="Nom"> <br> <br>
	</p>
	<p>
        <label>E-mail :</label> <input type="email" name="mail" placeholder="toto@mail.fr" > <br> <br>
	</p>
	<p>
        <label>Pays : </label> <select name="pays" id="pays">
           <option value="france">France</option>
           <option value="espagne">Espagne</option>
           <option value="italie">Italie</option>
           <option value="royaume-uni">Royaume-Uni</option>
           <option value="canada">Canada</option>
           <option value="etats-unis">États-Unis</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
       </select>
	</p>
	</fieldset>
	<fieldset>
	<legend>Votre art</legend>
	<p>
        <label>Style :</label> <input type="text" name="id" placeholder="style" > <br> <br>
	</p>
	</fieldset>
    <INPUT type= "submit" value="Valider" >  
	</form>
	</body>
</html>