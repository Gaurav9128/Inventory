<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ample");

if (isset($_POST['save_multiple_data'])) {
    
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $purchase_date = $_POST['purchase_date'];
    $supplier_name = $_POST['supplier_name'];
    $prev_quantity = $_POST['prev_quantity'];
    $purchase_quantity = $_POST['purchase_quantity'];

    foreach ($product_id as $index => $product_id) {
        $s_product_id = $product_id[$index];
        $s_product_name = $product_name[$index];
        $s_purchase_date = $purchase_date[$index];
        $s_supplier_name = $supplier_name[$index];
        $s_prev_quantity = $prev_quantity[$index];
        $s_purchase_quantity = $purchase_quantity[$index];

        echo "name is : " . $product_id;
        echo "Product name is:" .  $product_name;
        echo " n is:" .$purchase_date;

        // $query = "INSERT INTO sample (product_id, product_name, purchase_date, supplier_name, prev_quantity, purchase_quantity) VALUES ('$s_product_id', '$s_product_name', '$s_purchase_date', '$s_supplier_name', '$s_prev_quantity', '$s_purchase_quantity')";
        // $query_run = mysqli_query($con, $query);
    }

    // if ($query_run) {
    //     $_SESSION['status'] = "Multiple Data Inserted Successfully";
    //     header("Location: insert-multiple-data.php");
    //     exit(0);
    // } else {
    //     $_SESSION['status'] = "Data Not Inserted";
    //     header("Location: insert-multiple-data.php");
    //     exit(0);
    // }
}
?>
