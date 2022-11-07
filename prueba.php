<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    global $woocommerce;
    global $wpdb;
    $idOrden = 1980119;
    $productos = array();
    $query = "SELECT variation_id, product_qty FROM wp_wc_order_product_lookup WHERE order_id = $idOrden";
    $order = $wpdb->get_results($query);
    echo "<pre>$order</pre>";
    foreach ($order as $product) {
        $productos[$product->variation_id] += $product->product_qty;
    }
    echo json_encode($productos);
?>