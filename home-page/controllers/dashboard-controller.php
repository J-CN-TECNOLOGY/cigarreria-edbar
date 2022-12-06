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

    static public function ctrBestSellingProducts()
    {
        $bestSellingProducts = DashboardModel::mdlBestSellingProducts();
        return $bestSellingProducts;
    }

    static public function ctrLowStockProducts()
    {
        $lowStockProducts = DashboardModel::mdlLowStockProducts();
        return $lowStockProducts;
    }
}