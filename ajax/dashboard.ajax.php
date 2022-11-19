<?php

require_once "../controllers/dashboard-controller.php";
require_once "../models/dashborad-model.php";

class AjaxDashboard{

    public function getDataDashboard(){
        
        $data = DashboardController::ctrgetDataDashboard();

        echo json_encode($data);
    }

}

$data = new AjaxDashboard();
$data -> getDataDashboard();