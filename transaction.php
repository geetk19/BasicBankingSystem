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
    <h1>Transaction History</h1>
           <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : #C0b283; background-color: #373737;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'connect.php';

$sql ="SELECT * FROM transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

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