<?php
    namespace CFA;
          
    class AdminController
    {
    
        public function __construct()
        {
    
        }

        public static function index()
        {
            $html='<form method="POST">
            <input type="text" name="cambiar_fuente" value="'.get_option('cambiar_fuente').'" />
            </form>';
            echo $html;
        }
        public static function guardar()
        {
            update_option('cambiar_fuente',$_POST['cambiar_fuente']);
        }
        public static function mostrar()
        {
            if(get_option('cambiar_fuente')=='si')
            {
                $html='<style>
                @import url("https://fonts.googleapis.com/css?family=Pacifico&display=swap");
                html *{font-family: "Pacifico", cursive;}
                </style>';
                echo $html;
            }
        }
    }