<?php 
session_start();
ob_start();

if(!isset($_SESSION['userName'])){
    header("Location: ../php/Login.php");
}

$userName = $_SESSION["userName"];
$link = $_POST["link"];

function getYoutubeEmbedUrl($url)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Play</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/play.css"/>
    </head>
    <body>
        <div id="up">
            <form method="get" action="home.php">
                <button class="button" style="vertical-align:middle"><span>Back </span></button>
            </form>
        </div>
        <div id="down">
            <div id="play">
                <iframe allowfullscreen  width="800px" height="600" src="<?php echo getYoutubeEmbedUrl($link); ?>"></iframe>
            </div>
        </div> 
    </body>
</html>
