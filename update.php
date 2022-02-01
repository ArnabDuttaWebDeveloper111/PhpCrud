<?php




include('connection.php');
if(isset($_POST['submit'])){
    $id=$_GET['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q="UPDATE CRUD SET id=$id, username='$username',password='$password'WHERE id=$id";

    $query=mysqli_query($conn,$q);

    if($query){
        header("location:display.php");
    }else{
        echo 'Data not inserted';
    }


}







?>









<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class='col-lg-6 m-auto'>

        <form method="post">
       <br><br> <div class="card">
        
            <div class="card-header bg-dark">
                <h1 class='text-white text-center'>Update Operation</h1>
            
            </div><br><br>

            <label> Username:</label>
            <input type="text" name="username" class="form-control"><br>

            <label> Password:</label>
            <input type="password" name="password" class="form-control"><br>
            <br><br>
            <br><br>
          
         
        
        </div>
       <br>
       <button class="btn btn-success" type="submit" name="submit">Submit</button>
        
        
        </form>
    
    
    
    
    
    </div>
</body>
</html>