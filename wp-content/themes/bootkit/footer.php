<!-- <div class="container">
    <div id="bootkit_loadmore" class=" btn btn-primary">Load more</div>
</div>
<script>
var ajaxurl = 'http://localhost/mytheme/wp-admin/admin-ajax.php';
var bootkit_posts = 'a:63:{s:5:"error";s:0:"";s:1:"m";s:0:"";s:1:"p";i:0;s:11:"post_parent";s:0:"";s:7:"subpost";s:0:"";s:10:"subpost_id";s:0:"";s:10:"attachment";s:0:"";s:13:"attachment_id";i:0;s:4:"name";s:0:"";s:8:"pagename";s:0:"";s:7:"page_id";i:0;s:6:"second";s:0:"";s:6:"minute";s:0:"";s:4:"hour";s:0:"";s:3:"day";i:0;s:8:"monthnum";i:0;s:4:"year";i:0;s:1:"w";i:0;s:13:"category_name";s:0:"";s:3:"tag";s:0:"";s:3:"cat";s:0:"";s:6:"tag_id";s:0:"";s:6:"author";s:0:"";s:11:"author_name";s:0:"";s:4:"feed";s:0:"";s:2:"tb";s:0:"";s:5:"paged";i:0;s:8:"meta_key";s:0:"";s:10:"meta_value";s:0:"";s:7:"preview";s:0:"";s:1:"s";s:0:"";s:8:"sentence";s:0:"";s:5:"title";s:0:"";s:6:"fields";s:0:"";s:10:"menu_order";s:0:"";s:5:"embed";s:0:"";s:12:"category__in";a:0:{}s:16:"category__not_in";a:0:{}s:13:"category__and";a:0:{}s:8:"post__in";a:0:{}s:12:"post__not_in";a:0:{}s:13:"post_name__in";a:0:{}s:7:"tag__in";a:0:{}s:11:"tag__not_in";a:0:{}s:8:"tag__and";a:0:{}s:12:"tag_slug__in";a:0:{}s:13:"tag_slug__and";a:0:{}s:15:"post_parent__in";a:0:{}s:19:"post_parent__not_in";a:0:{}s:10:"author__in";a:0:{}s:14:"author__not_in";a:0:{}s:19:"ignore_sticky_posts";b:0;s:16:"suppress_filters";b:0;s:13:"cache_results";b:1;s:22:"update_post_term_cache";b:1;s:19:"lazy_load_term_meta";b:1;s:22:"update_post_meta_cache";b:1;s:9:"post_type";s:0:"";s:14:"posts_per_page";i:4;s:8:"nopaging";b:0;s:17:"comments_per_page";s:2:"50";s:13:"no_found_rows";b:0;s:5:"order";s:4:"DESC";}';
var current_page = 1;
var max_pages = 6;
</script> -->
<!-- Footer --> 
 <?php echo do_shortcode('[breadcrumbs]'); ?>
<footer class="py-5 bg-dark">
    <div class="container">
    <?php echo get_theme_mod('bootkit_footer_copyright_text'); ?>):
    </div>
  
    <!-- /.container -->
</footer>
<?php wp_footer();?>
<!-- Ajax button
<button id="bootkit_button">Отправить</button>
    <script>
jQuery(function($) {
    $('#bootkit_button').click(function() {
        $.ajax({
            url: '<?php echo admin_url("admin-ajax.php") ?>',
            type: 'POST',
            data: 'action=bootkit&param1=2&param2=3', // передаем данные – 2 и 3
            beforeSend: function(xhr) {
                $('#bootkit_button').text('Загрузка, 5 сек...');
            },
            success: function(data) {
                $('#bootkit_button').text('Отправить');
                alert(data);
            }
        });
    });
});
    </script> -->
</body>
</html>