<?php
    include("../connect.php");

    $party = $_POST['party'];
    $party_id = $_POST['partyid'];
    $inv_no = $_POST['inv_no'];
    $amount = $_POST['amount'];
    
    // echo $party;
    // echo $party_id;
    // echo $inv_no;
    // echo $amount;
    // echo $tax;

    $sql_add = "INSERT INTO `data_1` (`party_name`, `party_id`, `inv_no`,`amount`) VALUES ('$party','$party_id','$inv_no','$amount')";
    
    mysqli_query($connect_userdb, $sql_add);
    
    
    // $row = $result->fetch_assoc();
    // echo "name " . $row["party_name"]. "  id " . $row["party_id"]. " invno " . $row["inv_no"]. " amount " . $row['amount'];
        
    header("location: ../../home.php?username = 'a' data_added = true");
    $connect_userdb->close();
?>