<?php
    include("../connect.php");

    $request = $_POST['query_party_name'];
    $query = "SELECT `date`, `Particulars`, `Vch No.`, `Debit Amount`, `Credit Amount` FROM `abm_new` WHERE `Vch No.` = '$request'";

    $result = $connect_userdb->query($query);

    //$row = $result -> fetch_assoc();

    echo "<table>"; // start a table tag in the HTML
    
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    // echo "<tr><td>" . htmlspecialchars($row['inv_no']) . "</td><td>" . htmlspecialchars($row['party_name']) . "</td></tr>";  //$row['index'] the index here is a field name
    echo "   invno   ".$row['Particulars'] ."<br>";
    echo "   date   ". $row['date'] ."<br>";
    echo "   vch no   ".$row['Vch No.']. "<br>";
    echo "   credit amount   " . $row['Credit Amount'] ."<br>"; 
    echo "   debit amount   " . $row['Debit Amount'] ."<br>" ."<hr>";
    }

    echo "</table>";
    //echo "  name  " . "  id  " . "  invno  " ."  amount  <br>"."  ". $row["party_name"]."  ". $row["party_id"] ."  ". $row["inv_no"] ."  ". $row['amount'];
    
    $connect_userdb -> close();
?>