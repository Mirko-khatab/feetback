<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Lecture</title>
</head>

<body>
    <div class="container">
        <?php include "./config.php"; ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand"> <img src="../img/logo.png" alt="shfta" width="111px" height="98px"></a>
           <a href='../../index.php' class='btn btn-danger'>singout</a>
            </div>
        </nav>

     

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
         <?php
                $query = mysqli_query($db, "SELECT * from mamosta");
                while($row=mysqli_fetch_assoc($query)){
         ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../uploads/<?php echo $row['img'] ?>" class="card-img-top" alt="mamosta wria">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['playzansty'] ?></p>
                        <a href="./question.php" class="btn btn-primary">question</a>
                    </div>
                </div>
            </div>

<?php } ?>

        </div>





    </div>


</body>

</html>