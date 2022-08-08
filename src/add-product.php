<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" >
</head>
<body>
<?php require_once "process.php"; ?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-6">
        <h1>Product Add</h1>
        </div>
        <div class="col-4 text-center">
            
<!-- Form Start -->
        <form action="process.php" method="POST" id="product_form">

        <button class="btn btn-primary" id="submit_data"  name="save" >Save</button>    
        <a href="index.php" ><button class="mg-left btn btn-danger" name="cancel">Cancel</button></a>    
        </div>
        <div class="row py-3 my-4 border-top">
        <div class="col-4">
            <!-- SKU -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">SKU</span>
            <input type="text" name="SKU" class="form-control" id="basic-url" aria-describedby="basic-addon3" require>
            </div>
            <!-- Name -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Name</span>
            <input type="text" name="Name" class="form-control" id="basic-url" aria-describedby="basic-addon3" require>
            </div>
            <!-- Price -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Price ($)</span>
            <input type="text" name="Price" class="form-control" id="basic-url" aria-describedby="basic-addon3" require>
            </div>

            <!-- Dropdown -->
            <div class="dropdown">
            <select id="selectCategory" name="Category" class="form-select" style="width: 10rem" require>
                <label for="selectCategory">Type Switcher</label>
            <option disabled selected>Select Type</option>
                <option value="DVD">DVD</option>
                <option value="BOOK">Book</option>
                <option value="FURNITURE">Furniture</option>
            </select>
            </div>           

            <!-- Dropdown -->


            <!-- DVD form -->
            <div id="DVD" class="hidden formShownBySelect">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Size (MB) </span>
            <input type="text" class="form-control" name="Size" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <p>"Products Description"</p>
            </div>

            <!-- Furniture form -->
            <div id="FURNITURE" class="hidden formShownBySelect">
                <label class="mb-3">Height X  Width X Length (CM)</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3"> Dimension (CM) </span>
            <input type="text" class="form-control" name="Dimension" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <p>"Products Description"</p>
            </div>

            <!-- Book Form -->
            <div id="BOOK" class="hidden formShownBySelect" >
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Weight (KG) </span>
            <input type="text" class="form-control" name="Weight" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <p>"Products Description"</p>
            </div>

        </form>
<!-- Form End -->

        </div>
            <!-- col end -->

        </div>

    </div>

    <footer class="py-3 my-4 border-top">
    <p class="text-center text-muted"><b>Scandiweb Test Assigment</b></p>
  </footer>
</div>
<script>
    $("#selectCategory").on("change", function () {
  $(".formShownBySelect").hide();
  $("#" + $(this).val()).show();
});

</script>
    
</body>

</html>