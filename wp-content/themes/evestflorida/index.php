<?php get_header(); ?> 





<?php if (of_get_option('w2f_feat_slide')== "1") { ?>

<div class="container" id="feature">

	<div class="flexslider">

		  <ul class="quick-links">

		  	<li class="q1"><a href="<?php echo home_url(); ?>/residential-application">Residential<span><br>Property Owner >> </span></a></li>

		  	<li class="q2"><a href="<?php echo home_url(); ?>/residential-application">Small Business<span><br>Property Owner >> </span></a></li>

		  	<li class="q3"><a href="<?php echo home_url(); ?>/commerical-property-application">Commercial<span><br>Property Owner >> </span></a></li>

		  	<li class="q4"><a href="<?php echo home_url(); ?>/authorized-contractor-application">Contractor >> </a></li>

		  </ul>

 	  <ul class="slides">

	 	<?php 	$count = of_get_option('w2f_slide_number');

				$slidecat = of_get_option('w2f_slide_categories');

				$query = new WP_Query( array( 'cat' => $slidecat,'posts_per_page' =>$count ) );

	           	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>


			   <li> 

				<?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'top_feature'); ?>	
				
				<?php if ( in_category( 'video' ) ){ ?>
				  <a data-toggle="modal" data-target="#videoModal" href="" title="Click to View Video"><img src="<?php echo $image_attr[0]; ?>"></a>
				<?php } else { ?>
				  <a href="<?php echo home_url(); ?>/about">	<img src="<?php echo $image_attr[0]; ?>"></a>
				<?php } ?>


				<div class="flex-caption"> 

					<h3> <?php the_title(); ?></h3> 

				</div>
 

		</li>

		<?php endwhile; endif; ?>

	  </ul>

	</div>

</div>


<!-- #videoModal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">About the E|VEST Florida Program &amp; PACE Financing in Florida</h3>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ePP3JmCnOIA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php } ?>



 <!-- end feature -->





<?php if (of_get_option('w2f_callout_box')== "1") { ?>

<div class="container" id="callout">

	<p> <?php echo of_get_option('w2f_callout'); ?> </p>

	<p class="about">Property Assessed Clean Energy (PACE) is a way to finance energy efficiency, renewable energy and wind-hardening improvements through a long-term property assessment. E|VEST Florida is the Sunshine State's PACE solution offered through the Florida PACE Funding Agency, a special purpose unit of government  formed by Flagler County and the City of Kissimmee as a public service to benefit all eligible property owners in subscribing counties.</p>
	<!--<iframe style="margin:1em 0" width="864" height="486" src="//www.youtube.com/embed/ePP3JmCnOIA?showinfo=0&theme=light" frameborder="0" allowfullscreen></iframe>-->
</div>

<?php } ?>



 <!-- end callout -->





<div class="container" id="recent-posts">

	

<div class="section group">

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/icon_check.png"/></div>

			<h2><a href="<?php echo home_url( '/apply-now/' ); ?>">Apply For Financing</a></h2> 	

			<p>Apply for financing through the E|VEST Florida program.</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/apply-now/">Learn More</a></span>

			</div>

	</div>

	

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/icon_rsvp.png"/></div>



			<h2><a href="<?php echo home_url( '/workshop-registration' ); ?>">E|VEST Events</a></h2> 	

			<p>RSVP for upcoming E|VEST Program Events.</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/workshop-registration">Learn More</a></span>

			</div>

	</div>

	

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/icon_contractor.png"/></div>



			<h2><a href="<?php echo home_url( '/apply-now/authorized-contractor-application/' ); ?>">Become a Contractor</a></h2> 	

			<p>Learn how to become an E|VEST Florida authorized contractor.</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/authorized-contractor-application/">Learn More</a></span>

			</div>

	</div>

	

</div><!-- end section group -->







<div class="section group">

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/icon_light.png"/></div>



			<h2><a href="<?php echo home_url( '/energy-savings' ); ?>">Energy Savings</a></h2> 	

			<p>How making these improvements could save you money.</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/energy-savings">Learn More</a></span>

			</div>

	</div>

	

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/area_icon.png"/></div>



			<h2><a href="<?php echo home_url( '/participating-areas' ); ?>">Participating Areas</a></h2> 	

			<p>Is E|VEST Florida Financing available in where you live?</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/participating-areas">Learn More</a></span>

			</div>

	</div>

	

	<div class="col span_1_of_3">

			<div class="panelpost">

			<div class="evest-icon"><img src="<?php bloginfo('template_directory'); ?>/images/icon_solar.png"/></div>



			<h2><a href="<?php echo home_url( '/qualifying-improvements' ); ?>">Qualifying Improvements</a></h2> 	

			<p>Find out which improvements are available for financing.</p>

			<span class="button2"><a href="<?php echo home_url(); ?>/qualifying-improvements">Learn More</a></span>

			</div>

	</div>

	

</div><!-- end section group -->

	

	

</div><!-- end container -->

<?php get_footer(); ?>


