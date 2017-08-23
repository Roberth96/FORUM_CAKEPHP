 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="nav-link" <?php echo $this->Html->link('FORUM', array('controller' => 'pages', 'action' => 'display', 'home'))?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" <?php echo $this->Html->link('INICIO', array('controller' => 'pages', 'action' => 'display', 'home'))?></a>
           
          </li>
          <li class="nav-item">
              <a class="nav-link" <?php echo $this->Html->link('Lista Meseros', array('controller' => 'meseros', 'action' => 'index'))?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" <?php echo $this->Html->link('Nuevo Mesero', array('controller' => 'meseros', 'action' => 'nuevo'))?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" <?php echo $this->Html->link('Lista Auditorios', array('controller' => 'auditorios', 'action' => 'index')) ?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" <?php echo $this->Html->link('Nuevo Auditorio', array('controller' => 'auditorios', 'action' => 'nuevo')) ?></a>
          </li>

        </ul>

      </div>
    </nav>