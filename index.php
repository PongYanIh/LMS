<html>
<head>
	<title>Library Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		   body {
			position: static;
			display: flex;
            align-items: center;
            justify-content: center;
			background-image: url('goldacclight2.jpg'); 
			background-repeat: no-repeat; 
			background-size: cover;
		  }

		  .logo {
			width: 140px;
			height: 140px;
			
		  }
		  
		  .container {
            display: flex;
			width: 1050px;
			position: relative;
        }

        .box {
            flex: 1;
        }
		 .hidden {
			display: none;
		}
		.closeButton {
			text-align: right;
			padding: 5px;
			cursor: pointer;
			display: inline-block;
			padding: 5px 10px;
			background-color: #f44336;
			color: #fff;
			font-weight: bold;
		}
		
		.gif-resize {
			width: 200px; /* Set the desired width */
			height: auto; /* Maintain the aspect ratio */
		}
		.toggleIcon {
			position: flex;
			top: 0;
			left: 0;
			cursor: pointer;
		}
		
	  </style>
</head>

<body>
<br>
 <span onclick="toggleDiv()">
    <img src="book.gif" alt="Icon" class="gif-resize toggleIcon">
  </span>
<div class = "container hidden" id="outerDiv">	

	<div class="d-grid gap-2 box"  id="innerDiv1">
	<a class = "btn btn-outline-dark" href=" basic_medical.php" role="button"><b>BASIC MEDICAL SUBJECTS</b></a>
	<a class = "btn btn-outline-dark" href=" clinical_medical.php" role="button"><b>CLINICAL MEDICAL SUBJECTS</b></a>
	<a class = "btn btn-outline-dark" href=" preventive.php" role="button"><b>PREVENTIVE, PUBLIC HEALTH, FAMILY, & COMMUNITY MEDICINE</b></a>
	<a class = "btn btn-outline-dark" href=" lab_medicine.php" role="button"><b>LABORATORY/DIAGNOSTIC MEDICINE</b></a>
	<a class = "btn btn-outline-dark" href=" medical_ethics.php" role="button"><b>MEDICAL ETHICS</b></a>
	<a class = "btn btn-outline-dark" href=" medical_research.php" role="button"><b>MEDICAL RESEARCH</b></a>
	<a class = "btn btn-outline-dark" href=" onco_neo_medicine.php" role="button"><b>ONCOLOGY & NEOPLASTIC MEDICINE</b></a>
	<a class = "btn btn-outline-dark" href=" medical_journals.php" role="button"><b>MEDICAL JOURNALS</b></a>
	<a class = "btn btn-outline-dark" href=" others.php" role="button"><b>OTHERS</b></a>
	</div>
	
	<div class="d-grid gap-2 box"  id="innerDiv2" style="background-image: url('bg.gif'); background-repeat: no-repeat; background-size: cover;">
	</div>
</div>

 <script>
    function toggleDiv() {
      var outerDiv = document.getElementById("outerDiv");
      var toggleIcon = document.getElementById("toggleIcon");
      
      if (outerDiv.style.display === "none") {
        outerDiv.style.display = "flex";
        toggleIcon.style.alignSelf = "flex-start";
        toggleIcon.src = "path/to/close-icon.png";
        toggleIcon.alt = "Close Icon";
      } else {
        outerDiv.style.display = "none";
        toggleIcon.style.alignSelf = "center";
        toggleIcon.src = "path/to/icon.png";
        toggleIcon.alt = "Icon";
      }
    }
  </script>

</body>
</html>