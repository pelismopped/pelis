<div class="movie-browse-agile">		     
<!-- faq-banner -->
	<div class="faq">
		<h4 class="latest-text w3_faq_latest_text w3_latest_text">Movies List</h4>
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li><a href="index.html">Home</a></li>
					  <li class="active">List</li>
					</ol>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">0 - 9</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/A"?>" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">A</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/B"?>" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">B</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/C"?>" role="tab" id="c-tab" data-toggle="tab" aria-controls="c">C</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/D"?>" role="tab" id="d-tab" data-toggle="tab" aria-controls="d">D</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/E"?>" role="tab" id="e-tab" data-toggle="tab" aria-controls="e">E</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/F"?>" role="tab" id="f-tab" data-toggle="tab" aria-controls="f">F</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/G"?>" role="tab" id="g-tab" data-toggle="tab" aria-controls="g">G</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/H"?>" role="tab" id="h-tab" data-toggle="tab" aria-controls="h">H</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/I"?>" role="tab" id="i-tab" data-toggle="tab" aria-controls="i">I</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/J"?>" role="tab" id="j-tab" data-toggle="tab" aria-controls="j">J</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/K"?>" role="tab" id="k-tab" data-toggle="tab" aria-controls="k">K</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/L"?>" role="tab" id="l-tab" data-toggle="tab" aria-controls="l">L</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/M"?>" role="tab" id="m-tab" data-toggle="tab" aria-controls="m">M</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/N"?>" role="tab" id="n-tab" data-toggle="tab" aria-controls="n">N</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/O"?>" role="tab" id="o-tab" data-toggle="tab" aria-controls="o">O</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/P"?>" role="tab" id="p-tab" data-toggle="tab" aria-controls="p">P</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/Q"?>" role="tab" id="q-tab" data-toggle="tab" aria-controls="q">Q</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/R"?>" role="tab" id="r-tab" data-toggle="tab" aria-controls="r">R</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/S"?>" role="tab" id="s-tab" data-toggle="tab" aria-controls="s">S</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/T"?>" role="tab" id="t-tab" data-toggle="tab" aria-controls="t">T</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/U"?>" role="tab" id="u-tab" data-toggle="tab" aria-controls="u">U</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/V"?>" role="tab" id="v-tab" data-toggle="tab" aria-controls="v">V</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/W"?>" role="tab" id="w-tab" data-toggle="tab" aria-controls="w">W</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/X"?>" role="tab" id="x-tab" data-toggle="tab" aria-controls="x">X</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/Y"?>" role="tab" id="y-tab" data-toggle="tab" aria-controls="y">Y</a></li>
							<li role="presentation"><a href="<?php echo base_url()?><?php echo"Welcome/listar/Z"?>" role="tab" id="z-tab" data-toggle="tab" aria-controls="z">Z</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">							
							<div role="tabpanel" class="tab-pane fade" id="x" aria-labelledby="x-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint24">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>

										</thead>

										<tbody>



									<?php if( !empty($pelis) ) {

												foreach ($pelis as $fila) {?>

										  <tr>

											





											<td><?php echo $fila['id'] ?></td>

											<td class="w3-list-img"><a href="<?php echo base_url()?><?php echo"Welcome/muestra/".$fila['id'];?>"><img src="<?php echo base_url();?><?php echo $fila['Imagen']; ?>" alt="" /> <span>001 The Secret Life of Pets</span></a></td>											

											<td><?php echo $fila['Anio'] ?></td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>

											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>

											<td>8.2</td>

										  </tr>

										  <?php }

											}?>

										  <tr>

											<td>2</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>

											<td>2010</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">China</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>

											<td>8.9</td>

										  </tr>

										  <tr>

											<td>3</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>

											<td>2010</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>

											<td>7.0</td>

										  </tr>

										  <tr>

											<td>4</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>

											<td>2014</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">Japan</a></td>

											<td class="w3-list-info"><a href="genres.html">Action</a></td>

											<td>7.1</td>

										  </tr>

										  <tr>

											<td>5</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>

											<td>2013</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>

											<td>7.0</td>

										  </tr>

										  <tr>

											<td>6</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>

											<td>2013</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>

											<td>7.0</td>

										  </tr>

										  <tr>

											<td>7</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>

											<td>2011</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">Korea</a></td>

											<td class="w3-list-info"><a href="genres.html">Drama</a></td>

											<td>7.5</td>

										  </tr>

										  <tr>

											<td>8</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>

											<td>2010</td>

											<td>SD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>

											<td>6.5</td>

										  </tr>

										  <tr>

											<td>9</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>

											<td>2013</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>

											<td>7.0</td>

										  </tr>

										  <tr>

											<td>10</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>

											<td>2014</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United States</a></td>

											<td class="w3-list-info"><a href="genres.html">Action</a></td>

											<td>7.1</td>

										  </tr>

										  <tr>

											<td>11</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n5.jpg" alt="" /> <span>24</span></a></td>

											<td>2016</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">India</a></td>

											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>

											<td>9.0</td>

										  </tr>

										  <tr>

											<td>12</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>

											<td>2013</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>

											<td>7.0</td>

										  </tr>

										  <tr>

											<td>13</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>

											<td>2012</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>

											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>

											<td>8.2</td>

										  </tr>

										  <tr>

											<td>14</td>

											<td class="w3-list-img"><a href="single.html"><img src="images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>

											<td>2010</td>

											<td>HD</td>

											<td class="w3-list-info"><a href="genres.html">China</a></td>

											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>

											<td>8.9</td>

										  </tr>

									</table>

								</div>

							</div>

						</div>

				</div>

			</div>

	</div>

<!-- //faq-banner -->