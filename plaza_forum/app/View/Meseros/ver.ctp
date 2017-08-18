<h1>Detalle del Meser@ <?php echo $mesero['Mesero']['nombres'] ?></h1>
<p><strong>CEDULA: </strong><?php echo $mesero['Mesero']['cedula']; ?></p>
<p><strong>APELLIDOS: </strong><?php echo $mesero['Mesero']['apellidos']; ?></p>
<p><strong>TELEFONO: </strong><?php echo  $mesero['Mesero']['telefono']; ?></p>
<p><strong>CREADO: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['created']); ?></p>
<p><strong>MODIFICADO: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['modified']); ?></p>
<h2>Encargado de los Auditorios</h2>
<?php if (empty($mesero['Auditorio'])):?>
    <p>No tiene auditorios asociados</p>
<?php endif ?>

<?php foreach($mesero['Auditorio'] as $m): ?>
    <p>
        Serie: <?php echo $m['serie']; ?>
        <br/>
        Número de asientos: <?php echo $m['num_asientos']; ?>
        <br/>
        Descripción: <?php echo $m['descripcion']; ?>
        <br/>
        Fecha de creación: <?php echo $m['created']; ?>
        <br/>
    </p>
<?php endforeach; ?>
<?php echo $this->Html->link('Volver a lista de meseros',array('controller'=>'meseros',
    'action'=>'index')); ?>