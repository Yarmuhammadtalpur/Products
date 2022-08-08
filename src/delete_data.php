<?php session_start();
?>
<?php include_once 'db.php' ?>
<?php 





if(isset($_POST['delete_products_btn'])){

    if(!empty($_POST['prod_delete_id'])){

        $prod_id = $_POST['prod_delete_id'];     
        $extract_id = implode(',', $prod_id );
        // echo $extract_id;

        // $mysqli->query("DELETE FROM products_list WHERE ID=$extract_id") or die("error unable to delete");
        $query = "DELETE FROM products_list WHERE ID IN($extract_id)";
        $query_run = mysqli_query($mysqli, $query);

        if($query_run){
            $_SESSION['status'] = "Data deleted Successfully";
            header("Location: /Project/");
        } else{
                $_SESSION['status'] = "Data not Deleted";
                header("Location: /Project/");
    } 
} else{
    echo "<h2>Please select a data to Delete</h2>";
}


}
