<?php if (isset($_POST["tache"])) { 
    if (empty($_POST["tache"])){ 
        echo "Veuillez indiqué une tâche à ajouter."; }
    else { $data = array ( $_POST['tache'] ); $jsondata =   json_encode($data, JSON_PRETTY_PRINT); if(file_put_contents('todo.json', $jsondata))
        echo 'Tâche ajoutée.'; 
    else echo "Impossible d'ajouter la tâche."; } } ?>
    
   
  
 




$data = array ( );
if (isset($_POST["tache"])) { 
        if (empty($_POST["tache"])){ 
            echo "Veuillez indiqué une tâche à ajouter."; }
        else { 
              $data[] =$_POST['tache']  ;
            
              $jsondata = json_encode($data, JSON_PRETTY_PRINT); 

        if(file_put_contents('todo.json', $jsondata))
            echo 'Tâche ajoutée.'; 
        else echo "Impossible d'ajouter la tâche."; } } ?>











$nvlAjout = $_POST['tache'];