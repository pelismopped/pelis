<!-- single -->
<div class="single-page-agile-main">
	<div class="container">
		<!-- /w3l-medile-movies-grids -->
		<div class="agileits-single-top">
			<ol class="breadcrumb">
			  <li><a href="index.html">Home</a></li>
			  <li class="active">Single</li>
			</ol>
		</div>
		<div class="single-page-agile-info">
			<div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					<?php foreach($pelis as $fila){?>	
						<div class="song">
							<div class="song-info">
								<h3><?php echo $fila['Titulo']; ?></h3>	
							</div>
							<div class="video-grid-single-page-agileits">
								<div data-video="dLmKio67pVQ" id="video"> <img src="<?php echo base_url();?><?php echo $fila['Imagen']; ?>" alt="" class="img-responsive" /> </div>
							</div>
						</div>	
						<div class="song">
							<div class="song-info"><?php echo $fila['Descripcion'];?></div>
						</div>	
						<iframe width="560" height="315" src="<?php echo'https://www.youtube.com/embed/';?><?php echo $fila['LinkYoutube']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

						<div class="agileits-single-top">	
							<h3>Link descarga</h3>	
							<a href= <?php echo $fila['linkDescarga'];?> ><h4><span>1fichier</span></h4></a>

							<a href= <?php echo $fila['linkDescargaUtorrent'];?> ><h4><span>Utorrent</span></h4></a>
						</div>
						<div class="agileits-single-top">	
							<h3>Ver</h3>	
							<a href= <?php echo $fila['linkOpenload'];?> ><h4><span>Openload</span></h4></a>

						</div>	
					<?php } ?>
					<div class="clearfix"> </div>
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Comments</a>
							<div class="agile-info-wthree-box">
								<?php $Var = '0'; 
									foreach($pelis as $fila){
											$Var = $fila['id'];
									}
								?>
								<form action="<?php echo base_url();?><?php echo'Welcome/nuevoComentario/';?><?php echo $Var;?>" method="post">
									<input type="text" placeholder="Nombre" name="autor" id="autor" required="">			           					   
									<textarea placeholder="Message" required="" name="comentario" id="comentario"></textarea>
									<input type="submit" value="Publicar comentario">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">			
						<?php 
						if(isset($posts)){
							foreach($posts as $post){?>
								<div class="media"> 
									<h5><?php echo $post['autor'];?></h5>
									 <div class="media-left">
										<!-- <a href="#">
											<img src="images/user.jpg" title="One movies" alt=" " />
										</a>-->
									</div>									
									<div class="media-body">
										<p><?php echo $post['entrada'];?></p>
										<span><?php echo $post['fecha'];?><!--<a href="#"> Admin </a>--></span>
									</div>
								</div>
							<?php }
							}else{
								echo "<div id'sinPosts'>Actualmente no hay ningún post</div>";
							}	?>
						</div>
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						<?php foreach($tops as $fila) {?>		
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="<?php echo base_url()?><?php echo"Welcome/muestra/".$fila['id'];?>"><img src="<?php echo base_url();?><?php echo $fila['Imagen']; ?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> <?php echo $fila['Titulo']; ?></a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
</div>