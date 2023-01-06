<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Gestion des joueurs</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="gestionJoueurs.php">Gestion des joueurs</a></li>
            <li><a href="gestionMatchs.php">Gestion des matchs</a></li>
            <li><a href="#">Feuilles de matchs</a></li>
            <li><a href="stats.php">Statistiques</a></li>
        </ul>
    </header>
    <main>
        <div class="gestion">
            <h1>Mes joueurs</h1>
            
            <table>
                <tr>
                    <th>Numéro licence</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Taille</th>
                    <th>Poids</th>
                    <th>Poste préféré</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
                <?php include('../php/joueurs.php'); ?>
            </table>
            
            <div class="buttons">
                <input type="submit" value="Ajouter un joueur" onclick="window.open('ajouterJoueur.html','wclose',
                'width=700,height=800, toolbar=si, scroolbar=si, status=si,left=500,top=50');return false;">
            </div>
        </div>
    </main>
</body>
</html>