<?php
    
session_start();
ob_start();

require_once 'businessLogic.php';
$command = $_REQUEST["command"];

switch($command){
        
    case "addUser":
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        if(checkIfExist($userName)){ 
            $_SESSION["exsist"]="Username match, please try another one.";          
            header("Location: register.php");
            break;
        }
        else{
            addUser($firstName, $lastName, $userName, $password);
            header("Location: ../index.php");
            break;
        }
        
    case "login":
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        if(!checkUser($userName, $password)){ 
            $_SESSION["exsist"]="Username not exist, please try again.";
            header("Location: Login.php");
            break;
        }
        else{
            $_SESSION["userName"]=$userName;
            header("Location: home.php");
            break;
        }
        
    case "getVideos":
        $userName = $_SESSION["userName"];
        $json = getAllVideos($userName);
        echo $json;
        break;
       
    case "addVideo":
        $title = $_POST["title"];
        $category = $_POST["category"];
        $description = $_POST["description"];
        $link = $_POST["link"];
        $userName = $_POST["userName"];
        addVideo($title, $category, $description, $link, $userName);
        header("Location: home.php");
        break;
        
    case "getSearchedTable":
        $userName = $_SESSION["userName"];
        $searchedText = $_GET["searchedText"];
        $json = getSearchedVideos($userName, $searchedText);
        echo $json;
        break;
    
    case "remove":
        $videoID = $_POST["videoID"];
        removeVideo($videoID);
        header("Location: home.php");
        break;
    
    case "editVideo":
        $title = $_POST["title"];
        $category = $_POST["category"];
        $description = $_POST["description"];
        $link = $_POST["link"];
        $videoID = $_POST["videoID"];
        updateVideo($title, $category, $description, $link, $videoID);
        header("Location: home.php");
        break;    
}