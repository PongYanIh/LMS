<html>
<head>
	<title>Library Management System</title>
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
			top: 80px; /* adjust the top position to make room for the header */
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
  <h2 style="text-align:center;">COLLEGE OF MEDICINE AND ALLIED HEALTH PROFESSIONS</h2>
	<h3 style="text-align:center;">Isabela State University</h3>
	<h5 style="text-align:center;">San Fabian, Echague, Isabela</h5>
	</div>
   <img class="logo" src="isu-logo.png" alt="isu" style="margin-right: 10px;">
</header>

<body>
<br>

<div class = "container">

	<a class = "btn btn-outline-primary" href=" index.php" role="button">Main Menu</a><br><br>

	<div class="d-grid gap-2">
	<a class = "btn btn-outline-primary" href=" radiology_books_list.php" role="button">RADIOLOGY</a>
	<a class = "btn btn-outline-primary" href=" labscience_books_list.php" role="button">LABORAOTRY SCIENCE</a>
	</div>


</div>


</body>
</html>