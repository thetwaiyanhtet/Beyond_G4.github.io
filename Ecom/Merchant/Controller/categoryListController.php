<?php
include "../Model/model.php";

$sql = $pdo->prepare(
   "SELECT * 
    FROM m_admin_category;"
);

$sql->execute();
$categories = $sql->fetchAll(PDO::FETCH_ASSOC);

// $subSql = $pdo->prepare(
//   "SELECT *
//   FROM t_sub_category
//   JOIN m_admin_category
//   ON m_admin_category.id = t_sub_category.category_id;"
// );

// $subSql->execute();
// $subCategories = $subSql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($categories);
// print_r($subCategories);
// echo "</pre>";
