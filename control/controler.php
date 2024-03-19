<?php
// inicia una clase
class MvcController {
    public function plantilla() {
        //incluye muestra el archivo que está en la carpeta vista
        include "vista/plantilla.php";
    }

    public function enlacespaginascontrol() {
        // Verifica si 'axn' está definido antes de usarlo
        $enlacescontrol = isset($_GET["axn"]) ? $_GET["axn"] : 'Inicio';

        // Descomentar para imprimir el valor para depuración
        // echo "<center>$enlacescontrol </center>";

        // Llama al método de la clase EnlacesPaginas
        $respuesta = EnlacesPaginas::EnlacesPaginasModel($enlacescontrol);

        // Asegúrate de que $respuesta sea un valor esperado antes de incluir
        if (!empty($respuesta)) {
            include $respuesta;
        } else {
            // Manejo de error si el archivo no existe
            echo "La ruta '$respuesta' no es válida.";
        }
    }
}
?>
