<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Donations</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-striped">
                        <?php
                        $id=0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT U.name,U.contact,U.address,E.amount,E.Date FROM users U,earn E WHERE E.NGOId='$user_id' and E.UserId=U.Id";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Donor</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    $id.= 1;
                                    echo "<tr><td>".$row['name']."</td><td>" .$row['contact']. "</td><td>" .$row['address']. "</td><td> Rs.".$row['amount']."</td><td>".$row['Date']."</td></tr>";
                                }
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "You haven't received any donations yet";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
