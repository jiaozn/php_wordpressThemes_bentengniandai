<div id="sidebar">
			<ul>
										<div id="dpage">
										<?php if(!function_exists("dynamic_sidebar")||!dynamic_sidebar()): ?>
										<?php //wp_list_pages("title_li=<h2>页面</h2>");?>
										</div>
										
										<div id="blogrollnav">
												<h2><?php _e("Links");?></h2>
												<ul>
													<?php get_links(); ?>
												</ul>
										</div>
										
										
										<div id="dtag">
													<?php if ( function_exists('wp_tag_cloud') ) : ?>
 
													<h2>标签云</h2>
													<ul>
													 <li><?php wp_tag_cloud('smallest=13&largest=13&unit=px&number=20&orderby=count&order=desc'); ?></li>
													
													</ul>
													 
													<?php endif; ?>
										</div>
										<div id="drecent">
												 <?php the_widget( 'WP_Widget_Recent_Posts'); ?> 
										</div>
										
										<div id="dcomments">
													<?php the_widget( 'WP_Widget_Recent_Comments'); ?> 
										</div>
										
										
							<!--			<div id="dmeta">
												<h2><?php //_e("Meta"); ?></h2>
													<ul><?php //wp_register();?>
															<li><?php //wp_loginout();?></li>
															<?php //wp_meta();?>
													</ul>
										</div>
							-->			
										
										<?php endif;?>
										
										
									</ul>				
						</div>
						<!--#sidebar-->