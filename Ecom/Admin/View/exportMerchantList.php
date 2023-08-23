<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export_type']) && $_POST['export_type'] === 'Merchant List') {
    include "../Controller/merchantListController.php";

    $filename = 'merchant_list.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . $filename);

    $output = fopen('php://output', 'w');

    // Write CSV header
    fputcsv($output, ['Merchant Name', 'Email', 'Plan', 'Create Date']);

    // Write data rows
    foreach ($paginatedData as $merchantListDetail) {
        $row = [
            $merchantListDetail["m_name"],
            $merchantListDetail["email"],
            $merchantListDetail["plan_name"],
            $merchantListDetail["create_date"]
        ];
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
}
