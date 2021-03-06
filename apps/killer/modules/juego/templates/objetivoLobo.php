<div id="user"> 
    <div class="btn-group">
    <a class="btn btn-info" href="<?php echo url_for('juego/index'); ?>"><i class="icon-user icon-white"></i> <?php echo $nombre ?></a>
    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="<?php echo url_for('juego/editar'); ?>"><i class="icon-pencil"></i> Editar perfil</a></li>
    <li><a href="<?php echo url_for('juego/salir'); ?>"><i class="icon-ban-circle"></i> Salir</a></li>
    </ul>
    </div>

</div>

<div id="nav-user">
    <ul class="nav nav-list">
    <li><a href="<?php echo url_for('juego/index'); ?>"><i class="icon-home"></i> Inicio</a></li>
    <li class="active"><a href="<?php echo url_for('juego/objetivo'); ?>"><i class="icon-screenshot"></i> Tu personaje</a></li>
    <li><a href="<?php echo url_for('juego/blog'); ?>"><i class="icon-book"></i> Bitácora</a></li>
    <li><a href="<?php echo url_for('juego/historicoVotaciones'); ?>"><i class="icon-eye-open"></i> Votaciones</a></li> 
    </ul>
</div>
  

<div id="content-objetivo" class="rounded-corners">
  
    <div>
    <img id="card" class="pic-1" src="<?php echo image_path("licantropo.jpg"); ?>" width="200" height="320" />
    </div>
    
    <div id="rol">
        <p>Rol: Hombre-Lobo</p>

        <p>Objetivo: Matar a todos los habitantes del pueblo.</p>

        <p>Función: Cada vez que llega la noche, te transformas en lobo y matas a un habitante del pueblo.</p>

        <div>
          Los lobos sois:
          <ul>
          <?php foreach($lobos as $lobo): ?>
            <li><?php echo $lobo ?></li>
          <?php endforeach ?>
          </ul>
        </div>
  
    </div>
  
  <?php if($jugador->esAlcalde()):?>
  <div>
    <dt>Rol</dt><dd>Alcalde</dd>
    <div>Eres el encargado de cerrar las votaciones y de decidir en caso de empate.</div> 
    </div>
  <?php endif ?>
  
  <?php if($jugador->estaEnamorado()):?>
  <div>
    <div>
    <img float="right" class="pic-2" src="<?php echo image_path("corazon.png"); ?>" width="80" />
    </div>
      
    <div id="rol">
    <dt>Rol</dt><dd>Enamorado</dd>
  
  <div>Estás enamorado/a de: <?php echo $jugador->getAmante() ?>.
    Si <?php echo $jugador->getAmante()->getNombre() ?> muere, tú morirás de pena inmediatamente.</div> 
    </div>
  </div>
  <?php endif ?>
  
</div>

  
  
