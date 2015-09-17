<?php get_header(); ?>
<?php
	query_posts('posts_per_page=1');
	while(have_posts()) : the_post(); ?>
	<div class="jumbotron">
  
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>Latest Post</a></h2>
	<p><?php the_excerpt(); ?></p>
  </div>
	<?php endwhile; wp_reset_query(); ?>
	<div class="panel panel-default panel-body">
	<div class="col-md-2">
	<ul class="nav nav-pills nav-stacked">
	<?php wp_list_categories('orderby=name&title_li='); ?>
	</ul>
	</div>
	<div class="col-md-5">
	<?php while(have_posts()) : the_post(); ?>
	<div class="thumbnail">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?>Latest Post</a></h4>

								<img src="images/img1.jpg" alt="29 abandoned places" width="600px">
								
								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> <sup>$</sup>39</div>
								
								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>
									
									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>
									
									<p><a href="https://www.udemy.com/build-beautiful-html5-website/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
	<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="col-md-5">
	<?php while(have_posts()) : the_post(); ?>
	<div class="thumbnail">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?>Latest Post</a></h4>

								<img src="images/img1.jpg" alt="29 abandoned places" width="600px">
								
								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> <sup>$</sup>39</div>
								
								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>
									
									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>
									
									<p><a href="https://www.udemy.com/build-beautiful-html5-website/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
	<?php endwhile; wp_reset_query(); ?>
	</div>
	</div>
						<div class="row">
						<div class="col-md-6">
							<div class="thumbnail">
								<img src="images/img1.jpg" alt="29 abandoned places" width="600px">
								
								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> <sup>$</sup>39</div>
								
								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>
									
									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>
									
									<p><a href="https://www.udemy.com/build-beautiful-html5-website/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
						
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="padding-bottom: 10px" src="images/about/graphics.png" alt="Web Hosting 101">
								
								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> Free</div>
								
								<div class="caption" style="padding-top: 0px"">
									<h3>Web Hosting 101</h3>
									
									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>
									
									<p><a href="https://www.udemy.com/web-hosting-101/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/web-hosting-101/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
	
			</div><!-- end row -->
	
<?php get_header(); ?>
  

	


	
<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

	

	
		
<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->	
	      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead" style="background-color: gray">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/about/graphics.png" alt="Generic placeholder image">
        </div>
      </div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="thumbnail">
								<img src="images/about/web1.png" alt="PSD to HTML5 & CSS3">
								
								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> <sup>$</sup>39</div>
								
								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>
									
									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>
									
									<p><a href="https://www.udemy.com/build-beautiful-html5-website/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
						
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="padding-bottom: 10px" src="images/about/graphics.png" alt="Web Hosting 101">
								
								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> Free</div>
								
								<div class="caption" style="padding-top: 0px"">
									<h3>Web Hosting 101</h3>
									
									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>
									
									<p><a href="https://www.udemy.com/web-hosting-101/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/web-hosting-101/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
	
			</div><!-- end row -->
			
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-thumbnail width="300px" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
         <div class="col-lg-3">
          <img class="img-thumbnail width="300px" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
         <div class="col-lg-3">
          <img class="img-thumbnail width="300px" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		 <div class="col-lg-3">
          <img class="img-thumbnail width="300px" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  <?php get_footer(); ?>


      //im working on it still
