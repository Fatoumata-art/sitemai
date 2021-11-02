
 <section id="intro" class="wrapper featured style1">
        
                <header>
                    <h1>Nos services</h1>
                    <p>Lorem ipsum dolor sit magna consectetur<br />
                    adipiscing elit. Duis dapibus rutrum facilisis.<br />
                    Class aptent taciti sociosqu torquent.</p>
                </header>
               
            </div>
        </div>

<section class="tiles">

                    <?php

                    
                        $requete = $pdo->query('SELECT id, nom, resume, image FROM service');
            
                               
                               while($credit=$requete->fetch(PDO::FETCH_ASSOC))   {

                                $id = $credit['id'];
                                $nom = $credit['nom'];
                                $image = $credit['image'];
                                $resume = $credit['resume'];
                               

                              ?>  
                                 
								<article class="style3">
									<span class="image">
										<img src="images/<?php echo $image; ?>" alt="" />
									</span>
									<a href="index.php?detail=<?php echo $id;?>">
										<h2><?php echo $nom; ?></h2>
										<div class="content">
											<p><?php echo $resume; ?></p>
										</div>
									</a>
								</article>
                               <?php
                               }
                               ?> 
								
								
							</section>