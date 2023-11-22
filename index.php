<html>

<head>
    <link rel="stylesheet" href="./css/custom.css">
    <meta charset="UTF-8">
    <title>Horror Movie Trailers</title>
</head>

<body>
    <h1>Horror Video Trailers</h1><br>
    <div class="flex-container">
        <?php
        require 'src/YoutubeVideo.php';
        require 'src/VimeoVideo.php';
        require 'src/VideoData.php';

        //Print Videos
        foreach (VideoData::getVideos() as $currentElement) {
            echo "<div>";
            echo "<p>" . $currentElement->getName() . "</p>";
            echo $currentElement->getHTML();
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>