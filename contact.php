
<!DOCTYPE html>
<html>
<head>
	<title>BASIC BANKING SYSTEM</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Actor|Lobster|Patua+One&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/all.min.js"></script>
</head>
<body>
	<nav id="navbar">
		<div class="logo">
		    <a href="" class="logo-link"><img src="img/logo1.png" class="logo-item"></a>
		</div>
		<ul class="nav-list">
			<li class="nav-item"><a href="index.php">Home</a></li>
		    <li class="nav-item"><a href="https://www.thesparksfoundationsingapore.org/">About</a></li>
			<li class="nav-item"><a href="contact.php">Contact Us</a></li>
		</ul>
	</nav>
	<div class="find-sec">
		<h1>Contact Us</h1>
		<div class="contact">
			<div class="left-cont">
				<img src="img/img1.jpg" style="width:100%">
			</div>
			<div class="right-cont">
				<div class="form-sec">
					<div class="form-cont">
						<form method="post" action="feed.php">
							<input type="text" name="name" placeholder="Enter your Name" required><br>
							<input type="number" name="phone" placeholder="Enter your Number" required><br>
							<input type="email" name="email" placeholder="Enter your E-mail" required><br>
							<textarea name="message" style="height: 100px" placeholder="Enter your message" required></textarea>
							<button type="submit" value="submit" name="submit" class="btn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
<footer class="page-footer font-small teal pt-4" style="background-color: #373737">
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-md-12">
        <h5 class="font-weight-bold" style="font-size: 30px; color: #C0b283; font-family: 'Times New Roman', Times, serif, cursive;">VNB BANK</h5>
        <p>We aim to empower our customers to succeed in every aspect of their financial lives and continue improving the customer experience and providing services to customers' needs.</p>

      </div>
    </div>

  </div>
  <div class="footer-copyright text-center py-3" style="color: #C0b283;">© 2021 Copyright- Made by Geeta Kolte :
    <a href="https://www.thesparksfoundationsingapore.org/" style="text-decoration: none; color: white"> The Sparks Foundation</a>
  </div>
</footer>
</body>
</html>