<?php
        require_once('connect.php');
        $request=$bdd->prepare("INSERT INTO articles (intitule, prixachat, prixvente, quantite) VALUES (:inti, :prixa, :prixv, :qte)");
        $request->execute(array(
            'inti'=>$_POST['intitule'],
            'prixa'=>$_POST['pAchat'],
            'prixv'=>$_POST['pVente'],
            'qte'=>$_POST['quantite']
        ));
    include('index.php');
?>