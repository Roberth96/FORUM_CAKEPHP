<h1>Editar Auditorios</h1>
<?php echo $this->Form->create('Auditorio'); ?>
<?php echo $this->Form->input('serie'); ?>
<?php echo $this->Form->input('num_asientos'); ?>
<?php echo $this->Form->input('descripcion',array('rows' => 3)); ?>
<?php echo $this->Form->input('mesero_id'); ?>
<?php echo $this->Form->end('Editar Auditorio'); ?>
<?php echo $this->Html->link('Volver a lista de Auditorios',array('controller'=>'auditorios',
    'action'=>'index'), array('class'=>'btn btn-sm btn-default')); ?>