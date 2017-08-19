<h1>Editar Auditorios</h1>
<?php echo $this->Form->create('Auditorio'); ?>
<?php echo $this->Form->input('serie'); ?>
<?php echo $this->Form->input('num_asientos'); ?>
<?php echo $this->Form->input('descripcion',array('rows' => 3)); ?>
<?php echo $this->Form->input('mesero_id'); ?>
<?php echo $this->Form->end('Editar Auditorio'); ?>