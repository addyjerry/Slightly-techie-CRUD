<?php
include 'logic.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        html,body{
            text-align: center;
        }
        input{
         font-size: 2rem;
        }
     #title input{
        width: 30rem;
        height:3rem;
        border-radius:3px;
        border:1px solid rgba(0,0,0,0.5);
        margin: 2rem;
     }

     #Comment textarea{
        margin: 2rem;
        width:50rem;
        height: 15rem;
        font-size: 2rem;
        padding: 1rem;
     }
     .user-create button{
        background-color:blue;
        color:white;
        width:10rem;
        height:3rem;
        border:none;
        font-size:2rem;
        padding:8px;
        border-radius: 9px;
     }
     .blog{
        width:10rem;
        color:white;
        background-color: rgba(100,255,100,0.5);
     }
     .blog h1{
        color:white;
        font-size:1rem;
        font-weight: 500;
     }
     .header{
        text-align: center;
        background-color: purple;
        color: white;
        height: 5rem;
     }
     .header h1{
        font-size: 3rem;
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 700;
     }
     .header a{
        text-decoration: none;
        color: white;
     }
     footer{
        bottom: 0;
        position: absolute;
        background-color: black;
        color: white;
        text-align: center;
        width: 99%;
     }
     footer a{
        text-decoration: none;
        color: white;
     }
     button{
        cursor: pointer;
     }
    </style>
</head>
<body>
<div class="header">
       <a href="index.php"> <h1>Bongo's Blog</h1></a>
    </div>
    <div class="user-create">
        <?php foreach($query as $q){ ?>
        <form method="POST">
        <div id="title">
            <input type="text" hidden name="id" value="<?php echo $q['id'] ?>">
            <input type="text" name="title" placeholder="Title" value="<?php echo $q['title'] ?>">
        </div>
        <div id="Comment">
            <textarea type="text" name="commenttext" placeholder="Comment"  ><?php echo $q['commenttext'] ?></textarea>
        </div>
        <button name="update">Update</button>
        </form>
        <?php } ?>
    </div>
    <footer>
       <a href="index.php"> <h2>Home</h2></a>
     </footer>
</body>
</html>