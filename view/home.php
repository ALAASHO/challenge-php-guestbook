<?php
require '../controller/homeController.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Book </title>
</head>
<body>
<h2>Welcome to The Guest Book! </h2>
<div class="container">
    <div class="row">
        <form action="" method="post">
            <div class="form-group">
                <div class="col-sm">
                    <fieldset>

                        <legend class="text-center">Guestbook:</legend>

                        email:<br>
                        <input type="text" name="mail" value="<?php if (isset($_POST['mail'])) {echo $_POST['mail'];} else{ echo "write your mail";} ?>">
                        <br>

                        title:<br>
                        <input type="text" name="title" value="<?php if (isset($_POST['title'])) {echo $_POST['title'];} else{ echo "write your title";} ?>">
                        <br>


                        Message:<br>
                        <textarea rows="4" cols="50" name="text_content"><?php if (isset($_POST['text_content'])) {echo $_POST['text_content'];} else{ echo "write something";} ?></textarea>
                        <br>
                        <div class="text-center">
                            <input type="submit" value="Write out Your visit ! " name="submit">
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>


        <div>
            <?php

             var_dump($loader->list);
            ?>
        </div>
    </div>


<!--<form action="#" method="post">-->
<!---->
<!--    <input type="text" name="title" placeholder="Title" />-->
<!---->
<!--    <input type="text" name="date" placeholder="Date" />-->
<!---->
<!--    <input type="text" name="content" placeholder="Write Your Message Here" />-->
<!---->
<!--    <input type="text" name="name" placeholder="Your Name" />-->
<!---->
<!---->
<!--    <input type="submit" name="submit" />-->
<!--</form>-->



</body>
</html>