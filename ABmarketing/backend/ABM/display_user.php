<?php
    include("../connect.php");

    $request = $_GET['username'];


    $query = "SELECT `date`, `Particulars`,`Vch Type` ,`Vch No.`, `Debit Amount`, `Credit Amount` FROM `abm_new` WHERE `Particulars` = '$request'";

    $result = $connect_userdb->query($query);

    //$row = $result -> fetch_assoc();

    
    echo "<table> "; // start a table tag in the HTML
    echo "<tr><td>" . " DATE  " ."\t"."\t"."\t"."\t". "</td><td>" ." PARTY \t" ."\t". "</td>". "</td><td>" . " VCH NO " ."\t". "</td>" . "</td><td>" . "VCH TYPE " ."\t". "</td>" . "</td><td>" . " CREDIT AMOUNT "."\t"."\t" . "</td>" . "</td><td>" . "DEBIT AMOUNT " ."\t"."\t". "</td></tr> ";
    
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['date'] ."\t". "</td><td>" . htmlspecialchars($row['Particulars']) . "</td>". "</td><td>" .  htmlspecialchars($row['Vch No.']) . "</td>" . "</td><td>" . htmlspecialchars($row['Vch Type']) . "</td>" . "</td>" . "</td><td>" . htmlspecialchars($row['Credit Amount']) . "</td>" . "</td><td>" . htmlspecialchars($row['Debit Amount']) . "</td></tr>";  //$row['index'] the index here is a field name
    // echo "   Party  :  ".$row['Particulars'] ."<br>";
    // echo "   date  : ". $row['date'] ."<br>";
    // echo "   vch no  : ".$row['Vch No.']. "<br>";
    // echo "   vch type  :   ".$row['Vch No.']. "<br>";
    // echo "   credit amount  : " . $row['Credit Amount'] ."<br>"; 
    // echo "   debit amount  : " . $row['Debit Amount'] ."<br>" ."<hr>";

    }

    echo "</table>";
    echo "<hr>";
    //echo "  name  " . "  id  " . "  invno  " ."  amount  <br>"."  ". $row["party_name"]."  ". $row["party_id"] ."  ". $row["inv_no"] ."  ". $row['amount'];
    
    $connect_userdb -> close();
?>