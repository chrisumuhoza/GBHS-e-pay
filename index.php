<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname="gbhs student";

$connect = new mysqli($host, $user, $password,$dbname);
if($connect ->error){
    die("Failed to connect with database");
}
echo "Database connected";
$connect -> close();


$query ="SELECT StudentID FROM chris_textbooks";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>GBHS E-PAY</title>
</head>
<body>
    <div class="container">
     <div class="language">
        <div class="languagechose">
            <div class="txt"><div>Please choose your preffered language</div> Veuillez choisir votre langue de predilection Svp.</div>
           <form action="get">
             <button type="button" title="French/Francais">French/Français</button>
             <a href="form/form.html"><button type="button" title="English/Anglais" href="form/form.html">English/Anglais</button></a>
           </form>
        </div>
     </div>
        
    </div>
</body>
</html>