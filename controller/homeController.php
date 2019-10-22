<?php
declare(strict_types=1);

require '../models/Post.php';
//
//require '../controller/homeController.php';
require '../models/PostLoader.php';


if (isset($_POST['submit'])) {
    $name = $_POST['mail'];
    $title = $_POST['title'];
    $text_content = $_POST['text_content'];
    $date = date('Y-m-d H:i A');

    $myPost = new Post($name, $title, $text_content, $date);

    $myPost->writeToJson($name, $title, $text_content, $date);

    $loader = new PostLoader();
}
    /*
    $name = $_POST['mail'];
    $title = $_POST['title'];
    $text_content = $_POST['text_content'];
    $date = date('Y-m-d H:i A');

    //build Post object
    //$_name, $_title, $_message, $_dat

    $myPost = new Post($name, $title,$text_content, (int)$date);
    //get data
    //getPostName, getPostTitle, getPostMessage, getPosDate

    $got_postName = $myPost->getName();
    $got_postTitle = $myPost->getTitle();
    $got_postMessage = $myPost->getContent();
    $got_postDate = $myPost->getDate();

    $showPost = true;

    $myPost->writeToJson($name,$title,$text_content, $date);

}
*/