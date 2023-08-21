<?php
//Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {

    $id = $_POST["id"];
    $cname = $_POST["cname"];
    $scname = $_POST["scname"];
    $cdescription = $_POST["cdescription"];


    include "../Model/model.php";

    $sql = $pdo->prepare(
        "UPDATE m_admin_category SET
        c_name=:cname,
        description=:cdescription
    
        WHERE id=:id;
    "
    );
    $sql->bindValue(":cname", $cname);
    $sql->bindValue(":cdescription", $cdescription);
    $sql->bindValue(":id", $id);
    $sql->execute();

//     $sql = $pdo->prepare("
//     UPDATE t_sub_category
//     JOIN m_admin_category ON t_sub_category.category_id = m_admin_category.id 
//     SET t_sub_category.s_c_name = :scname
//     WHERE m_admin_category.id = :id
// ");
//     $sql->bindValue(":scname", $scname);
//     $sql->bindValue(":id", $id);
//     $sql->execute();


    header("Location: ../View/categorylist.php ");
}
