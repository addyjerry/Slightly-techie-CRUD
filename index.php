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
        width:25rem;
        height: 12rem;
        color:white;
        background-color: purple;
        border-radius: 8px;
     }
     .blog h1{
        color:white;
        font-size:2rem;
        font-weight: 500;
     }
     .blog button{
        width: 7rem;
        font-size: 1.5rem;
        padding: 8px;
        border-radius: 8px;
        border: none;
        margin: 2px;
     }
    
     .blog__area{
        display:grid;
        grid-template-columns: repeat(3,30rem);
        grid-gap: 1rem;
        margin-top: 1rem;
     }
     #edit{
        background-color: greenyellow;
     }
     #delete{
        background-color: red;
     }
     .header{
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
        <h1>Bongo's Blog</h1>
    </div>
    <div class="user-create">
        <form method="POST">
        <div id="title">
            <input type="text" name="title" placeholder="Title">
        </div>
        <div id="Comment">
            <textarea type="text" name="commenttext" placeholder="Comment"></textarea>
        </div>
        <button name="new_post">Post</button>
        </form>
    </div>
    <div class="blog__area">
       <?php
    foreach($query as $q) {?>
    <div class="blog">
        <h1><?php echo $q['title']; ?></h1>
      <a href="view.php?id=<?php echo $q['id'] ?>"><button>View</button></a>
      <a href="edit.php?id= <?php echo $q['id']; ?>"><button id="edit">Edit</button></a>
        <form  method="post">
            <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
            <button name="delete" id="delete">DELETE</button>
        </form>
    </div>
    <?php } ?>
    </div>
   
</body>
</html>