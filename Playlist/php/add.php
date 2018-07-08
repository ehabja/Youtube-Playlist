<?php
session_start();
ob_start();

if(!isset($_SESSION['userName'])){
    header("Location: ../php/Login.php");
}

$userName = $_SESSION["userName"];
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Add</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/form.css"/>
    </head>
    <body>
        <div id="up">
            <form method="get" action="home.php">
                <button class="button" style="vertical-align:middle"><span>Back </span></button>
            </form>
        </div>
        <div id="down">
            <div id="center">
                <h1>Add Video</h1>
                </br></br></br></br></br></br>             
                <form action="API.php" method="post">
                    <table align="center">
                        <tr>
                            <td><label>Title: </label></td>
                            <td><input required name="title" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Category: </label></td>
                            <td><input required name="category" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Descriptions: </label></td>
                            <td><input name="description" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Link: </label></td>
                            <td><input name="link" type="text" pattern="^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$" title="wrong URL"/></td>
                        </tr>

                        <input type="hidden" name="userName" value="<?php echo $userName; ?>">
                    </table>

                    </br></br></br></br></br></br></br>
                    <button name="command" value="addVideo" class="btn btn-secondary btn-lg btn-block">Finish</button>
                </form>
            </div>
        </div>
</body>
</html>
