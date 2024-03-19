<?php
class EnlacesPaginas {
    public static function EnlacesPaginasModel($enlacesmodel) {
        $module = "";  // Establece un valor predeterminado

        if ($enlacesmodel == "Inicio" ||
            $enlacesmodel == "Nosotros" ||
            $enlacesmodel == "Servicios" ||
            $enlacesmodel == "Ingresar" ||
            $enlacesmodel == "Contactanos" ||
            $enlacesmodel == "Salir")
        {
            $module = "vista/modulos/".$enlacesmodel.".php";
        }
        return $module;     
    }
}
?>
