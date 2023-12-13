<?php
error_reporting(0);
ob_start();
session_start();
try
{
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");
}
catch(PDOException $dberror)
{
    echo $dberror->getMessage();
}

if(isset($_SESSION["email"]))
{
    $query = $db->prepare("SELECT * FROM users WHERE email=?");
    $query->execute(array($_SESSION["email"]));
    $usernumber = $query->rowCount();
    $usersinfo = $query->fetch(PDO::FETCH_ASSOC);
    if($usernumber > 0)
    {
        $username = $usersinfo["username"];
        $email = $usersinfo["email"];
        $registerdate = $usersinfo["registerdate"];
        $authority = $usersinfo["authority"];
    }
}

// we pull data of blog posts from database
$query = $db->prepare("SELECT * FROM blog order by blogid desc");
$query->execute();
$blognumber = $query->rowCount();
$bloginfo = $query->fetchAll(PDO::FETCH_ASSOC);

if($_GET)
{
    $blogid = intval($_GET["blogid"]);
    $query = $db->prepare("SELECT * FROM blog WHERE blogid=?");
    $query->execute(array($_GET["blogid"]));
    $info = $query->fetch(PDO::FETCH_ASSOC);
}

?>

<link rel="stylesheet" href="css/styles.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
