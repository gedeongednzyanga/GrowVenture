<?php
    spl_autoload_register(function($class){
        require '../../models/'.$class.'.php';
    });

    $new = new News($_POST);
    //Traitement de l'Image
    $image = time().'_'.$_FILES['image']['name'];
    $target = "../../views/assets/news_post/".$image;
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
        $new->setImage($image);
        $newManager = new NewManager();
        switch ($_POST["action"]) {
            case 'create':
                $newManager->createObject(1,'CREATENEW', $new);
                echo 'New has been published successfully.';
            break;

            case 'update':
            $newManager->createObject(2,'CREATENEW', $new);
                echo 'Account was successfully updated.';
                break;
            
            case 'delete':
            $newManager->createObject(3,'CREATENEW', $new);
            echo 'Account was successfully updated.';
            break;
        default:
            echo 'Action non autorisée.';
            break;
        }
    }else{
        echo '<span class="text-danger">Impossible d\'importer l\'image.</span>';
    }
    