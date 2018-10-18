<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=csv_db', 'root', '');
echo "<h1> vous dans la base de donné</h1>";
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
// affichage des table
function getdb(){
    $requette1 = $bdd->query('SELECT * FROM film');  
    $donnees = $requette1->fetchall();
    $requette1->closeCursor();
};
   // ajouts des données
   function getajoutx()
            {       
                $req = $bdd->prepare('INSERT into film (id_fiml,titre,"description",genre,realisateur,année_sortie) VALUES (id_fiml,titre,"description",genre,realisateur,année_sortie) ');
                $donnees = $req->fetchall();
                $req->closeCursor();
            };
            // modification du table
        function update(){
            $requette4 = $bdd->query('UPDATE film 
            SET titre = '',
              description= '',
              genre= '',
              année_sortie='',
              realisateur='',
            WHERE id_film = '' '); 
        };
// suppression des champs
    function delete()
        {
            $requette3 = $bdd->query('DELETE FROM film  where id_film="id_film"'); 
            $donnees = $requette3->fetchall();
            $requette3->closeCursor();
        };
?>
