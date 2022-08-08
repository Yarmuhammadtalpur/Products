<?php include_once 'db.php' ?>

<?php 

if(isset($_POST['save'])){

    $SKU = $_POST['SKU'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Category = $_POST['Category'];

    if(!empty($SKU) && !empty($Name) && !empty($Price)&& !empty($Category) && !empty($_POST['Weight']) || !empty($_POST['Dimension']) || !empty($_POST['Size'])){
        if($Category == 'DVD'){
            $Type = $_POST['Size'];
    
         $mysqli->query("INSERT INTO products_list (SKU, Name, Price, Category, Size ) Values('$SKU','$Name', '$Price', '$Category', '$Type') ") or die("error cant save data");
        } else if($Category == 'BOOK'){
            $Type = $_POST['Weight'];
    
            $mysqli->query("INSERT INTO products_list (SKU, Name, Price, Category, Size ) Values('$SKU','$Name', '$Price', '$Category', '$Type') ") or die("error cant save data");
    
        } else if($Category == 'FURNITURE'){
            $Type = $_POST['Dimension'];
    
            $mysqli->query("INSERT INTO products_list (SKU, Name, Price, Category, Size ) Values('$SKU','$Name', '$Price', '$Category', '$Type') ") or die("error cant save data");
        }
    
        header("Location: /Project");
    } else {
        echo '<form><h1>Please Fill all Required Fields</h1><input type="button" value="Return to previous page" onClick="javascript:history.go(-1)"></form>';
    }

   

}

if(isset($_POST['cancel'])){
    header("Location: /Project");
}

?>