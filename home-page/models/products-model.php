<?php

require_once "connection.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductsModel
{

    static public function mdlBulkUploadProducts($fileProducts)
    {

        $nameFile = $fileProducts['tmp_name'];

        $document = IOFactory::load($nameFile);

        $sheetCategories = $document->getSheet(1);
        
        $numberRowsCategories = $sheetCategories->getHighestDataRow();

        $categoriesRegistered = 0;

        for ($i = 2; $i <= $numberRowsCategories; $i++) {

            $categoria = $sheetCategories->getCellByColumnAndRow(1, $i);
            $aplica_peso = $sheetCategories->getCellByColumnAndRow(2, $i);
            $fecha_actualizacion = date("Y-m-d");

            if (!empty($categoria)) {
                $stmt = Connection::connect()->prepare("INSERT INTO categorias(nombre_categoria, 
                                                                                aplica_peso, 
                                                                                fecha_actualizacion_categoria)
                                                                    values(:nombre_categoria, 
                                                                            :aplica_peso, 
                                                                            :fecha_actualizacion_categoria);");

                $stmt->bindParam(":nombre_categoria", $categoria, PDO::PARAM_STR);
                $stmt->bindParam(":aplica_peso", $aplica_peso, PDO::PARAM_STR);
                $stmt->bindParam(":fecha_actualizacion_categoria", $fecha_actualizacion, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    $categoriesRegistered = $categoriesRegistered + 1;
                } else {
                    $categoriesRegistered = 0;
                }
            }
            return $categoriesRegistered;
        }
    }
}
