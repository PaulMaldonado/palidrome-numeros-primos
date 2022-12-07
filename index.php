<?php 
    $number = $_POST['number'];
    $counterIsPrime = 0;
    
    for($counter = 1; $counter <= $number; $counter++){
        if($number % $counter === 0) {
            $counterIsPrime = $counterIsPrime + 1;
        }
    }
    
    if($number == 1 || $counterIsPrime == 2) {
        echo "El número ".$number." Es primo";
    } else {
        echo "El número ".$number." No es primo";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
                <div class="card shadow-lg">
                    <h2 class="text-center p-2 text-dark">Ingresa una número</h2>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="form-group">
                                        <label>Ingresa un número: </label>
                                        <input type="text" placeholder="Ingresa un número..." class="form-control" name="number">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Envíar" class="btn btn-dark mt-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>