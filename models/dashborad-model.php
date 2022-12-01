<?php
require_once "connection.php";
class DashboardModel
{

    static public function mdlGetDataDashboard()
    {

        $stmt = Connection::connect()->prepare('call prc_ObtainDashboardData()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetSalesCurrentMonth()
    {
        $stmt = Connection::connect()->prepare('call prc_ObtainCurrentMonthSales');
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
