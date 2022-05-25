<?php
    require_once 'Controller/EmployeeController.php';
    $key = $_GET["key"];
    $employees = searchEmployee($key);
    foreach($employees as $employee){
        echo "<a href='EditEmployee.php?id=".$employee["id"]."'>".$employee["employee"]."</a><br>";
    }
?>