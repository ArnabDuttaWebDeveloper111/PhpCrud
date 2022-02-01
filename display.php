

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class ="text-center text-warning">Display Table Data</h1>
            <table class="table table-striped table-hover table-bordred">

                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>

                <?php

include('connection.php');

    

    $q="SELECT * FROM crud";

    $query=mysqli_query($conn,$q);

    while($res=mysqli_fetch_array($query)){




?>

                <tr class="text-center">
                <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['username'];?></td>
                    <td><?php echo $res['password'];?></td>
                    <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
                    <td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</a></button></td>

                </tr>
            <?php
    }
            ?>
            </table>
        </div>
    </div>
    
</body>
</html>