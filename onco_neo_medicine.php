<html>
<head>
	<title> ONCOLOGY & NEOPLASTIC BOOKS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		  header {
			position: fixed;
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

		  .logo {
			width: 140px;
			height: 140px;
		  }
	  </style>

<header style="display: flex; align-items: center;">
  <img class="logo" src="com-logo.png" alt="com" style="margin-right: 10px;">
  <div>
  <h2 style="text-align:center;">COLLEGE OF MEDICINE AND ALLIED HEALTH PROFESSIONS</h2>
  <h2 style="text-align:center;">DOCTOR OF MEDICINE</h2>
	<h4 style="text-align:center;">Isabela State University</h4>
	<h6 style="text-align:center;">San Fabian, Echague, Isabela</h6>
	</div>
   <img class="logo" src="isu-logo.png" alt="isu" style="margin-right: 10px;">
</header>

</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="text-align:center;"> ONCOLOGY & NEOPLASTIC BOOKS BOOKS</h1>

<?php

require("db_connect.php");

$sql = "SELECT * FROM oncology";

    try{
        $result = $conn->prepare($sql);

        $result->execute();

?>

<div class = "container">

	<a class = "btn btn-outline-primary" href=" index.php" role="button">Main Menu</a>
	<a class = "btn btn-outline-primary" href=" onco_neo_add_record.php" role="button"> Add Record</a> 
	<br>
	<br>
	
		<table border ="1" class = "table table-hover table-striped">
			<tr>
				<th> #</th>
				<th>Category</th>
				<th>Book Author</th>
				<th>Book Title</th>
				<th>Edition</th>
				<th>Year</th>
				<th>Publisher</th>
				<th>Quantity</th>
				<th>Availability</th>
				<th>Borrower</th>
				<th> Action </th>
				<th>  </th>
			</tr>
    
<?php

        if($result->rowCount()>0){
            $i=1;
            while($row=$result->fetch (PDO::FETCH_ASSOC)){

?>                <tr>
                    <td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["category"]; ?> </td>
					<td> <?php echo $row["book_author"]; ?> </td>
					<td> <?php echo $row["book_title"]; ?> </td>
					<td> <?php echo $row["book_edition"]; ?> </td>
					<td> <?php echo $row["year_published"]; ?> </td>
					<td> <?php echo $row["publisher"]; ?> </td>
					<td> <?php echo $row["quantity"]; ?> </td>
					<td> <?php echo $row["availability"]; ?> </td>
					<td> <?php echo $row["borrower"]; ?> </td>
					<td>
						<a href = "onco_neo_edit_record.php?id=<?php echo $row["id"]?>" class = "btn btn-warning">Edit Record</a>
					</td>
					<td>
						<a href = "onco_neo_delete_record.php?id=<?php echo $row["id"]?>" class = "btn btn-danger">Delete Record</a>
					</td>
                </tr>
<?php
            }
			$i++;
        }
    }
	catch(PDOexception $e){
		
		die("An error has been occured".$e);
	}

?>
</div>
</body>
</html>