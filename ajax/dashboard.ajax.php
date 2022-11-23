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
}
    
if (isset($_POST['action']) && $_POST['action'] == 1) {

    $salesCurrentMonth = new AjaxDashboard();
    $salesCurrentMonth->getSalesCurrentMonth();
} else {
    $data = new AjaxDashboard();
    $data->getDataDashboard();
}
