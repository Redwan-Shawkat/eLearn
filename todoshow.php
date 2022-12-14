<?php
include_once './config.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM `addtodo`";
$resultQuery = mysqli_query($connection, $query);
// include_once './auth_user.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
</head>

<body>
    <div>
        

        <button type="button" class="btn btn-danger btn-lg float-end"><a href="./logout.php" style="color:white; text-decoration:none">Logout</a></button>
        
    </div>

    <div class="mx-auto" style="width: 80vw;">

        <h1 class="text-center">Todo List</h1>
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tasks</th>
                    <th scope="col">Last time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                ?>
                <?php
                while ($data = mysqli_fetch_assoc($resultQuery)) { ?>
                    <tr>
                        <th scope="row"><?php echo $data['id'] ?></th>
                        <td><?php echo $data['title'] ?></td>
                        <td><?php echo $data['date'] ?></td>
                        <td>
                            <a class="link" href='./add.php' style='text-decoration: none; color:blue'>Add</a>
                            <a class="link" href='./update.php?id=<?php echo $data['id'] ?>' style='text-decoration: none; color: seagreen'>Edit</a>
                            <a class="link" href='./delete.php?id=<?php echo $data['id'] ?>' onclick="return confirm('Delete Todo From List?')" style='text-decoration: none; color:red'>Delete</a>
                            <a class="link" href='./reply.php?id=<?php echo $data['id'] ?>' style='text-decoration: none; color: seagreen'> Reply </a>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

</body>
</html>