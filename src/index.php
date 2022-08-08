<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" >
</head>
<body>

<?php include_once 'db.php' ?>

<?php 


$result = $mysqli->query("SELECT * FROM products_list order by SKU")

?>

<div class="container-fluid ">
<form action="delete_data.php" method="POST" >
    <div class="row">
      <?php 
      if(isset($_SESSION['status'])){
        echo "<h1>".$_SESSION['status']."</h1>";
        unset($_SESSION['status']);
      }
      ?>
        <div class="col-6">
        <h1>Product List</h1>
        </div>

        <div class="col-4 text-center">
        <a class="btn btn-primary" href="add-product.php">Add Products</a>   
        <button id="delete-product-btn" name="delete_products_btn" type="submit" class="mg-left btn btn-warning" >Mass Delete</button>        
        </div>
    <!-- row end -->
    </div>

    

    <div class="row py-3  border-top center-item">

            <?php while($row = $result->fetch_assoc()): ?>

                <?php if($row['Category'] == 'DVD'){ ?>
             <!-- Card Start -->
            <div class="card text-center my-4" style="width: 20rem; margin: 0 1.5rem"> 
              <!-- checkbox -->
                <div class="form-check">
                <input class="delete-checkbox form-check-input" name="prod_delete_id[]" type="checkbox" value="<?= $row['ID']; ?>" >
                </div>
                 <h5 class="card-title"><?php echo $row['SKU'] ?></h5>
                <h6 class="card-title mb-2 "><?php echo $row['Name'] ?></h6>
                <h6 class="card-title mb-2 "><?php echo $row['Price'], " $" ?></h6>
                <h6 class="card-title mb-2 "><?php echo "Size: ", $row['Size'] , " MB" ?></h6>
                <div class="my-4"></div>
            </div>
            <?php } ?>

            <?php if($row['Category'] == 'FURNITURE'){ ?>
             <!-- Card Start -->
            <div class="card text-center my-4" style="width: 20rem; margin: 0 1.5rem"> 
              <!-- checkbox -->
                <div class="form-check">
                <input class=" delete-checkbox form-check-input" name="prod_delete_id[]" type="checkbox" value="<?= $row['ID']; ?>" id="flexCheckDefault">
                </div>
               
                <h5 class="card-title"><?php echo $row['SKU'] ?></h5>
                <h6 class="card-title mb-2 "><?php echo $row['Name'] ?></h6>
                <h6 class="card-title mb-2 "><?php echo $row['Price'], " $" ?></h6>
                <h6 class="card-title mb-2 "><?php echo "Dimension: ", $row['Size'] ?></h6>
                <div class="my-4"></div>
            </div>
            <?php } ?>

            <?php if($row['Category'] == 'BOOK'){ ?>
             <!-- Card Start -->
            <div class="card text-center my-4" style="width: 20rem; margin: 0 1.5rem"> 
              <!-- checkbox -->
                <div class="form-check">
                <input class="delete-checkbox form-check-input" name="prod_delete_id[]" type="checkbox" value="<?= $row['ID']; ?>" id="flexCheckDefault">
                </div>
               
                <h5 class="card-title"><?php echo $row['SKU'] ?></h5>
                <h6 class="card-title mb-2 "><?php echo $row['Name'] ?></h6>
                <h6 class="card-title mb-2 "><?php echo $row['Price'], " $" ?></h6>
                <h6 class="card-title mb-2 "><?php echo "Weight: ", $row['Size'] , " KG"?></h6>
                <div class="my-4"></div>
            </div>
            <?php } ?>
            <?php endwhile ?>
                 <!-- Card End -->
                
            

    <!-- row end -->
    </div>

    </form>
    <footer class="py-3 my-4 border-top">
    <p class="text-center text-muted"><b>Scandiweb Test Assigment</b></p>
  </footer>
</div>
    
    
</body>
</html>