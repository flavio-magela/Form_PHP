<?php
class UI_Comp_Formulario
{

    public static function renderer()
    {
        $param = [];          

        $param['data'] =      $_POST['data'];
        $param['texto'] =     $_POST['texto'];
        //$param['checkbox'] =  $_POST['checkbox'];
        $param['mensagem'] =  $_POST['mensagem'];

        return $param;
    }

    public function validaScriptData()
    {

            // Tratar o campo Date para dd/mm/YYYY
            $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
            if(isset($_POST['data']))
            {
                $data_BR = date('d/m/Y', strtotime($data));

                return $data_BR;

            }
            
    } 

    public function validaScriptTexto()
    {       
            $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);

            return $texto;

    }

    public function validaScriptCheckbox()
    {
            // Tratar o campo checkbox
            if(isset($_POST["checkbox"]))
            {
                $checkbox = $_POST['checkbox'];     
                $checkboxAsString = implode($checkbox);

            }else{

                 $checkboxAsString = filter_input(INPUT_POST, 'checkbox', FILTER_SANITIZE_STRING);
            }

            return $checkboxAsString;
    }

    public function validaScriptMensagem()
    {
             
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING); 

            return $mensagem;


     }


}