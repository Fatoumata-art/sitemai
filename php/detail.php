
		<!-- Wrapper -->
			<div id="wrapper">
		<?php
			$requete = $pdo->query('SELECT * FROM service');
            
                               
			foreach($credit as $val)   {

			 $id = $val['id'];
			 $nom = $val['nom'];
			 $image = $val['image'];
			 $resume = $val['resume'];
			 $description = $val['description'];

		   ?>  
				<!-- Main -->
					<section id="main" class="wrapper style1">
						<div class="inner">
							<header class="major">
							<img src="images/<?php echo $image; ?>" alt="" />
								<h1><?php echo $nom; ?></h1>
								<p><?php echo $resume; ?></p>
							</header>
							<span class="image main"><img src="images/pic05.jpg" alt="" /></span>
							<p><?php echo $description; ?></p>
						</div>
						<?php
							}
							?>
						</section>

			

			</div>

	