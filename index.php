<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>;charset=<?php bloginfo('charset');?>"/>
<title><?php bloginfo("name");?>
			<?php if(is_single()){?>
				Blog Archive
			<?php	}?>
			<?php wp_title();?>
</title>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
			<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen and (min-device-width:900px)" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/stylesm.css" type="text/css" media="screen and (max-device-width:900px)">
			<link id="favicon" href="favicon.ico" rel="icon" type="image/x-icon" />
			<?php wp_head();?>
</head>
<body>
			<div id="page">
				<?php get_header();?>
						<div id="wrap">
								<div id="content">
								<?php if(have_posts):?>
										
												<?php while(have_posts()):the_post();?>
													<div class="post" id="post-<?php the_ID()?>">
														<span class="post-cat"><?php the_category();?></span>
															<h2>
																	<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title();?>">
																			<?php the_title();?>
																	</a>
															</h2>
															
																<div class="apostwrap">
																		<table>
																			<tr>
																				<td>
																						<div class="posttags">
																								<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
																						</div>
																				</td>
																				<td>
																							<div class="entry">
																									<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 280,".....",'utf-8'); ?>
																							</div>
																							<!--.entry-->
																							
																								<div class="after-post">
																												<div class="post-data">
																														<span class="post-month"><?php the_time("Y 年 n 月 j 日")?></span>
																												</div>
																													
																												
																												<span class="post-hot"><?php post_views('热度：', '℃'); ?></span>
																												<span class="post-comments"><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' • ', ''); ?></span>
																								</div>
																									<!--.after-post-->
																				</td>
																			</tr>
																		</table>
																</div>
																<!--.apostwrap-->
																
													</div>
													<!--.post-->
												<?php endwhile;?>
												<div class="navigation">
													<span class="next-entires">
																<?php previous_posts_link("<前一页"); ?>
														</span>
														<span class="previous-entries">
																<?php next_posts_link("后一页>"); ?>
														</span>
													
														
												</div>
								<?php else: ?>
												<div class="post">
														<h2><?php _e("Not Found"); ?></h2>
												</div>
								<?php endif; ?>
								</div>
								<!--#content-->
										<?php get_sidebar();?>
										
						</div>
						<!--#wrap-->
						<?php get_footer();?>
			</div>
			<!-- #page -->
			<?php wp_footer();?>
	</body>
</html>