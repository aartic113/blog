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
            <?php foreach($query as $q) {?>
                <form action="" method="post">
                    <input type="text" hidden name="id" value="<?php echo $q["id"]?>">
                    <input type="text" placeholder="enter title" name="title" value="<?php echo $q["title"]?>"
                    class="form-control bg-dark text-white text-center my-3">
                    <textarea name="content" cols=30 rows=10 class="form-control bg-dark text-white my-3"><?php echo $q["content"]?></textarea>
                    <button name="update" class="btn btn-dark">Update</button>

                </form>
            <?php }?>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>