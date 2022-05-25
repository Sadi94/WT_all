<?php
	include "header(user).php";
    
    
?>
<div style="background-color: whitesmoke; color:black" class="main-content" align="center">
<table class="table table-striped">
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <?php
                    foreach($results as $row)
                    {
                        echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            // echo "<td><a href='item.php?id=".$row['id']."'>".$row["id"]."<a></td>";
                            echo "<td><a href='item.php?id=".$row['id']."'>".$row["name"]."<a></td>";
                            // echo "<td><a href='item.php?id=".$row['id']."'>".$row["category"]."<a></td>";
                            // echo "<td><a href='item.php?id=".$row['id']."'>".$row["price"]."<a></td>";
                            // echo "<td><a href='item.php?id=".$row['id']."'>".$row["qty"]."<a></td>";
                            // echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["category"]."</td>";
                            echo "<td>".$row["price"]."</td>";
                            echo "<td>".$row["qty"]."</td>";
                        echo "</tr>";
                    }
                ?>
        </table>
</div>