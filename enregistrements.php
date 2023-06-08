<link rel="stylesheet" href="css.css">
<center>
    <br/><header class="liens">
            <a href="index.php">Formulaire</a>
            <a href=""><b>Enregistrements</b></a>
        </header>
</center>
<?php
    require_once('connect.php');
    $req=$bdd->query("SELECT * from articles");
?>
<br/><br/><br/>
<center>
<b><font size="8px">Enregistrements</font></b>
<br/><br/><br/><br/>

    <table border=3>
        <tr> <th>id</th><th>Intitulé</th><th>Prix Achat</th><th>Prix Vente</th><th>Quantité</th> </tr>
        <?php
            while($donnees = $req->fetch()){
                echo "<tr><td>".$donnees["id"]."</td>"
                    ."<td>".$donnees["intitule"]."</td>"
                    ."<td>".$donnees["prixachat"]."</td>"
                    ."<td>".$donnees["prixvente"]."</td>"
                    ."<td>".$donnees["quantite"]."</td></tr>";
            }
            $req->closeCursor();
        ?>
    </table>
    <br/><br/>
    <form action="">
        <input type="submit" value="Recharger"/>
    </form>
</center>