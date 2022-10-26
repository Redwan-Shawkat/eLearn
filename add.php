<?php
include_once './auth_user.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TODO - login</title>
    <style>
        input {
            width: 40%;
            height: 50px;
        }
    </style>
</head>

<body>
    
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
        
        <div>
        <button type="button" class="btn btn-danger btn-lg float-end"><a href="./logout.php" style="color:white; text-decoration:none">Logout</a></button>
        </div>

        <div>
            <h1 class="text-center">
                Add Task Form
            </h1>
            <form method="POST" action="./add_task.php">
                <div class="mb-3 ">
                    <label for="title" class="form-label">Tasks</label>
                    <textarea id="exampleInputText1" name="title" rows="4" cols="100"> </textarea>
                    
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Last Time</label>
                    <input type="date" class="form-control" id="exampleInputText1" name="time">
                </div>
                <input type="hidden" name="action" value="add">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Add To Todo List?')">Add Tasks</button>

            </form>
        </div>    
       
    </div>   
</body>

</html>