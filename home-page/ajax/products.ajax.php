<?php
require_once "../controllers/products-controller.php";
require_once "../models/products-model.php";
require_once "../vendor/autoload.php";

class ajaxProducts{

    public $fileProducts;

    public function ajaxBulkUploadProducts(){

        $response = ProductsController::ctrBulkUploadProducts($this -> fileProducts);

        echo json_encode($response);

    }

}

if(isset($_FILES)){
    $product_files = new ajaxProducts();
    $product_files -> fileProducts = $_FILES['fileProducts'];
    $product_files -> ajaxBulkUploadProducts();
}