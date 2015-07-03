<?php get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="js-parallax-window" class="parallax-window">
      <div class="parallax-static-content">
      </div>
      <div id="js-parallax-background" class="parallax-background"></div>
    </div>

    <section class="about striped">
      <div class="container">
        <div class="side-image">
          <div class="images-wrapper"></div>
            <div class="side-image-content">
              <h1><?php the_title() ?></h1>
              <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <div class="service">
          <div class="service-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
          </div>
          <div class="service-header">
            First service
          </div>
          <div class="service-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
        </div>

        <div class="service">
          <div class="service-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
          </div>
          <div class="service-header">
            Another service
          </div>
          <div class="service-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
        </div>

        <div class="service">
          <div class="service-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
          </div>
          <div class="service-header">
            The Last service
          </div>
          <div class="service-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
        </div>
      </div>
    </section>

<?php endwhile; else : ?>

    <p>Sorry! Couldn't find what you were after!</p>

<?php endif; get_footer(); ?>