<h1>EDITAR MESERO</h1>
<?php echo $this->Form->create('Mesero');?>
<?php echo $this->Form->input('cedula');?>
<?php echo $this->Form->input('nombres');?>
<?php echo $this->Form->input('apellidos');?>
<?php echo $this->Form->input('telefono');?>
<?php echo $this->Form->end('Editar Mesero');?>
<?php echo $this->Html->link('Volver a lista de meseros',array('controller'=>'meseros',
    'action'=>'index'), array('class'=>'btn btn-sm btn-default')); ?>
