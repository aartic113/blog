<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($_REQUEST["info"])) {?>
            <?php if ($_REQUEST["info"] == "added") {?>
                <div class="alert alert-success">
                Post has been added.
                </div>
            
            <?php } else if ($_REQUEST["info"] == "updated") {?> 
                <div class="alert alert-success">
                    Post has been updated.
                    </div>

            <?php } else if ($_REQUEST["info"] == "deleted") {?> 
                <div class="alert alert-danger">
                    Post has been deleted.
                    </div>
        
            <?php }?>
        <?php }?>
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">Create a post</a>
        </div>
        <div class="row">
            <?php foreach($query as $q) {?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width: 24rem;">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>

                    </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>