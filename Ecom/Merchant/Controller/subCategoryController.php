<?php
include "../Model/model.php";

if (isset($_POST['category_id'])) {
    $categoryId = $_POST['category_id'];

    $subSql = $pdo->prepare(
        "SELECT *
        FROM t_sub_category
        WHERE category_id = :category_id"
    );

    $subSql->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
    $subSql->execute();
    $subCategories = $subSql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($subCategories);
} else {
    echo json_encode([]);
}
