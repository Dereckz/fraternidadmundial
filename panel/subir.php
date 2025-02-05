<?php
require("../PHP/conexion.php");
$nombreA =$_POST["namearticulo"];
$pathA = $_POST["patharticulo"];
$fechaS =$_POST["simpleDataInput"];
$fechaS2=date("Y-m-d", timestamp: strtotime($fechaS));
$descripcion = $_POST["txtDescripcion"];
$pathImage = $_POST["pathImagenFile"];
$usuario= $_POST["usuario"];
$idcategoria=$_POST["comuna"];


	if ($_FILES['patharticulo']['error'] == 0) { //Valida si no hay errores
		$dir = "../articulos/"; //Directorio de carga
		$dirI = "../filesI/"; //Directorio de carga
		$tamanio = 400000; //Tamaño permitido en kb
		$permitidos = array('pdf'); //Archivos permitido
		$ruta_carga = $dir . $_FILES['patharticulo']['name'];
		//Obtenemos la extensión del archivo
		$arregloArchivo = explode(".", $_FILES['patharticulo']['name']);
		$extension = strtolower(end($arregloArchivo));
		
		if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
			
			if ($_FILES['patharticulo']['size'] < ($tamanio * 1024)) { //Valida el tamaño
				
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dir)) {
					mkdir($dir, 0777);
				}
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dirI)) {
					mkdir($dirI, 0777);
				}
				if (move_uploaded_file($_FILES['patharticulo']['tmp_name'], $ruta_carga)) {
					//-----------------------imagenes beggin
					$permitidosI = array('png', 'jpg','jpeg'); //Archivos permitido
					$ruta_cargaI = $dirI . $_FILES['pathImagenFile']['name'];
					$arregloImg = explode(".", $_FILES['pathImagenFile']['name']);
					$extensionI = strtolower(end($arregloImg));
										
					if (in_array($extensionI, $permitidosI)) {
						if ($_FILES['pathImagenFile']['size'] < ($tamanio * 1024)) {
									
										if ($_FILES['pathImagenFile']['error'] == 0) { 
										
									
											if (move_uploaded_file($_FILES['pathImagenFile']['tmp_name'], $ruta_cargaI)) {
												
												$queryA = mysqli_query($conn,"INSERT INTO `articulo`(`idArticulo`, `Nombre`, `Fecha`, `Descripcion`, `rutaA`, `Imagen`, `fkiIdCategoria`, `usuario`, `iEstatus`)  
												VALUES ('0','$nombreA','$fechaS2','$descripcion','$ruta_carga','$ruta_cargaI','$idCategoria','$usuario','1')");
													if($queryA){
														header("Location:../panel/index.php");
													}else{
														header("Location: 404.html");
													}
												
												//echo "Se subio bien imagen";
											}else {
												echo "No enviaste imagen";
											}			
										
									} else {
										echo "Error al cargar Imagen";
									}
							} else {
								echo "Tamaño";
							}
						}else {
								echo "Imagen no permitida";
						}	 
						//-----------------------imagenes end
						echo "Se subio bien el articulo";

					} else {
						echo "Error al cargar archivo";
					}
				} else {
					echo "Archivo excede el tamaño permitido";
				}
			} else {
			echo "Archivo no permitido";
		}
	} else {
		echo "No enviaste archivo";
	}
 