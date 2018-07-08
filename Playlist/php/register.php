<?php 
session_start();
ob_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/form.css"/>
    </head>
    <body>
        <div id="up">
            <form method="get" action="../index.php">
                <!--<button type="submit" class="btn btn-dark">Back</button>-->
                  <button class="button" style="vertical-align:middle"><span>Back </span></button>

            </form>
        </div>
        <div id="down">
            <div id="center">
                <h1>Sign Up</h1>
                </br></br></br></br></br></br> 
                <form action="API.php" method="post">
                    <table align="center">
                        <tr>
                            <td><label>First Name: </label></td>
                            <td><input required pattern="[a-zA-Z]*" title="Please enter a valid first name" name="firstName" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Last Name: </label></td>
                            <td><input required pattern="[a-zA-z]+([ '-][a-zA-Z]+)*" title="Please enter a valid last name" name="lastName" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Username: </label></td>
                            <td><input required pattern="^[a-z0-9_-]{3,15}$" title="Please enter a valid username" name="userName" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label>Password: </label></td>
                            <td><input required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="your password must be Minimum eight characters, at least one letter and one number" name="password" type="password"/></td>
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
                    <button name="command" value="addUser" class="btn btn-secondary btn-lg btn-block">Finish</button>
                    <!--<button name="command" value="addUser" class="label label-primary">Finish</button>-->
                </form>
            </div>
        </div>

    </body>
</html>


