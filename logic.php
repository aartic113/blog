<?php
    $conn = mysqli_connect("localhost","root","root","blog");
    if (!$conn){
        echo "Connection not established with database.";
    }

    $sql = "Select * from POSTS";
    $query = mysqli_query($conn,$sql);

    if (isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];


        $sql = "INSERT INTO POSTS(title,content) values ('$title','$content')";

        mysqli_query($conn,$sql);

        header("Location: index.php?info=added");
        exit();
    }

    if (isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM POSTS WHERE id = $id";
        $query = mysqli_query($conn,$sql);
    }

    if (isset($_REQUEST["update"])){
        $id = $_REQUEST["id"];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];


        $sql = "UPDATE POSTS SET title='$title', content='$content' WHERE id=$id";

        mysqli_query($conn,$sql);

        header("Location: index.php?info=updated");
        exit();
    }

    if (isset($_REQUEST["delete"])){
        $id = $_REQUEST["id"];
        


        $sql = "DELETE FROM POSTS WHERE id=$id";

        mysqli_query($conn,$sql);

        header("Location: index.php?info=deleted");
        exit();
    }
?>