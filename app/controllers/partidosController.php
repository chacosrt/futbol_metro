<?php 
    class partidosController extends Controller {

        function __construct(){ }

        /* funcion que entra por default */

        function index(){ 

            
            View::render('partidos');   

        }
    }
?>