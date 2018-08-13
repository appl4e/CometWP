<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comet
 */

get_header();
?>
	<!-- Page Title Bar -->
	<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
	</section>
	
	<section>
      <div class="container">
        <!-- Main Content Area -->
        <div class="col-md-8">
          <div class="blog-posts">
            <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Checklists for Startups</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
              </div>
              <div class="post-media">
                <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                  <ul class="slides">
                    <li><img src="images/blog/1.jpg" alt=""></li>
                    <li><img src="images/blog/2.jpg" alt=""></li>
                    <li><img src="images/blog/3.jpg" alt=""></li>
                  </ul>
                </div>
              </div>
              <div class="post-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                <p><a href="#" class="btn btn-color btn-sm">Read More</a></p>
              </div>
            </article>
		  </div>
		  
		  <!-- Pagination -->
          <ul class="pagination">
            <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a></li>
          </ul>
		</div>
				
		<?php get_sidebar(); ?>
        
      </div>
    </section>

<?php

get_footer();
