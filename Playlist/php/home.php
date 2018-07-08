<?php 
session_start();
ob_start();
if(!isset($_SESSION['userName'])){
    header("Location: ../php/Login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/home.css"/>
        <script src="../js/home.js"></script>
    </head>
    <body>
        
        <div id="up">
            <form method="post" action="../index.php">
                <button class="button" style="vertical-align:middle"><span>Exit </span></button>
            </form>
        </div>
        <div id="center">
            <div id="left">
                <h1>Welcome
                    <?php
                        if(isset($_SESSION["userName"])){
                            echo $_SESSION["userName"];
                        }
                    ?>
                </h1>
            </div>
            <div id="right">
<!--                <div class="container">
                    <div class="input-group">
                        
                        <span class="input-group-btn">
                            <button class="btn btn-search" type="button" ><i class="fa fa-search fa-fw"></i> Search</button>
                        </span>
                        <input name="searchedText" type="text" class="form-control" placeholder="Search for...">-->
                    <!--</div>-->
                <!--</div>-->
                <input type="text" placeholder="Search for..." name="searchedText">
                <!--<button type="button" onclick="getSearchedVideos()" class="label label-success">Go!</button>-->
                <button class="buttonS" style="vertical-align:middle" type="button" onclick="getSearchedVideos()"><span>Go</span></button>
                                <!--<button onclick="getSearchedVideos()" type="button"><i class="fa fa-search" ></i></button>-->

            </div>
        </div>
        <div id="down">
    
        
            
            <form method="get" action="add.php">
                <button id="bobo" class="btn btn-block">ADD NEW VIDEO</button>
                <!--<button class="label label-primary">Add New Video</button>-->
            </form>
            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th> 
                    </tr>
                </thead>
                <tbody id="videosTable">
                    
                </tbody>
            </table>
        </div>

        <?php
        // put your code here
        ?>
        
    </body>
</html>
