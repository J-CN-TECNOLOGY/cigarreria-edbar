<?php

class DashboardController
{

    static public function ctrGetDataDashboard()
    {

        $data = DashboardModel::mdlGetDataDashboard();

        return $data;
    }

    static public function ctrGetSalesCurrentMonth()
    {

        $salesCurrentMonth = DashboardModel::mdlGetSalesCurrentMonth();

        return $salesCurrentMonth;
    }
}
