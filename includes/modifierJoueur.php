<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="modification">
        <h1>Modifier un joueur</h1>
        <form action="../php/modifierJoueur.php" method="post">
            <label>Numéro de licence : </label>
            <input type="number" name="numLicence" value="<?php echo $_GET['numLicence'];?>" required><br/>
            <label>Nom : </label>
            <input type="text" name="nom" value="<?php echo $_GET['nom'];?>" required><br/>
            <label>Prénom : </label>
            <input type="text" name="prenom" value="<?php echo $_GET['prenom'];?>" required><br/>
            <label>Date de naissance : </label>
            <input type="date" name="dateNaissance" value="<?php echo $_GET['dateNaissance'];?>" required><br/>
            <label>Taille : </label>
            <input type="number" name="taille" value="<?php echo $_GET['taille'];?>" required><br/>
            <label>Poids : </label>
            <input type="number" name="poids" value="<?php echo $_GET['poids'];?>" required><br/>
            <label>Poste préféré : </label>
            <input type="text" name="postePrefere" value="<?php echo $_GET['postePrefere'];?>" required><br/>
            <label>Statut : </label>
            <input type="text" name="statut" value="<?php echo $_GET['statut'];?>"><br/>
            <label>Commentaire : </label>
            <input type="text" name="commentaire" value="<?php echo $_GET['commentaire'];?>" required><br/>
            <label>Photo : </label>
            <img src="<?php echo $_GET['photo'];?>">

            <div class="buttons">
                <input type="submit" value="Valider" name="valider">
                <input type="reset" value="Annuler">
            </div>
        </form>
    </div>
</body>
</html> 