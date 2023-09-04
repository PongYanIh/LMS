<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblmscom";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
    $sql = "DELETE FROM pathology WHERE id='" . $_GET["id"] . "'";

    
    $conn->exec($sql);
	echo "<script> alert('Record has been deleted!'); window.location = 'pathology_books_list.php'; </script>";
    }catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>