<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    global $woocommerce;
    global $wpdb;
    if (isset($_POST['idOrden']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
        $idOrden = $_POST['idOrden'];
        $productos = array();
        $query = 'SELECT variation_id, product_qty FROM wp_wc_order_product_lookup WHERE order_id = ' .$idOrden;
        $order = $wpdb->get_results($query);
        foreach ($order as $product) {
            $productos[$product->variation_id] += $product->product_qty;
        }
        echo json_encode($productos);
    }
?>