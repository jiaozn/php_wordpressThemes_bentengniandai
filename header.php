<div id="header">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?093da3e15bd84661baa3141fad89e73e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<div id="navico" onclick="smenu()">
								</div>
								<h1>
										<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>" id="webt">
												<?php bloginfo("name");?>
										</a>
								</h1>
								<p id="webd"><?php bloginfo("description");?></p>
								<div id="nav">
									<ul id="navu">
									<?php wp_list_categories('hide_empty=0&show_count=0&style=list&depth=0&orderby=name&title_li=0');?>
									</ul>
									<?php include(TEMPLATEPATH."/searchform.php");?>
								</div>
								
</div>
						<!-- #header -->