<?php
declare(strict_types=1);

require_once 'YoutubeVideo.php';
require_once 'VimeoVideo.php';
class VideoData
{
    public static function getVideos():array{
        return [
            new YoutubeVideo("yEddsSwweyE", "A Haunting In Venice"),
            new YoutubeVideo("t3PzUo4P21c", "SAW X"),
            new YoutubeVideo("QF-oyCwaArU", "THE NUN II"),
            new YoutubeVideo("BcDK7lkzzsU", "Smile"),
            new YoutubeVideo("BRb4U99OU80", "M3GAN"),
            new VimeoVideo("180017984",  "The Oregionian"),
            new VimeoVideo("81048340", "Exhibit A"),
            new VimeoVideo("102575049", "Big Ass Spider!"),
            new VimeoVideo("168071438", "SICKHOUSE "),
            new VImeoVideo("141281970", "In A Glass Cage")
        ];
    }
}