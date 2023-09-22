<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./images/logo-full.png">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                include ('./CodeSan/sidebar.php');
            ?>
            <div class="col-md-9 pt-3 px-4">
                <?php
                    include ('./CodeSan/maincontent.php');
                ?>
                <div class="main-content py-3">
                    <h3 class="text-center">Add a new user</h3>
                    <form action="">
                        <div class="form-group my-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="form-group my-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-success ">Add</button>

                    </form>
                </div>
            </div>
            <div class="col-md-1 my-4 bg-white rounded-start-5">
                
            </div>
        </div>

    </div>
</body>
</html>