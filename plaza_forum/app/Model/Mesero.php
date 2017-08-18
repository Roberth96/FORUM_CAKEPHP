<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mesero extends AppModel{
    public $validate=array(
        'cedula'=>array(
            'notEmpty'=>array(
                'rule'=>'notEmpty'
            ), 'numeric'=>array(
                'rule'=>'numeric',
                'message'=>'Solo números'
            ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'Este número de CEDULA ya se encuentra registrado en la base de datos'
            ),
        ),
        'nombres'=>array(
            'rule'=>'notEmpty'
        ),
        'apellidos'=>array(
            'rule'=>'notEmpty'
        ),
        'telefono'=>array(
            'notEmpty'=>array(
                'rule'=>'notEmpty'
            ), 'numeric'=>array(
                'rule'=>'numeric',
                'message'=>'Solo números'
            ) 
        )
        
    );
}
