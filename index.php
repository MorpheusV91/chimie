<?php

session_start();

require __DIR__ .'/functions.php';



if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';


switch ($route) {
    
    case'home':
        require __DIR__ .'/controllers/home-controllers.php';
            break;

            case'list-molecule':
                require __DIR__ .'/controllers/list-molecule-controllers.php';
            break;
            
            case'ajouter-molecule':
                require __DIR__ .'/controllers/ajouter-molecule-controllers.php';
                ajouter();
                break;
                
                case'details-molecule':
                    require __DIR__ .'/controllers/details-molecule-controllers.php';
                    break;
                    
                    case'update-molecule':
                        require __DIR__ .'/controllers/update-molecule-controllers.php';
                        modifier();
                        break;
                        
                        case'delete-molecule':
                            require __DIR__ .'/controllers/delete-molecule-controllers.php';
                            supprimerMolecule();
                            break;
                            
                            case'connexion-molecule':
            require __DIR__ .'/controllers/authentication/connexion-molecule-controllers.php';
            oneUser();
            break;
            
            case'deconnexion-molecule':
            require __DIR__ .'/controllers/authentication/deconnexion-molecule-controllers.php';
            deconnexion();
            break;
            
            
            default:
            error(404);

 }