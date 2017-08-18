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
}
?>