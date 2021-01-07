<?php
    spl_autoload_register(function($class){
        require '../../models/'.$class.'.php';
    });

    $commentaire = new Commentaire($_POST);
    $commentaireManager = new CommentaireManager();
    switch ($_POST["action"]){
        case "create":
            $commentaireManager->createObject(1, "CREATECOMMENT", $commentaire);
            echo $_POST["usercom"]."Thanks for comment.";
            break;
        case "update":
            $commentaireManager->createObject(2, "CREATECOMMENT", $commentaire);
            echo "Comment updated.";
            break;
        case "delete":
            $commentaireManager->createObject(3, "CREATECOMMENT", $commentaire);
            echo "Comment deleted.";
            break;
    }