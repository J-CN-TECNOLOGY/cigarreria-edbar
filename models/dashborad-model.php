<?php
require_once "connection.php";
class DashboardModel
{

    static public function mdlGetDataDashboard()
    {

        $stmt = connection::connect()->prepare('call prc_ObtainDashboardData()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetSalesCurrentMonth()
    {
        $stmt = connection::connect()->prepare('call prc_ObtainCurrentMonthSales');
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
