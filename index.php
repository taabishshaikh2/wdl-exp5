<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cv</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="abbox"></div>    
    <div class="abme">About Me</div>
    <div class="main">
        <div class="h">Hello</div>
        <div class="name"><?php echo$profile['full name']; ?></div>
        <div class="student"><?php echo$profile['desgination']; ?></div>
        <div class="college"><?php echo$profile['affiliation']; ?></div>
        <div class="rec"></div>
        <div class="about">About Me</div>
        <div class="me"><?php echo$profile['details']; ?></div>
        <div class="rec1"></div>
        <div class="per">Personal Info</div>
        <div class="cir"></div>
        <div class="sep"></div>
        <div class="n">Name</div>
        <div class="b">Birthdate</div>
        <div class="nation">Nationality</div>
        <div class="f">Freelance</div>
        <div class="n1">Taabish Shaikh</div>
        <div class="b1">26.09.2000</div>
        <div class="nation1">Indian</div>
        <div class="f1">Available</div>
        <div class="cir1"></div>
        <div class="rec2"></div>
        <div class="con">Contact Info</div>
        <div class="cir2"></div>
        <div class="sep1"></div>
        <div class="cir3"></div>
        <div class="e">Email</div>
        <div class="p">Phone</div>
        <div class="i">Instagram</div>
        <div class="e1">Taabishshaikh2@gmail.com</div>
        <div class="p1">8692881750</div>
        <div class="i1">_taabishshaikh_</div>   
    </div>
    <?php include_once('main.php'); ?>
    <?php include_once('link.php'); ?>
    </body>
</html>