<?php
if (!empty($_POST["tache"]) AND isset($_POST["tache"])) {
$tache = htmlspecialchars($_POST["tache"]);
$json_file = file_get_contents('todo.json'); //on load le contenu du JSON
$data = json_decode($json_file, true); // on décode le contenu du JSON
$data["todo"][] = $tache; // on ajoute la tache dans le tableau data
$ecriture_tache = json_encode($data, JSON_FORCE_OBJECT); //on encode la tache en format JSON
$stock_tache = file_put_contents('todo.json' , $ecriture_tache); //rajouter dans le fichier JSON



if (isset ($data["todo"])){
    foreach ($data["todo"] as $key => $value){
?>
        <li>
            <input type="checkbox" name="case" value="<?=$value?>">
            <label for="case"><?= $value ?></label>
        </li>

<?php
    }

}
}
else
    echo "vide"
?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="contenu">
  <section>
      <p class="liste">A FAIRE</p>
      <ul id="aFaire">
          <li><!--<?php echo $nvlAjout; ?>--></li>
      </ul>
  </section>

  <section>
      <p class="liste">Archive</p>
  </section>

  <section>
      <p>Ajouter une tâche</p>
      <form action="index.php" method="post">
          <input type="text" name="tache">
          <input type="submit" name="valider" >
      </form>
  </section>
</div>

</body>
</html>
