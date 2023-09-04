<?php

	if(isset($_POST["book_author"])){
		
		require("db_connect.php");
		
		$book_author = $_POST["book_author"];
		$book_title = $_POST["book_title"];
		$book_edition = $_POST["book_edition"];
		$year_published = $_POST["year_published"];
		$publisher = $_POST["publisher"];
		$quantity = $_POST["quantity"];
		$availability = $_POST["availability"];
		$borrower = $_POST["borrower"];
		
		
		$sql = "INSERT INTO embyrology(book_author, book_title, book_edition, year_published, publisher, quantity, availability, borrower) VALUES(:book_author, :book_title, :book_edition, :year_published, :publisher, :quantity, :availability, :borrower)";
		
		try {
			$result = $conn->prepare($sql);
			$values = array(":book_author" => $book_author, ":book_title" => $book_title, ":book_edition" => $book_edition, ":year_published" => $year_published, ":publisher" => $publisher, ":quantity" => $quantity, ":availability" => $availability, ":borrower" => $borrower);
			$result->execute($values);
			
			if($result){
				echo "<script> alert('Record has been saved!'); window.location = 'embyrology_books_list.php'; </script>";
			}
			
		} catch(PDOException $e){
			die("Unexpected error has been occured!" . $e);
		}	
	}

?>
<html>
<head>
	<title> Add Record </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
		  header {
			position: static;
			top: 0;
			left: 0;
			width: 100%;
			height: 170px;
			background-color: #333;
			color: #fff;
			padding: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			z-index: 9999;
		  }
		  
		   body {
			position: sticky;
			top: 50px; /* adjust the top position to make room for the header */
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #fff;
		  }

		  .logo {
			width: 140px;
			height: 140px;
		  }
	  </style>
</head>
<header style="display: flex; align-items: center;">
  <img class="logo" src="com-logo.png" alt="com" style="margin-right: 10px;">
  <div>
  <h1 style="text-align:center;">COLLEGE OF MEDICINE AND ALLIED HEALTH PROFESSIONS</h1>
	<h2 style="text-align:center;">Isabela State University</h2>
	<h4 style="text-align:center;">San Fabian, Echague, Isabela</h2>
	</div>
   <img class="logo" src="isu-logo.png" alt="isu" style="margin-right: 10px;">
</header>

<body>
<h1 style="text-align:center;">ADD BOOK RECORD</h1>
<div class = "container">
	<a class = "btn btn-outline-primary" href="embyrology_books_list.php" role="button">Embyrology Books</a>
	<form action = "" method = "post">
		<label>Author: </label>
		<input type = "text" class = "form-control" name = "book_author">
		
		<label>Title:</label>
		<input type = "text" class = "form-control" name = "book_title">
			
		<label>Edition:</label>
		<input type = "text" class = "form-control" name = "book_edition">
		
		<label>Year:</label>
		<input type = "text" class = "form-control" name = "year_published">
		
		<label>Publisher:</label>
		<input type = "text" class = "form-control" name = "publisher">
		
		<label>Quantity:</label>
		<input type = "text" class = "form-control" name = "quantity">
		
		<label>Availability:</label>
		<select class = "form-control" name = "availability">
			<option value ="">None</option>
			<option value ="YES">YES</option>
			<option value ="NO">NO</option>
		</select>
		
		<label>Borrower:</label>
		<input type = "text" class = "form-control" name = "borrower">
		
<br>
		
		<button type = "submit" class ="btn btn-primary">Save</button>
		
	</form>
</div>
</body>
</html>