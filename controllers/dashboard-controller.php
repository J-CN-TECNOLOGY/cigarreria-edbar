<?php

class DashboardController{

    static public function ctrGetDataDashboard(){

        $data = DashboardModel::mdlGetDataDashboard();

        return $data;

    }

}

?>