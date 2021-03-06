<div id="user"> 
    <div class="btn-group">
    <a class="btn btn-info" href="<?php echo url_for('juego/index'); ?>"><i class="icon-user icon-white"></i> <?php echo $nombre ?></a>
    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="<?php echo url_for('juego/editar'); ?>"><i class="icon-pencil"></i> Editar perfil</a></li>
    <li><a href="<?php echo url_for('juego/salir'); ?>"><i class="icon-ban-circle"></i> Salir</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo url_for('juego/rellenarInforme'); ?>"><i class="i"></i> Certifica la muerte de tu objetivo</a></li>
    </ul>
    </div>

</div>


<div id="nav-user">
    <ul class="nav nav-list">
    <li><a href="<?php echo url_for('juego/index'); ?>"><i class="icon-home"></i> Inicio</a></li>
    <li><a href="<?php echo url_for('juego/rueda'); ?>"><i class="icon-screenshot"></i> Rueda de objetivos</a></li>
    <li><a href="<?php echo url_for('juego/blog'); ?>"><i class="icon-eye-open"></i> Killer News</a></li> 
    <li class="active"><a href="<?php echo url_for('juego/nuevoPost'); ?>"><i class="icon-pencil"></i>Escribe en el blog</a></li> 
    <li><a href="<?php echo url_for('juego/normas'); ?>"><i class="icon-align-justify"></i> Normativa</a></li>
    <li><a href="<?php echo url_for('juego/rangos'); ?>"><i class="icon-certificate"></i> Rango mafioso</a></li>
    <li><a href="<?php echo url_for('juego/ranking'); ?>"><i class="icon-signal"></i> Clasificación</a></li>
    </ul>
</div>


<div id="content-user">

    <h1>Nueva entrada en el blog</h1>
   
  <form id="confirmacionMuerteForm" class="form-horizontal" method="POST" action="<?php echo url_for('juego/grabarPost'); ?>">
    <fieldset>
      <legend>Relata algún intento fallido de asesinato, las amenazas que sufres cada día o cuéntanos tu experiencia desde el más allá.</legend>
      
      <?php if(!empty($aviso)): ?>
        <p class="alert"><?php echo $aviso; ?></p>
      <?php endif ?>
        
       
    <div class="control-group">
          <label class="control-label" for="input01">Titular</label>
          <div class="controls">
            <input type="text" name="titulo" placeholder="Título del relato" class="input-xxlarge">
            <p class="help-block">Escribe un titular para el relato del asesinato.</p>
          </div>
        </div>

    <div class="control-group">
          <label class="control-label">Relato</label>
          <div class="controls">
            <div class="textarea">
                  <textarea name="relato" class="input-xxlarge" style=" height: 180px; "> </textarea>
            </div>
          </div>
        </div>
      
      <div class="control-group">
          <button type="submit" class="btn btn-success">Enviar</button>
          <a href="<?php echo url_for('juego/grabarPost'); ?>" class="btn btn-inverse" >Cancelar</a>
      </div>
      
    </fieldset>
  </form>

    

</div>
