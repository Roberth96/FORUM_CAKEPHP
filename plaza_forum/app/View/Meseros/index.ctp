<h1>Lista de Meseros</h1>
<?php
    echo $this->Html->link('Crear Mesero',array('controller'=>'meseros','action'=>'nuevo'), array('class'=>'btn btn-sm btn-default'));
?>
<div class="page-header"></div>
<div class="col-md-8">
<table  class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Detalle</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($meseros as $mesero): ?>
        <tr>
            <td> <?php echo $mesero['Mesero']['id'];?> </td>
            <td> <?php echo $mesero['Mesero']['nombres'];?> </td>
            <td> <?php echo $mesero['Mesero']['apellidos'];?> </td>
            <td> <?php echo $this->Html->link('Detalle',array('controller'=>'meseros',
                'action'=>'ver',$mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default')); ?> </td>
            <td><?php echo $this->Html->link('Editar',array('controller'=>'meseros',
                'action'=>'editar',$mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default')); ?></td>
            <td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',
                $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default'),array('confirm'=>'Eliminar a '.$mesero['Mesero']['nombres'].'?')); ?></td>
        </tr>
    <?php endforeach;?>
</table>
</div>