<?php
	include('conexion.php');

    $obj = new Conexion;

    $res=$obj->buscarProducto();

	//print_r($res);

	foreach($res as $filas){
		echo 'Id: ' . $filas['codigoBarras'] . '<br>';
		echo 'Nombre ' . $filas['nombre_producto'] . '<br>';
		echo 'Descripcion ' . $filas['descripcion_producto'] . '<br>';
		echo 'Precio Venta ' . $filas['precio_venta'] . '<br>';
		echo 'Precio Compra ' . $filas['precio_compra'] . '<br>';
		echo 'Stock ' . $filas['stock'] . '<br>';
		echo 'URL imagen' . $filas['url_img'] . '<br>';
	}
?>