<?php
    spl_autoload_register(function($class){
        require '../../models/'.$class.'.php';
    });
    $user = new User($_POST);
    $userManager = new UserManager();
    switch ($_POST["action"]) {
        case 'create':
            $userManager->createObject(1,'CREATEUSER', $user);
            echo 'Account was successfully created.';
            break;

            case 'update':
            $userManager->createObject(2,'CREATEUSER', $user);
            echo 'Account was successfully updated.';
            break;
            
            case 'delete':
            $userManager->createObject(3,'CREATEUSER', $user);
            echo 'Account was successfully updated.';
            break;
        default:
            echo 'Action non autorisée.';
            break;
    }
    