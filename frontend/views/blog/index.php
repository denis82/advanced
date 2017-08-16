<?php

use yii\widgets\LinkPager;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!-- Main Wrapper -->
				<div id="main-wrapper">
					
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="8u 12u(mobile)">
                                                                                
										<!-- Article list -->
											<section class="box article-list">
												<h2 class="icon fa-file-text-o">Статьи (Обычная постраничная навигация)</h2>

												<!-- Excerpt -->
                                                                                                <?php foreach ($models as $Item):?>
                                                                                                    <article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date"><?php echo $Item->date_create;?></span>
																<h3><a href="#"><?php echo $Item->title;?></a></h3>
															</header>
															<p><?php echo $Item->preview_text;?></p>
														</div>
													</article>
                                                                                                <?php endforeach;?>
													
											</section>
									</div>
									<div class="4u 12u(mobile)">

										<!-- Spotlight -->
											<section class="box spotlight">
												<h2 class="icon fa-file-text-o">Spotlight</h2>
												<article>
													<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">Neural Implants</a></h3>
														<p>The pros and cons. Mostly cons.</p>
													</header>
													<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
													quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
													lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
													et tempus consequat etiam.</p>
													<p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
													mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
													<footer>
														<a href="#" class="button alt icon fa-file-o">Continue Reading</a>
													</footer>
												</article>
											</section>

									</div>
								</div>
                                                                                                <?php

    
    echo LinkPager::widget([
        'pagination' => $pages,
        'nextPageLabel' => 'Туды',
        'prevPageLabel' => 'Сюды',
        'nextPageCssClass' => 'css-class',
        'prevPageCssClass' => 'css-class', // все опции сво-ва класса Class yii\widgets\LinkPager
        //'options' => [
            //'id' => '1245',
        //],
    ]);
?>
							</div>
						</div>
					</div>
				</div>
