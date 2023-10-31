<?php include 'connection.php' ?>


<?php
    $empty_name  = $empty_email = $empty_password = '';
if(isset($_POST['submit'])){
    $role_name = $_POST['role_name'];
   
    if(empty($role_name)){
        $empty_name = 'fill up the field';
    }
    

    if(!empty($role_name)){
        $query = "INSERT INTO `roles`(`role_name`) VALUES ('$role_name')";
        $result = mysqli_query($connect, $query);
        if($result){
            header('location:user_manage.php');
        }
    }


    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
$query = "SELECT * FROM `users`";
$result = mysqli_query($connect, $query);
?>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form action="" method="post" >
                    <div class="mb-1">
                                <label class="form-label">Role Create</label>
                                <input type="text" class="form-control" name="role_name">
                                                    
                            </div>
                            <div >
                                <button class="btn btn-outline-success" name="submit">Create</button>
                            </div>
                    </div>
                </form>
            <div class="col-md-9"></div>
        </div>
    </div>
</section>
<section class="py-3">
        <div class="container">
            <div class="row">
                <h4>Users List</h4>
                <div class="col-md-12 mx-auto">
                    <form >
                        <table class="table">
                            <thead class="thead-primary bg-success">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>                                    
                                    <th>Edit</th>                                    
                                </tr>
                            </thead>

                            <?php
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $role = $row['role']; 
                            ?>

                            <tbody class="bg-light shadow">
                                <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $name?></td>
                                    <td><?php echo $email?></td>
                                    <td><?php echo $role?></td>  
                                                                      
                                                                       
                                    <td><!-- Assuming you have a form to submit the data -->
                                        <form method="post" action="submit.php">
                                            <input type="hidden" name="user_id" value="<?php echo $id ?>">
                                            <select class="form-select" name="user_role" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <?php
                                                // Assuming you have a database connection established
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "assignment";

                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // Retrieve roles from the role table
                                                $sql = "SELECT role_name FROM roles";
                                                $result = $conn->query($sql);

                                                // Display the roles in the dropdown
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row['role_name'] . '">' . $row['role_name'] . '</option>';
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }

                                                $conn->close();
                                                ?>
                                            </select>
                                            <button type="submit">Submit</button>
                                        </form>

                                    </td>
                                    
                                   <td> <a href="user_manage.php?delete_id=<?php echo $id ?>">DELETE</a></td>                                    
                                </tr>
                            </tbody>

                            <?php
                                }
                            ?>
                            
                        </table>
                    </form>
                </div>
            </div>
        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

