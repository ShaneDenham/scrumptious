<?php get_header(); ?>

    <div id="js-slider" class="slider">
      <div class="slide-content">
        <h2>Beautiful gourmet cupcakes by the dozen! Perfect to sweeten up your party or event!</h2>
        <a href="#" class="btn large">Order Now</a>
      </div>
      <div id="js-slide-background" class="slide-background"></div>
    </div>

    <section class="heading">
      <div class="container">
        <h1>Gourmet Cupcakes for Any Event!</h1>
      </div>
    </section>

    <section class="services striped">
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



          <div id="js-parallax-window" class="parallax-window">
            <div class="parallax-static-content">
              <div class="parallax-message">
                <?php $the_query = new WP_Query( 'pagename=wedding-cupcakes' ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <h2><?php the_title(); ?></h2>
                    <?php endwhile; ?>

                  <?php wp_reset_postdata(); ?>

                <?php else : ?>
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

              </div>
            </div>
            <div id="js-parallax-background" class="parallax-background"></div>
          </div>



    <section class="about">
      <div class="container">
        <div class="side-image">
          <div class="images-wrapper"></div>
            <div class="side-image-content">
              <h4>Topic Name</h4>
              <h1>Message with a gradient image</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.</p>
              <a href="#" class="btn">Read more</a>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>