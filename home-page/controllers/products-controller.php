<?php

class ProductsController{

    static public function ctrBulkUploadProducts($fileProducts){

        $response = ProductsModel::mdlBulkUploadProducts($fileProducts);

        return $response;

    }

}