<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
    <label>
        <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>