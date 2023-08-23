
<?php
if (isset($_POST['export_type'])) {
    $export_type = $_POST['export_type'];

    $fileNames = array(
        'Order List' => 'order_list.csv',
        'Category List' => 'category_list.csv',
        'Trending Store List' => 'trending_store_list.csv',
        'Business Plan' => 'business_plan.csv'
    );

    if (isset($fileNames[$export_type])) {
        $filename = $fileNames[$export_type];

        $file = fopen($filename, "w");

        foreach ($export_data as $line) {
            fputcsv($file, $line);
        }

        fclose($file);

        // download
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=" . $filename);
        header("Content-Type: application/csv; ");

        readfile($filename);

        // deleting file
        unlink($filename);
        exit();
    } else {
        echo "Invalid export type!";
    }
}
?>

