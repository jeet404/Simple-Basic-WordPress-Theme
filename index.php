<!-- header -->
<?php get_header(); ?>


<div class="bg-img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/3017.jpg" alt="cover photo">
</div>
<div class="row">
    <div class="box">
        <div class="img">Image-1</div>
        <div class="data">
            <h3>Hello</h3>
            <p>This is first box.</p>
        </div>
    </div>
    <div class="box">
        <div class="img">Image-2</div>
        <div class="data">
            <h3>Hello</h3>
            <p>This is first box.</p>
        </div>
    </div>
    <div class="box">
        <div class="img">Image-3</div>
        <div class="data">
            <h3>Hello</h3>
            <p>This is first box.</p>
        </div>
    </div>
</div>
<?php if (have_posts()) {
    while (have_posts()) { ?>
        <div class="post-section">
            <?php the_post(); ?>
            <h2><?php echo the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>
        </div>
    <?php } ?>
<?php } ?>


<!-- footer -->
<?php get_footer(); ?>