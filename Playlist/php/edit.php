<?php 
session_start();
ob_start();

if(!isset($_SESSION['userName'])){
    header("Location: ../php/Login.php");
}

$userName = $_SESSION["userName"];
$videoID = $_POST["videoID"];
$title = $_POST["title"];
$category = $_POST["category"];
$description = $_POST["description"];
$link = $_POST["link"];


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/form.css"/>
    </head>
    <body>
        <div id="up">
            <form method="get" action="home.php">
                <!--<button type="submit" class="btn btn-dark">Back</button>-->
                <button class="button" style="vertical-align:middle"><span>Back </span></button>
            </form>
        </div>
        <div id="down">
            <div id="center">
                <h1>Edit Video</h1>
                </br></br></br></br></br></br>    
                <form action="API.php" method="post">
                    <table align='center'>
                        <tr>
                            <td><label>Title: </label></td>
                            <td><input value="<?php echo $title;?>" name="title" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Category: </label></td>
                            <td><input name="category" type="text" value="<?php echo $category;?>"/></td>
                        </tr>
                        <tr>
                            <td><label>Descriptions: </label></td>
                            <td><input name="description" type="text" value="<?php echo $description;?>"/></td>
                        </tr>
                        <tr>
                            <td><label>Link: </label></td>
                            <td><input name="link" type="text" value="<?php echo $link;?>" pattern="^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$" title="wrong URL"/></td>
                        </tr>
                        <input type="hidden" name="videoID" value="<?php echo $videoID;?>">
                    </table>
                    </br></br></br></br></br>
                    <button name="command" value="editVideo" class="btn btn-secondary btn-lg btn-block">Finish</button>
                </form>
            </div>
        </div>
    </body>
</html>
