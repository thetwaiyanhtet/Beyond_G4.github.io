<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export_type']) && $_POST['export_type'] === 'Sale Report') {
    include "../Controller/salereportController.php";

    $filename = 'sale_report.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . $filename);

    $output = fopen('php://output', 'w');

    // Write CSV header
    $header = array("No", "Product name", "Code", "Category", "Buying Price", "Selling Price", "Quantity Sold", "Total Price", "Date");
    fputcsv($output, $header);

    // Iterate through data and write CSV rows
    foreach ($paginatedData as $key => $value) {
        $total = $value['quantity'] * $value['sellprice'];
        $row = array(
            ++$key,
            $value['name'],
            $value['code'],
            $value['c_name'],
            $value['buyprice'] . ' Ks',
            $value['sellprice'] . ' Ks',
            $value['quantity'],
            $total . ' Ks',
            '07/24/2023' 
        );
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
}
