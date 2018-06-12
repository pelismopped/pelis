<!-- banner-bottom -->

<div class="banner-bottom">
	<div class="container">
		<div class="agile_banner_bottom_grid">
			<div id="owl-demo" class="owl-carousel owl-theme">
			<?php if( !empty($pelis) ) {
					foreach ($pelis as $fila) {
			?>		
				<div class="item">
					<?php echo base_url();?><?php echo $fila['Imagen']; ?>
					<div class="movie-gride-agile movie-gride-agile1">
						<a href="<?php echo base_url()?><?php echo "Welcome/muestra/".$fila['id'];?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?><?php echo $fila['Imagen']; ?>" title="album-name" class="img-responsive" alt=" " />
							<div class="action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1">
								<div class="movie-text">
									<h6><a href="single.html"><?php echo $fila['Titulo'] ?></a></h6>							
								</div>
							<div class="mid-2 agile_mid_2_home">							
								<p><?php echo $fila['Anio']; ?></p>	
								<div class="block-stars">
									<ul class="ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>NEW</p>
						</div>
					</div>
				</div>
			<?php  }}?>
			</div>
		</div>			
	</div>
</div>

<!-- //banner-bottom -->