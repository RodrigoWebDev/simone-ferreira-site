<?php get_header();?>
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5 text-shadow text-center text-uppercase"><?php  the_title();?></h1>
                        <a href="#page" class="hover btn btn-outline mx-auto d-block btn-xl js-scroll-trigger text-shadow box-shadow">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <section id="page" class="container">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?>

        <p><?php the_content();?></p>

        <?php
                }
            }
        ?>
    </section>
<?php get_footer();?>