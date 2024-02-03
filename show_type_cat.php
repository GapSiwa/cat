<?php
require 'connectdb.php';

$sql = "SELECT * FROM cats";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show_type_cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-7"> 
       <?php foreach($result as $row) { ?>
            <div class="card mb-3" style="max-width: 1900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $row['img_file']; ?>" alt="<?php echo $row['cat_type']; ?>" style="max-width: 100%; ">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['cat_type']; ?></h5>
                            <p class="card-text"><?php echo $row['detail1']; ?></p>
                            <p class="card-text"><?php echo $row['detail2']; ?></p>
                            <p class="card-text"><?php echo $row['detail3']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
       <?php } ?>
   </div>
</body>
</html>
