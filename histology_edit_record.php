<?php
	require("db_connect.php");
	
	if(isset($_POST["book_author"])){
		
		$id = $_POST["id"];
		$book_author = $_POST["book_author"];
		$book_title = $_POST["book_title"];
		$book_edition = $_POST["book_edition"];
		$year_published = $_POST["year_published"];
		$publisher = $_POST["publisher"];
		$quantity = $_POST["quantity"];
		$availability = $_POST["availability"];
		$borrower = $_POST["borrower"];
		
		if($_POST["book_author"] == ''){
			echo "<script>alert('Please input author name!');";
		}else{
		$sql = "UPDATE histology SET book_author = :book_author, book_title = :book_title, book_edition = :book_edition, year_published = :year_published, publisher = :publisher, quantity = :quantity, availability = :availability, borrower = :borrower WHERE id = :id";
		}
		try {
			$result = $conn->prepare($sql);
			$values = array(":book_author" => $book_author, ":book_title" => $book_title, ":book_edition" => $book_edition, ":year_published" => $year_published, ":publisher" => $publisher, ":quantity" => $quantity, ":availability" => $availability, "borrower" => $borrower, ":id" => $id);
			$result->execute($values);
			
			if($result){
				echo "<script> alert('Record has been saved!'); window.location = 'histology_books_list.php'; </script>";
			}
			
		} catch(PDOException $e){
			die("Unexpected error has been occured!" . $e);
		}	
	}

?>
<html>
<head>
	<title> Edit Record </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align:center;">Edit Record</h1>
<div class = "container">
<a class = "btn btn-outline-primary" href="histology_books_list.php" role="button">Histology Books</a>
<?php
	$sql = "SELECT * FROM histology WHERE id = :id";
	$book_author = ""; $book_title = ""; $book_edition = ""; $year_published = ""; 	$publisher = ""; $quantity = ""; $availability = ""; $borrower = "";
	try{
        $result = $conn->prepare($sql);
		$value = array(":id" => $_REQUEST["id"]);
		
        $result->execute($value);
		if ($result->rowCOunt()>0){
			$row=$result->fetch(PDO::FETCH_ASSOC);
			
			$book_author = $row["book_author"];
			$book_title = $row["book_title"];
			$book_edition = $row["book_edition"];
			$year_published = $row["year_published"];
			$publisher = $row["publisher"];
			$quantity = $row["quantity"];
			$availability = $row["availability"];
			$borrower = $row["borrower"];
			
		}
	}catch(PDOException $e){
			
		}
?>

	<form action = "" method = "post">
	
		<input type = "hidden" name = "id" value = "<?php echo $_REQUEST["id"]; ?>">
		
		<label>Author: </label>
		<input type = "text" value = "<?php echo $book_author; ?>" class = "form-control" name = "book_author">
		
		<label>Title:</label>
		<input type = "text" value = "<?php echo $book_title; ?>" class = "form-control" name = "book_title">
			
		<label>Edition:</label>
		<input type = "text" value = "<?php echo $book_edition; ?>" class = "form-control" name = "book_edition">
		
		<label>Year:</label>
		<input type = "text" value = "<?php echo $year_published; ?>" class = "form-control" name = "year_published">
		
		<label>Publisher:</label>
		<input type = "text" value = "<?php echo $publisher; ?>" class = "form-control" name = "publisher">
		
		<label>Quantity:</label>
		<input type = "text" value = "<?php echo $quantity; ?>" class = "form-control" name = "quantity">
		
		<label>Availability:</label>
		<select class = "form-control" name = "availability">
			<option><?php echo $availability; ?></option>
			<option value ="YES">YES</option>
			<option value ="NO">NO</option>
		</select>
		
		<label>Borrower:</label>
		<input type = "text" value = "<?php echo $borrower; ?>" class = "form-control" name = "borrower">
		
<br>
		
		<button type = "submit" class ="btn btn-primary">Save</button>
		
	</form>
</div>
</body>
</html>



