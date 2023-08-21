<?php
// session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_admin_category.c_name, m_admin_category.id, t_sub_category.category_id,
    GROUP_CONCAT(COALESCE(t_sub_category.s_c_name, '')) AS sub_category_names, m_admin_category.create_date
    FROM m_admin_category
    LEFT JOIN t_sub_category ON t_sub_category.category_id = m_admin_category.id
    GROUP BY m_admin_category.id;"
);
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as &$row) {
    if (empty($row['sub_category_names'])) {
        $row['sub_category_names'] = "-";
    }
}

$_SESSION["m_category"] = $data;


// $subSql = $pdo->prepare(
//     "SELECT t_sub_category.category_id, GROUP_CONCAT(t_sub_category.s_c_name) AS sub_category_names
//     FROM t_sub_category
//     JOIN m_admin_category
//     ON t_sub_category.category_id = m_admin_category.id
//     GROUP BY t_sub_category.category_id;"
// );

// $subSql->execute(); // Run the SQL query

// $subData = $subSql->fetchAll(PDO::FETCH_ASSOC);

// $_SESSION["sub_category"] = $subData;


//DB Connection


