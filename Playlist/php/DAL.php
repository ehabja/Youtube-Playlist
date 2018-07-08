<?php

function connect() {

    $connection = mysqli_connect("localhost", "root", "", "playlist");

    if(mysqli_connect_errno($connection)) {
        die("Failed to connect to the database. Error: " . mysqli_connect_error());
    }

    mysqli_set_charset($connection, "utf8");

    return $connection;
}

// Insert to the database: 
function insert($sql) {
    
    $connection = connect();
    
    mysqli_query($connection, $sql);
    
    $newID = mysqli_insert_id($connection);
    
    mysqli_close($connection);
    
    return $newID;
}

// Get all objects (= table):
function getCollection($sql) {

    // Connect to the database: 
    $connection = connect();
    
    // Get data from the database: 
    $result = mysqli_query($connection, $sql);
    
    // Convert the data to a collection: 
    $collection = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the database: 
    mysqli_close($connection);

    // Return the object:
    return $collection;
}

function ifExist($sql){
    
    $connection = connect();
    
    mysqli_query($connection, $sql);
    
    $rows = mysqli_affected_rows($connection);
    
    mysqli_close($connection);
    
    return $rows;
}

function delete($sql) {
    
    // Connect to the database: 
    $connection = connect();
    
    // Delete from database: 
    mysqli_query($connection, $sql);
    
    // Get the new created primary key: 
    $affectedRows = mysqli_affected_rows($connection);
    
    // Close the database: 
    mysqli_close($connection);
    
    return $affectedRows;
}

function update($sql) {
    
    // Connect to the database: 
    $connection = connect();
    
    // Update in the database: 
    mysqli_query($connection, $sql);
    
    // Get the new created primary key: 
    $affectedRows = mysqli_affected_rows($connection);
    
    // Close the database: 
    mysqli_close($connection);
    
    return $affectedRows;
}