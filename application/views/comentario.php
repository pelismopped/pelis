






<!--mostramos el post si es que hay-->
<div id="posts">
	<?php
	//if(empty($posts)) {
	    foreach ($posts as $post) {
	        ?>
	        <h2 ><?php echo $post['titulo']; ?></h2>
	        <div id="autorfecha"><span id="autor">Autor: <?php echo $post['autor']; ?></span><span id="fecha">Fecha de publicación: <?php echo $post['fecha']; ?></span></div>
	        <div id="entrada"><?php echo $post['entrada']; ?></div>
	        <?php
	    }
	/*} else {
	    ?>
	    <div id="sinPosts">Actualmente no hay ningún post</div>
	    <?php
	}*/
	?>
</div>
<!--fin del div que muestra el post-->

<!--mostramos los comentarios si es que los hay-->      
<div id="mostrarComentarios"></div>
<!--fin del div que muestra los comentarios-->


<div id="comentarios">
	
	 <form action="<?php echo base_url();?><?php echo'Welcome/nuevoComentario'?>" method="post">	         
	
	<label>Escribe un comentario</label>
	<textarea cols="50" rows="6" name="comentario" id="comentario"></textarea><br />
	<input type="submit" value="c" />
	</form>
</div>

<!--fin del formulario para publicar comentarios-->

<!--mostramos un mensaje conforme se ha publicado el comentario-->
<div id="comentarioPublicado">Comentario publicado</div>
