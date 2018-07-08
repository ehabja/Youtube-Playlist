<?php 
session_start();
ob_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Log IN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/form.css"/>
        <script src="../js/login.js"></script>
    </head>
    <body>
        
        <div id="up">
            <form method="get" action="../index.php">
                <button class="button" style="vertical-align:middle"><span>Back </span></button>
            </form>
        </div>
        <div id="down">
            
            <div id="center">
                <h1>Sign In</h1>
                </br></br></br></br></br></br>             
                <form action="API.php" method="post">
                    <table align="center">
                        <tr>
                            <td><label>Username: </label></td>
                            <td><input required name="userName" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Password: </label></td>
                            <td><input required name="password" type="password"/></td>
                        </tr>
                    </table>
                    </br></br>
                    <div id="exist">
                        <?php
                        if(isset($_SESSION["exsist"])){
                            echo $_SESSION["exsist"];
                        }
                        $_SESSION["exsist"]="";
                        ?>
                    </div>
                    </br></br>
                    <button name="command" value="login" class="btn btn-secondary btn-lg btn-block">Finish</button>
                </form>

            </div>

    </body>

</html>
