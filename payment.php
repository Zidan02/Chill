<?php
	 session_start();
	$userid = $_SESSION['id'];
	
    $showAlret = false;
    $showError = false;
	// echo $userid;
	$id = $_GET['id'];

	if (isset($_POST['paynow'])) {
		include 'components\dbconnect.php';
		$cardNumber = $_POST['cardNumber'];
		$amount = $_POST['amount'];
		// $paynow = $_POST['paynow'];

		
		
		$query = "SELECT `m_price` FROM `movie` WHERE m_id = '$id'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		if($row ['m_price'] == $amount){
			$sql = "INSERT INTO `payment`(`m_id`, `u_id`, `amount`) VALUES ('$id','$userid','$amount')";
			$result2 = mysqli_query($conn, $sql);
			if($result2){
				$showAlret = true;
			}
		}
		else {
			$showError = 'Payment not seccessful';
		  }
		echo $id;
		echo $userid;
		echo $amount;
	}
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Gateway Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<style>
		body{
			background-color: black;
		}
	</style>
</head>
<body>
	<div class="header">
		<?php
			if ($showAlret) {
			echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Payment Successful! </strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div> ';
			header("Location: userProfile.php");
			}
			if ($showError) {
			echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Error!</strong> ' . $showError . '
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
			}
		?>
	</div>
	<div class="container text-light" style="margin-top: 30px;">
		
			<div class="row">
				<div class="col-md-6 offset-md-3"> 
					<h1 style="text-align: center;">Payment Gateway</h1> <hr>
					<img src="image\payment.png" style="width: 100%;" alt="">
		
					<form action="payment.php?id=<?php echo $id ?>" method="POST" style="font-weight: bold;">
						<div class="form-group">
							<label for="cardNumber">Card Number</label>
							<input type="number" name="cardNumber" class="form-control" id="cardNumber" placeholder="Enter card number">
						</div>
						<div class="row mt-3">
							<div class="form-group col-md-6">
								<label for="expiryDate">Expiry Date</label>
								<input type="date" class="form-control" name="expiryDate" id="expiryDate" placeholder="MM/YY">
							</div>
							<div class="form-group col-md-6">
								<label for="cvv">CVV</label>
								<input type="number" class="form-control" name="cvv" id="cvv" placeholder="Enter CVV">
							</div>
						</div>
						<div class="form-group mt-3">
							<label for="nameOnCard">Name on Card</label>
							<input type="text" class="form-control" name="nameOnCard" id="nameOnCard" placeholder="Enter name on card">
						</div>
						<div class="form-group mt-3">
							<label for="amount">Amount</label>
							<input type="number" class="form-control" name="amount" id="amount" placeholder="Enter amount">
						</div>
						<div class="d-grid col-6 mt-3 mx-auto">
							<button type="submit" name="paynow" class="btn btn-danger btn-block" style="background-color: #ED0A0A;">Pay Now</button>

						</div>
					</form>
				</div>
			</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>