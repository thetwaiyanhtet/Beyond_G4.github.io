<?php

session_start();

// Check if the session variable is set
if (isset($_SESSION["m_category"])) {
    $result = $_SESSION["m_category"];
} 

?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export_type']) && $_POST['export_type'] === 'Category List') {
  
    include "../Controller/categoryListController.php"; 

    $filename = 'category_list.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . $filename);

    $output = fopen('php://output', 'w');

    // Write CSV header
    $header = array("Category Name", "Sub-Category Name", "Create Date");
    fputcsv($output, $header);

    // Iterate through data and write CSV rows
    foreach ($result as $category) {
        $row = array(
            $category["c_name"],
            $category["sub_category_names"],
            $category["create_date"]
        );
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
}
?>
