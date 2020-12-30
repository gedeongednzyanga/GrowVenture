<?php
    spl_autoload_register(function($class){
        require '../../models/'.$class.'.php';
    });

    $message = new Message($_POST);
    $messageManager = new MessageManager();

    switch ($_POST['action']) {
        case 'send':
            $messageManager->createObject(1, "CREATEMESSAGE", $message);
            echo "Message sended successfully.";
            break;

        case 'update':
            $messageManager->createObject(2, "CREATEMESSAGE", $message);
            echo "Message updated successfully.";
            break;
        
        case 'delete':
            $messageManager->createObject(3, "CREATEMESSAGE", $message);
            echo "Message deleted successfully.";
            break;
        
        default:
            # code...
            break;
    }