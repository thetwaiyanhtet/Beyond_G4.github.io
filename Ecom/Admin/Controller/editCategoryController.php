<?php
session_start();
$category=$_GET["id"];
//  print_r($category);


if(!isset($category)){
    header("Location: ../View/errors/error.php");
}else{
    include "../Model/model.php";
    $sql=$pdo->prepare(
        "SELECT m_admin_category.id,m_admin_category.c_name,m_admin_category.description,
        GROUP_CONCAT(COALESCE(t_sub_category.s_c_name, '')) AS sub_category_names
         FROM m_admin_category
        JOIN t_sub_category ON t_sub_category.category_id = m_admin_category.id 
        WHERE m_admin_category.id=:id;"
        );
        $sql->bindValue(":id",$category);
        $sql->execute();

        $_SESSION["editcategory"]= $sql->fetchAll(PDO::FETCH_ASSOC);
        
        header("Location: ../View/editCategorylist.php");
    
}
