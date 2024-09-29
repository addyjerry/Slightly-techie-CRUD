<?php 
include 'logic.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .header{
        background-color: purple;
        color: white;
        height: 5rem;
        text-align: center;
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
     .blog_post{
        text-align: center;
        font-size: 2rem;
     }

     button{
        width:8rem;
        font-size: 1.5rem;
     }
     .buttons{
        display: flex;
        margin-left: 35%;
        gap: 5rem;
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
     <a href="index.php">  <h1>Bongo's Blog</h1></a> 
    </div>
    <?php 
    foreach($query as $q) {?>
    <div class="blog_post">
        <h1>
            <?php echo $q['title'] ?>
        </h1>
        <p> <?php echo $q['commenttext'] ?></p>
           <div class="buttons">
        <a href="edit.php?id= <?php echo $q['id']; ?>"><button>Edit</button></a>
        <form  method="post">
            <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
            <button name="delete">DELETE</button>
        </form>
        </div>
    </div>
     <?php }?>
     <footer>
        <a href="index.php"><h2>Home</h2></a>
     </footer>
</body>
</html>