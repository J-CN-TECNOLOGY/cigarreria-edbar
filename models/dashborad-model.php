<?php

class DashboardModel{
    
    static public function mdlGetDataDashboard(){

        $stmt = connection::connect()->prepare('call prc_ObtainDashboardData()');

        $stmt->execute();

        return $stmt->fetchAll(); 
    }

}

?>