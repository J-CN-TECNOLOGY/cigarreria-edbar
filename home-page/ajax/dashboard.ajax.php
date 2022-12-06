<?php

require_once "../controllers/dashboard-controller.php";
require_once "../models/dashborad-model.php";

class AjaxDashboard
{
    public function getDataDashboard()
    {
        $data = DashboardController::ctrgetDataDashboard();
        echo json_encode($data);
    }

    public function getSalesCurrentMonth()
    {
        $salesCurrentMonth = DashboardController::ctrGetSalesCurrentMonth();
        echo json_encode($salesCurrentMonth);
    }

    public function getBestSellingProducts()
    {
        $bestSellingProducts = DashboardController::ctrBestSellingProducts();
        echo json_encode($bestSellingProducts);
    }

    public function getLowStockProducts()
    {
        $lowStockProducts = DashboardController::ctrLowStockProducts();
        echo json_encode($lowStockProducts);
    }
}

if (isset($_POST['action']) && $_POST['action'] == 1) { // Run sales function of the month (bar chart)

    $salesCurrentMonth = new AjaxDashboard();
    $salesCurrentMonth->getSalesCurrentMonth();

} else if (isset($_POST['action']) && $_POST['action'] == 2) { // list top 10 best selling products

    $bestSellingProducts = new AjaxDashboard();
    $bestSellingProducts->getBestSellingProducts();

} else if (isset($_POST['action']) && $_POST['action'] == 3) { // list products with low stock

    $lowStockProducts = new AjaxDashboard();
    $lowStockProducts->getLowStockProducts();
    
} else {

    $data = new AjaxDashboard();
    $data->getDataDashboard();
}
