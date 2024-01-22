<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">

                <?php
                    if(isset($_GET['auth']) && $_GET['auth'] == 0 )
                ?>
                    <div class="alert alert-danger mb-3" role="alert">
                        Username atau Password SALAH!
                    </div>
                <?php

                ?>

                <div class="card">
                    <div class="card-header text-center">
                        LOGIN
                    </div>
                    <div class="card-body">
                        <form action="proses-login.php" method="post">
                            <div class="mb-3">
                                <input type="text" name="username" id="" placeholder="Input Username"class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" id="" placeholder="Input Password"class="form-control">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>