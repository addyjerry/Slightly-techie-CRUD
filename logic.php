<?php
//Creating a connection between website and database
//mysqli_connect takes four parameters ; hostname, username,password,databasename



$conn = mysqli_connect(hostname: 'localhost',username: 'root',password: '',database: 'bongoblog');

//Checking for connection error
if(!$conn){
    echo '<h2>There is an error in the connection<h2>';
}

//Deleting data from database


//Getting data from database
$sql="SELECT * from bongoblog";

$query = mysqli_query(mysql: $conn,query: $sql);

//Accessing user input
if(isset($_REQUEST['new_post'])){

    $title= $_REQUEST['title'];
    $commenttext =$_REQUEST['commenttext'];

    //Inserting user input into database
    $sql ="INSERT INTO bongoblog(title,commenttext) VALUES ('$title','$commenttext');";

    //Execute the data take
    //mysqli_query takes two params; $conn $sql
    mysqli_query(mysql: $conn ,query: $sql);


    header("Location: index.php");
    exit();
   //The header is used to redirect to the page where you want after form submission;

  
}
 //Checking for id and fetch data
 if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql= "SELECT *  FROM bongoblog WHERE  id = $id ";
    $query = mysqli_query($conn,$sql);
  }
//Updating data in database
 if(isset($_REQUEST['update'])){
     $id = $_REQUEST['id'];
     $title = $_REQUEST['title'];
     $commenttext = $_REQUEST['commenttext'];

     $sql = "UPDATE bongoblog SET title= '$title', commenttext = '$commenttext' WHERE  id= $id;";

      mysqli_query(mysql: $conn,query: $sql);

     header(header: 'Location:index.php');
     exit();
 }

 if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $commenttext = $_REQUEST['commenttext'];

    $sql = "DELETE FROM bongoblog WHERE  id= $id;";

     mysqli_query(mysql: $conn,query: $sql);

    header(header: 'Location:index.php');
    exit();
}