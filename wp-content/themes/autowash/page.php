<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autowash
 */

get_header();
?>
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php the_field('foto_slide_1') ?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3><?php the_field('slide_1_text_1') ?></h3>
                            <h1><?php the_field('slide_1_text_2') ?></h1>
                            <p><?php the_field('slide_1_text_3') ?> </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php the_field('foto_slide_2') ?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3><?php the_field('slide_2_text_1') ?></h3>
                            <h1><?php the_field('slide_2_text_2') ?></h1>
                            <p><?php the_field('slide_2_text_3') ?> </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php the_field('foto_slide_3') ?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3><?php the_field('slide_3_text_1') ?></h3>
                            <h1><?php the_field('slide_3_text_2') ?></h1>
                            <p><?php the_field('slide_3_text_3') ?> </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?php the_field('about_foto_1') ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2><?php the_field('about_text_1') ?></h2>
                        </div>
                        <div class="about-content">
                            <p><?php the_field('about_text_2') ?> </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window wiping</li>
                            </ul>
                            <a class="btn btn-custom" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
					<?php
						$service_block_1 = get_field('service_block_1');
						if($service_block_1): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-car-wash-1"></i>
									<h3><?php echo $service_block_1['service_item']; ?></h3>
									<p><?php echo $service_block_1['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_2 = get_field('service_block_2');
						if($service_block_2): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-car-wash"></i>
									<h3><?php echo $service_block_2['service_item']; ?></h3>
									<p><?php echo $service_block_2['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_3 = get_field('service_block_3');
						if($service_block_3): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-vacuum-cleaner"></i>
									<h3><?php echo $service_block_3['service_item']; ?></h3>
									<p><?php echo $service_block_3['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_4 = get_field('service_block_4');
						if($service_block_4): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-seat"></i>
								   <h3><?php echo $service_block_4['service_item']; ?></h3>
									<p><?php echo $service_block_4['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_5 = get_field('service_block_5');
						if($service_block_5): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-car-service"></i>
									<h3><?php echo $service_block_5['service_item']; ?></h3>
									<p><?php echo $service_block_5['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_6 = get_field('service_block_6');
						if($service_block_6): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-car-service-2"></i>
									<h3><?php echo $service_block_6['service_item']; ?></h3>
									<p><?php echo $service_block_6['service_item_text']; ?>r</p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_7 = get_field('service_block_7');
						if($service_block_7): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-car-wash"></i>
								   <h3><?php echo $service_block_7['service_item']; ?></h3>
									<p><?php echo $service_block_7['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$service_block_8 = get_field('service_block_8');
						if($service_block_8): ?>
							<div class="col-lg-3 col-md-6">
								<div class="service-item">
									<i class="flaticon-brush-1"></i>
									<h3><?php echo $service_block_8['service_item']; ?></h3>
									<p><?php echo $service_block_8['service_item_text']; ?></p>
								</div>
							</div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up"><?php the_field('count_1')?></php></h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up"><?php the_field('count_2')?></h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up"><?php the_field('count_3')?></h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up"><?php the_field('count_4')?></h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p><?php the_field('price_text_1')?></p>
                    <h2><?php the_field('price_text_2')?></h2>
                </div>
                <div class="row">
					<?php
						$price_item_1 = get_field('price_item_1');
						if($price_item_1): ?>
							<div class="col-md-4">
								<div class="price-item">
									<div class="price-header">
										<h3><?php echo $price_item_1['price_header']; ?></h3>
										<h2><span>$</span><strong><?php echo $price_item_1['dolars']; ?></strong><span>.<?php echo $price_item_1['cents']; ?></span></h2>
									</div>
									<div class="price-body">
										<ul>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_1['price_li_1']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_1['price_li_2']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_1['price_li_3']; ?></li>
											<li><i class="far fa-times-circle"></i><?php echo $price_item_1['price_li_4']; ?></li>
											<li><i class="far fa-times-circle"></i><?php echo $price_item_1['price_li_5']; ?></li>
										</ul>
									</div>
									<div class="price-footer">
										<a class="btn btn-custom" href="">Book Now</a>
									</div>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$price_item_2 = get_field('price_item_2');
						if($price_item_2): ?>
							<div class="col-md-4">
								<div class="price-item featured-item">
									<div class="price-header">
										<h3><?php echo $price_item_2['price_header']; ?></h3>
										<h2><span>$</span><strong><?php echo $price_item_2['dolars']; ?></strong><span>.<?php echo $price_item_2['cents']; ?></span></h2>
									</div>
									<div class="price-body">
										<ul>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_2['price_li_1']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_2['price_li_2']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_2['price_li_3']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_2['price_li_4']; ?></li>
											<li><i class="far fa-times-circle"></i><?php echo $price_item_2['price_li_5']; ?></li>
										</ul>
									</div>
									<div class="price-footer">
										<a class="btn btn-custom" href="">Book Now</a>
									</div>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$price_item_3 = get_field('price_item_3');
						if($price_item_3): ?>
							<div class="col-md-4">
								<div class="price-item">
									<div class="price-header">
										<h3><?php echo $price_item_3['price_header']; ?></h3>
										<h2><span>$</span><strong><?php echo $price_item_3['dolars']; ?></strong><span>.<?php echo $price_item_3['cents']; ?></span></h2>
									</div>
									<div class="price-body">
										<ul>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_3['price_li_1']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_3['price_li_2']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_3['price_li_3']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_3['price_li_4']; ?></li>
											<li><i class="far fa-check-circle"></i><?php echo $price_item_3['price_li_5']; ?></li>
										</ul>
									</div>
									<div class="price-footer">
										<a class="btn btn-custom" href="">Book Now</a>
									</div>
								</div>
							</div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p><?php the_field('points_text_1') ?></p>
                            <h2><?php the_field('points_text_2') ?></h2>
                        </div>
                        <div class="row">
							<?php
								$point_block_1 = get_field('point_block_1');
								if($point_block_1): ?>
									<div class="col-md-6">
										<div class="location-item">
											<i class="fa fa-map-marker-alt"></i>
											<div class="location-text">
												<h3><?php echo $point_block_1['point_name']; ?></h3>
												<p><?php echo $point_block_1['point_address']; ?></p>
												<p><strong>Call:</strong><?php echo $point_block_1['point_tel']; ?></p>
											</div>
										</div>
									</div>
							<?php endif; ?>
							<?php
								$point_block_2 = get_field('point_block_2');
								if($point_block_2): ?>
									<div class="col-md-6">
										<div class="location-item">
											<i class="fa fa-map-marker-alt"></i>
											<div class="location-text">
												<h3><?php echo $point_block_2['point_name']; ?></h3>
												<p><?php echo $point_block_2['point_address']; ?></p>
												<p><strong>Call:</strong><?php echo $point_block_2['point_tel']; ?></p>
											</div>
										</div>
									</div>
							<?php endif; ?>
                            <?php
								$point_block_3 = get_field('point_block_3');
								if($point_block_3): ?>
									<div class="col-md-6">
										<div class="location-item">
											<i class="fa fa-map-marker-alt"></i>
											<div class="location-text">
												<h3><?php echo $point_block_3['point_name']; ?></h3>
												<p><?php echo $point_block_3['point_address']; ?></p>
												<p><strong>Call:</strong><?php echo $point_block_3['point_tel']; ?></p>
											</div>
										</div>
									</div>
							<?php endif; ?>
                            <?php
								$point_block_4 = get_field('point_block_4');
								if($point_block_4): ?>
									<div class="col-md-6">
										<div class="location-item">
											<i class="fa fa-map-marker-alt"></i>
											<div class="location-text">
												<h3><?php echo $point_block_4['point_name']; ?></h3>
												<p><?php echo $point_block_4['point_address']; ?></p>
												<p><strong>Call:</strong><?php echo $point_block_4['point_tel']; ?></p>
											</div>
										</div>
									</div>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a car wash</h3>
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p><?php the_field('team_text_1') ?></p>
                    <h2><?php the_field('team_text_2') ?></h2>
                </div>
                <div class="row">
					<?php
						$team_item_1 = get_field('team_item_1');
						if($team_item_1): ?>
							<div class="col-lg-3 col-md-6">
								<div class="team-item">
									<div class="team-img">
										<img src="<?php echo $team_item_1['team_item_foto']; ?>" alt="Team Image">
									</div>
									<div class="team-text">
										<h2><?php echo $team_item_1['team_item_fullname']; ?></h2>
										<p><?php echo $team_item_1['team_item_pos']; ?></p>
										<div class="team-social">
											<a href="<?php echo $team_item_1['twitter_href']; ?>"><i class="fab fa-twitter"></i></a>
											<a href="<?php echo $team_item_1['facebook_href']; ?>"><i class="fab fa-facebook-f"></i></a>
											<a href="<?php echo $team_item_1['linkedin_href']; ?>"><i class="fab fa-linkedin-in"></i></a>
											<a href="<?php echo $team_item_1['instagram_href']; ?>"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$team_item_2 = get_field('team_item_2');
						if($team_item_2): ?>
							<div class="col-lg-3 col-md-6">
								<div class="team-item">
									<div class="team-img">
										<img src="<?php echo $team_item_2['team_item_foto']; ?>" alt="Team Image">
									</div>
									<div class="team-text">
										<h2><?php echo $team_item_2['team_item_fullname']; ?></h2>
										<p><?php echo $team_item_2['team_item_pos']; ?></p>
										<div class="team-social">
											<a href="<?php echo $team_item_2['twitter_href']; ?>"><i class="fab fa-twitter"></i></a>
											<a href="<?php echo $team_item_2['facebook_href']; ?>"><i class="fab fa-facebook-f"></i></a>
											<a href="<?php echo $team_item_2['linkedin_href']; ?>"><i class="fab fa-linkedin-in"></i></a>
											<a href="<?php echo $team_item_2['instagram_href']; ?>"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$team_item_3 = get_field('team_item_3');
						if($team_item_3): ?>
							<div class="col-lg-3 col-md-6">
								<div class="team-item">
									<div class="team-img">
										<img src="<?php echo $team_item_3['team_item_foto']; ?>" alt="Team Image">
									</div>
									<div class="team-text">
										<h2><?php echo $team_item_3['team_item_fullname']; ?></h2>
										<p><?php echo $team_item_3['team_item_pos']; ?></p>
										<div class="team-social">
											<a href="<?php echo $team_item_3['twitter_href']; ?>"><i class="fab fa-twitter"></i></a>
											<a href="<?php echo $team_item_3['facebook_href']; ?>"><i class="fab fa-facebook-f"></i></a>
											<a href="<?php echo $team_item_3['linkedin_href']; ?>"><i class="fab fa-linkedin-in"></i></a>
											<a href="<?php echo $team_item_3['instagram_href']; ?>"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
					<?php endif; ?>
					<?php
						$team_item_4 = get_field('team_item_4');
						if($team_item_4): ?>
							<div class="col-lg-3 col-md-6">
								<div class="team-item">
									<div class="team-img">
										<img src="<?php echo $team_item_4['team_item_foto']; ?>" alt="Team Image">
									</div>
									<div class="team-text">
										<h2><?php echo $team_item_4['team_item_fullname']; ?></h2>
										<p><?php echo $team_item_4['team_item_pos']; ?></p>
										<div class="team-social">
											<a href="<?php echo $team_item_4['twitter_href']; ?>"><i class="fab fa-twitter"></i></a>
											<a href="<?php echo $team_item_4['facebook_href']; ?>"><i class="fab fa-facebook-f"></i></a>
											<a href="<?php echo $team_item_4['linkedin_href']; ?>"><i class="fab fa-linkedin-in"></i></a>
											<a href="<?php echo $team_item_4['instagram_href']; ?>"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Team End -->

<?php
get_footer();
