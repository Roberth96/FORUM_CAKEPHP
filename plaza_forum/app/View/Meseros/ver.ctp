<h1>Detalle del Meser@ <?php echo $mesero['Mesero']['nombres'] ?></h1>
<p><strong>CEDULA: </strong><?php echo $mesero['Mesero']['cedula']; ?></p>
<p><strong>APELLIDOS: </strong><?php echo $mesero['Mesero']['apellidos']; ?></p>
<p><strong>TELEFONO: </strong><?php echo  $mesero['Mesero']['telefono']; ?></p>
<p><strong>CREADO: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['created']); ?></p>
<p><strong>MODIFICADO: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['modified']); ?></p>
<?php echo $this->Html->link('Volver a lista de meseros',array('controller'=>'meseros',
    'action'=>'index')); ?>
