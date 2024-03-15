<?php 
/*
Template Name: お問い合わせ
Template Post Type: page, post
*/
?>

<?php get_header('noheader');?>

<section class=top-wrap>
    <h1>事業者の方へ</h1>
    <p>情報の追加、修正などについては<br>お気軽にお問い合わせください。</p>
        <?php echo do_shortcode('[wpforms id="918"]'); ?>
</section>

<?php get_footer();?>