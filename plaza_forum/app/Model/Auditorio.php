<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Auditorio extends AppModel{
    public $belongsTo = array(
        'Mesero'=>array(
            'className' => 'Mesero',
            'foreignKey' => 'mesero_id'
        )
    );
    public $validate = array(
        'serie' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'La serie del Auditorio debe ser único'
            )
        ),
        'num_asientos' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            )
        ),
        'descripcion' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>