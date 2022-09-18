<?php

include "db/db.php";


function menu(){
    global $db;
    $sql= "SELECT COUNT(*) FROM menucard";
    $stmt= $db->query($sql);
    $card= $stmt->fetch();
    $iteam= array_shift($card);
    return $iteam;
}










?>