<?php
// session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_admin_category;"
);
$sql->execute(); //run real sql

$data=$sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["m_category"]=$data;

$subSql = $pdo->prepare(
    "SELECT t_sub_category.category_id,t_sub_category.s_c_name 
    FROM t_sub_category
     JOIN m_admin_category
      ON t_sub_category.category_id=m_admin_category.id
      ;"
);
$subSql->execute(); //run real sql

$subData=$subSql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["sub_category"]=$subData;

//DB Connection


