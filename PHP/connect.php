<?php

    $conn = mysqli_connect('localhost', 'root');

    if ($conn) {
        echo "connection successful";
    } else {
        echo "No connection established";
    }

    mysqli_select_db($conn, "dynamicwebdb");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comment'];

    $query = "insert into contactinfo(name, email, mobile, comment) values('$name', '$email', '$mobile', '$comments')";

    echo "$query";

    mysqli_query($conn, $query);

    header("location:index.php");


// below is the alternate code of above :

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $comment = $_POST['comment'];

//     $conn = mysqli_connect('localhost', 'root', '', 'dynamicwebdb');
//     if ($conn) {

//         $query = "insert into contactinfo(name, email, mobile, comment) values('$name', '$email', '$mobile', '$comment')";

//         echo "$query";

//         mysqli_query($conn, $query);

//         header("location:index.php");

//         echo "connection successful";
//     } else {
//         echo "No connection established";
//     }
// }
?>