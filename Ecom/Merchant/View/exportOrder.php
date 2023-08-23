<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export_type']) && $_POST['export_type'] === 'Order Report') {
    include "../Controller/orderreportcontroller.php";

    $filename = 'order_report.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . $filename);

    $output = fopen('php://output', 'w');

    // CSV header
    $header = array("No", "Customer name", "Payment By", "Total amount", "Order date");
    fputcsv($output, $header);

    // Iterate through data and write CSV rows
    $count = 0;
    foreach ($paginatedData as $order) {
        $totalamt = $order["quantity"] * $order["price_per_unit"];
        $paymentMethod = ($order["payment_id"] == 0) ? "Visa" : "KBZ pay";
        $row = array(
            ++$count,
            $order["username"],
            $paymentMethod,
            $totalamt . " Ks",
            $order["order_date"]
        );
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
}
