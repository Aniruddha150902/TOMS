<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>

</html> -->
<?php
if (isset($_GET['notice_id'])) {
	$output = '';
	include "../connection.php";
	$notice_id = $_GET['notice_id'];
	$query = "SELECT O.NOTICE_ID,V.VEHICLE_ID,V.LICENSE_NUMBER,V.VEHICLE_TYPE,V.VEHICLE_MODEL,F.FINE_DESCRIPTION,O.PLACE,O.DATE,F.FINE_AMOUNT,O.STATUS,T.OFFICER_ID,T.OFFICER_NAME,D.DL_NO,D.OWNER_NAME,D.OWNER_EMAIL FROM VIOLATIONS O,VEHICLE V,FINE_TICKETS F,TPO T,OWNER D WHERE O.VEHICLE_ID=V.VEHICLE_ID AND O.FINE_ID=F.FINE_ID AND V.OWNER_ID=D.OWNER_ID AND O.OFFICER_ID=T.OFFICER_ID AND O.NOTICE_ID='{$notice_id}'";
	$result = mysqli_query($conn, $query);
	$output .= '<table class="table table-borderless"> <tbody>';
	while ($row = mysqli_fetch_array($result)) {
		$output .= '

				<h1 style="text-align:center;">Fine Receipt</h1>

				<tr class="content">
					<td>Reference No :</td>
					<td>' . $row["NOTICE_ID"] . '</td>
				</tr>

				<tr class="content">
					<td>Vehicle No :</td>
					<td>' . $row["VEHICLE_ID"] . '</td>
				</tr>

				<tr class="content">
					<td>License ID :</td>
					<td>' . $row["LICENSE_NUMBER"] . '</td>
				</tr>

				<tr class="content">
					<td>Class of Vehicle :</td>
					<td>' . $row["VEHICLE_TYPE"] . '</td>
				</tr>

                <tr class="content">
					<td>Vehicle Model :</td>
					<td>' . $row["VEHICLE_MODEL"] . '</td>
				</tr>

				<tr class="content">
					<td>Owner Name :</td>
					<td>' . $row["OWNER_NAME"] . '</td>
				</tr>

                <tr class="content">
					<td>Owner DL :</td>
					<td>' . $row["DL_NO"] . '</td>
				</tr>

				<tr class="content">
					<td>Police ID :</td>
					<td>' . $row["OFFICER_ID"] . '</td>
				</tr>

                <tr class="content">
					<td>Police Name :</td>
					<td>' . $row["OFFICER_NAME"] . '</td>
				</tr>
				
			    <tr class="content">
					<td>Fine Description :</td>
					<td>' . $row["FINE_DESCRIPTION"] . '</td>
				</tr>

				<tr class="content">
					<td>Place :</td>
					<td>' . $row["PLACE"] . '</td>
				</tr>
				
				<tr class="content">
					<td>Issued Date :</td>
					<td>' . $row["DATE"] . '</td>
				</tr>
				
				<tr class="content">
					<td>Total Amount :</td>
					<td>' . $row["FINE_AMOUNT"] . '</td>
				</tr>
				
				<tr class="content">
					<td>Status :</td>
					<td>' . $row["STATUS"] . '</td>
				</tr>
				
				<div class="container text-center mt-5">
        			<a href="view_all_offence.php" class="btn btn-warning mt-5"> Back </a>
    			<div>
           ';
	}
	$output .= '  
           </tbody></table>  
      
      ';
	echo $output;
}
?>