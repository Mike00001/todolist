<?php 
 
     
if (isset($_POST["tache"])) {
$tache = htmlspecialchars($_POST["tache"]);
$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
$data = json_decode($json_file, true); // on décode le contenu du JSON
$data["todo"][] = $tache; // on ajoute la tache dans le tableau data
$ecriture_tache = json_encode($data, JSON_FORCE_OBJECT); //on encode la tache en format JSON
$stock_tache = file_put_contents('todo.json' , $ecriture_tache); //rajouter dans le fichier JSON
}


?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste</title>
</head>

<body>
<section>
    <h2>A FAIRE</h2>
    <ul id="aFaire">
        <li><!--<?php echo $nvlAjout; ?>--></li>
    </ul>
</section>

<section>
    <h2>ARCHIVE</h2>
</section>

<section>
    <h2>AJOUTER UNE TACHE</h2>
    <form action="index.php" method="post">
        <input type="text" name="tache">
        <input type="submit" name="valider">
    </form>
</section>    
</body>
</html>
