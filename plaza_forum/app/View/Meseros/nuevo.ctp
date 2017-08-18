<h1>Crear Mesero</h1>
<?php
    echo $this->Form->create('Mesero');
    echo $this->Form->input('cedula');
    echo $this->Form->input('nombres');
    echo $this->Form->input('apellidos');
    echo $this->Form->input('telefono');
    echo $this->Form->end('Crear Mesero');
?>
<?php echo $this->Html->link('Volver a lista de meseros',array('controller'=>'meseros',
    'action'=>'index')); ?>
