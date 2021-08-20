<!DOCTYPE html>
<html>
<head>
	<title>BASIC BANKING SYSTEM</title>
	<link rel="stylesheet" href="css/style2.css">
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
	<h1>Customer Details</h1>
	<?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
  <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm">
                        <thead style="color : #C0b283; background-color: #373737;">
                            <tr>
                                <th scope="col" class="text-center py-2">S.No.</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>
                                    </td>
                                    <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button class="btn" style="background-color: #373737; color: #C0b283;;">Transact</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
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
