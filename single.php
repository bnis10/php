<?php
get_header();
echo "This is single page of the post";
while(have_posts()){
	the_post(); 
?>	
<h1> <a href="<?php the_permalink();?>"><?php the_title();?></a> </h1>
<p><?php the_content();?> </p>
<?php
}
?>