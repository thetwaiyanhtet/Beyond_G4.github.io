<?php
include  "../Model/model.php";
try {
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    
        $storeSQL = $pdo->prepare("SELECT * FROM m_merchant WHERE id=:id");
        $storeSQL -> bindValue(":id",$id);
        $storeSQL->execute();
        $storeData = $storeSQL->fetchAll(PDO::FETCH_ASSOC);
        
        $AllProductSql = $pdo->prepare(
            "SELECT m_product.id,m_product.name, m_product.description, m_product.sellprice, m_product.p_one
            FROM m_product
            WHERE m_product.merchant_id =:id"
        );
        $AllProductSql->bindValue(":id",$id);
        $AllProductSql->execute();
        $AllProducts = $AllProductSql->fetchAll(PDO::FETCH_ASSOC);
    
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>