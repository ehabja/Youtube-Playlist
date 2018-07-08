<?php

require_once 'DAL.php';
    
function addUser($firstName, $lastName, $userName, $password){
   
    $hashedPassword = md5($password);
    $sql = "insert into users(firstName, lastName, userName, password) values('$firstName', '$lastName', '$userName', '$hashedPassword')";
    insert($sql);
}

function checkIfExist($userName){
    
    $sql = "select userName from users where userName = '$userName'";
    $rows=ifExist($sql);
    if($rows!=0){
       return true;
    }
    else{
        return false;
    }
}

/*function checkIfVideoExist($link){
    
    $sql = "select link from videos where link = '$link'";
    $rows=ifExist($sql);
    if($rows!=0){
       return true;
    }
    else{
        return false;
    }
}*/

function checkUser($userName, $password)
{
    $hashedPassword = md5($password);
    $sql = "select userName from users where userName = '$userName' AND password = '$hashedPassword'";
    $rows=ifExist($sql);
    if($rows!=0){
           
       return true;
    }
    else{
        
        return false;
    }
}

function addVideo($title, $category, $description, $link, $userName){
    
    $sql = "insert into videos(title, category, description, link, user) values('$title', '$category', '$description', '$link', '$userName')";
    insert($sql);    
}

function getAllVideos($userName) {
    
    // Create SQL: 
    $sql = "select * from videos where user = '$userName'";

    // Get all products: 
    $allVideos = getCollection($sql);
    
    // Return all products as a json object:
    return json_encode($allVideos);
}

function getSearchedVideos($userName, $searchedText) {
    
    // Create SQL: 
    $sql = "select * from videos where user = '$userName' AND (description LIKE '%$searchedText%' OR title LIKE '%$searchedText%')";

    // Get all products: 
    $allSearched = getCollection($sql);
    
    // Return all products as a json object:
    return json_encode($allSearched);
}

function removeVideo($videoID){
    
    // Create SQL: 
    $sql = "delete from videos where videoID='$videoID'";
    
    // Update: 
    delete($sql);
}

function updateVideo($title, $category, $description, $link, $videoID){
    
    $sql = "update videos set title='$title', category='$category', description='$description', link='$link' where videoID=$videoID";
    update($sql);    
}
