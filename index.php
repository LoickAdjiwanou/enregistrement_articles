<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Gestion Articles</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <center>
    <br/><header class="liens">
            <a href=""><b>Formulaire</b></a>
            <a href="enregistrements.php">Enregistrements</a>
        </header>
        <br/><br/><br/>
        <div class="enregistrer">
            <form method="post" class="formulaire" action="ajout.php">
                <b class="titre"><font size="6px">Enregistrer une article</font></b>
                <p>
                    <label for="intitule" class="a">Intitulé</label>
                    <input type="text" name="intitule" id="intitule" required="required" class="b"/><br/><br/>
                    <label for="pAchat" class="c">Prix Achat</label>
                    <input type="text" name="pAchat" id="pAchat" required="required" class="d"/><br/><br/>
                    <label for="pVente" class="e">Prix Vente</label>
                    <input type="text" name="pVente" id="pVente" required="required" class="f"/><br/><br/>
                    <label for="quantite" class="g">Quantité</label>
                    <input type="text" name="quantite" id="quantite" required="required" class="h"/><br/><br/>
                    <input type="submit" value="Enregistrer"/><br/>
                </p> 
            </form>
        </div>    
    </center>    
</body>
</html>
