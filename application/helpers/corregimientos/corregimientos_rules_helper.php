<?php

    function obtenerReglasCorregimientos(){
        return array(
            array(
                'field' => 'nombrecorregimiento',
                'label' => 'Nombre del corregimiento',
                'rules' => 'required|min_length[3]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'El %s contiene caracteres no alfabeticos'
                )
            ),

            array(
                'field' => 'municipio',
                'label' => 'Nombre del municipio',
                'rules' => 'required|min_length[3]|max_length[250]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'El %s contiene caracteres no alfabeticos'
                )
            ),

            array(
                'field' => 'veredas',
                'label' => 'Nombre de la vereda',
                'rules' => 'required|min_length[3]|max_length[250]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'El %s contiene caracteres no alfabeticos'
                )
            ),

            array(
                'field' => 'pobladores',
                'label' => 'Número de pobladores aproximado',
                'rules' => 'required|min_length[1]|max_length[250]|is_natural|greater_than[0]|less_than[1000000]',
                'errors' => array(
                    'required' => 'La %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'is_natural'=>  'El %s contiene caracteres no números naturales',
                    'greater_than'=>'El %s debe ser mayor a cero',
                    'less_than' =>  'El %s es demasiado grande'
                )
            ),

            array(
                'field' => 'ubicacionlatitud',
                'label' => 'Ubicación aproximada latitud ',
                'rules' => 'required|min_length[1]|max_length[100]',
                'errors' => array(
                    'required' => 'La %s es requerido.',
                    'min_length' => 'La %s contiene muy pocos caracteres',
                    'max_length' => 'La %s contiene muchos caracteres',
                    
                )
            ),
            array(
                'field' => 'area',
                'label' => 'Area en km',
                'rules' => 'required|min_length[1]|max_length[250]|greater_than[0]|less_than[1000000]',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'greater_than'=>'El %s debe ser mayor a cero',
                    'less_than' =>  'El %s es demasiado grande',
              
                )
            ),
      
            array(
                'field' => 'nautoridadprincipal',
                'label' => 'Nombre autoridad principal',
                'rules' => 'required|min_length[3]|max_length[250]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'El %s contiene caracteres no alfabeticos'
                )
            ),
            array(
                'field' => 'nautoridadpolicial',
                'label' => 'Nombre autoridad de policía ',
                'rules' => 'required|min_length[3]|max_length[250]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'El %s contiene caracteres no alfabeticos'
                )
            ),
            array(
                'field' => 'miembrosjal',
                'label' => 'Miembros de la JAL',
                'rules' => 'required|min_length[3]|max_length[250]',
                'errors' => array(
                    'required' => ' %s es requerido.',
                    'min_length' => ' %s contiene muy pocos caracteres',
                    'max_length' => ' %s contiene muchos caracteres',
                )
            ),
            array(
                'field' => 'jal',
                'label' => 'JAL',
                'rules' => 'required|min_length[3]|max_length[250]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'La %s es requerido.',
                    'min_length' => 'La %s contiene muy pocos caracteres',
                    'max_length' => 'La %s contiene muchos caracteres',
                    'alpha_numeric_spaces' => 'La %s contiene caracteres no alfabeticos'
                )
            ),
            array(
                'field' => 'codigodane',
                'label' => 'Código del Dane',
                'rules' => 'required|min_length[1]|max_length[50]|is_natural|greater_than[0]|less_than[1000000]',
                'errors' => array(
                    'required' => 'EL %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'is_natural'=>  'El %s contiene caracteres no números naturales',
                    'greater_than'=>'El %s debe ser mayor a cero',
                    'less_than' =>  'El %s es demasiado grande'
                )
            ),
            array(
                'field' => 'numeroadministrativo',
                'label' => 'Número acto administrativo que lo creo',
                'rules' => 'required|min_length[1]|max_length[30]|is_natural|greater_than[0]|less_than[1000000]',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'min_length' => 'El %s contiene muy pocos caracteres',
                    'max_length' => 'El %s contiene muchos caracteres',
                    'is_natural'=>  'El %s contiene caracteres no números naturales',
                    'greater_than'=>'El %s debe ser mayor a cero',
                    'less_than' =>  'El %s es demasiado grande'
                )
            ),
           

        );
    }