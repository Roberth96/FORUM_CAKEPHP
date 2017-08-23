<h1>Crear Auditorio</h1>
<?php
    echo $this->Form->create('Auditorio');
    echo $this->Form->input('serie');
    echo $this->Form->input('num_asientos');
    echo $this->Form->input('descripcion', array ('class'=>'form-control', 'rows'=>3));
    echo $this->Form->input('mesero_id');
    echo $this->Form->end('Crear Auditorio');
?>
<?php echo $this->Html->link('Volver a lista de Auditorios', array('controller'=>'auditorios',
    'action'=>'index'), array('class'=>'btn btn-sm btn-default'));?>