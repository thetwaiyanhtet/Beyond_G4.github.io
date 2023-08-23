<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export_type']) && $_POST['export_type'] === 'Order List') {
    include "../Controller/orderlistController.php"; 

    $filename = 'order_list.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . $filename);

    $output = fopen('php://output', 'w');

    // Write CSV header
    $header = array("Order ID", "Store Name", "Customer Name", "Address", "Amount", "Date");
    fputcsv($output, $header);

    // Iterate through data and write CSV rows
    foreach ($paginatedData as $result) {
        $address = $result['r_name'] . $result['t_name'] . ', ' . $result['street'];
        $row = array(
            $result['generate_id'],
            $result['store_name'],
            $result["username"],
            $address,
            $result['total_amt'] . " Ks",
            $result['order_date']
        );
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
}
