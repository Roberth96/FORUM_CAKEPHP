<?php
		
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AuditoriosController extends AppController{
    public  $helpers = array('Html','Form','Time');
    public $components = array('Session');
    public function index(){
        $this->set('auditorios', $this->Auditorio->find('all'));
    }
    public function nuevo(){
        if($this->request->is('post')){
            $this->Auditorio->create();
            if($this->Auditorio->save($this->request->data)){
                $this->Session->setFlash('El auditorio ha sido creado', $element = 'default',
                        $params = array('class'=>'success'));
                        return $this->redirect(array('action'=>'index'));                      
            }
            $this->Session->setFlash('No se pudo crear auditorio');
        }
        $meseros=$this->Auditorio->Mesero->find('list', array('fields'=>array('id',
            'nombre_completo')));
        $this->set('meseros',$meseros);
    }
    public function editar($id = null){
        if(!$id){
            throw new NotFoundException("Datos Invalidos");
        }
        $auditorio = $this->Auditorio->findById($id);
        if (!$auditorio){
            throw new NotFoundException("El Auditorio no ha sido encontrado");
        }
        if($this->request->is(array('post','put'))){
            $this->Auditorio->id = $id;
            if ($this->Auditorio->save($this->request->data)){
                $this->Session->setFlash('El Auditorio ha sido modificado', $element = 'default',
                        $params = array('class'=>'success'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('El registro no pudo ser modificado');
        }
        if(!$this->request->data){
            $this->request->data = $auditorio;
        }
        $meseros=$this->Auditorio->Mesero->find('list', array('fields'=>array('id',
            'nombre_completo')));
        $this->set('meseros',$meseros);
    }
    public function eliminar($id){
        if($this->request->is('get')){
            throw new MethodNotAlledException("INCORRECTO");
        }
        if ($this->Auditorio->delete($id)){
            $this->Session->setFlash('El Auditorio ha sido eliminado', $element='default',
                    $params=array('class'=>'success'));
            return $this->redirect(array('action'=>'index'));
        }
    }
   
		
	
}
?>
