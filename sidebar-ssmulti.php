<!-- sidebar.phpで出力される -->
<div class="side">
    <aside>
        <h2 class="side__headline">絞り込み</h2>

        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="" class="searchform">
            <input type="hidden" name="search_type" value="tuusyo">
            <input name="catnum" type="hidden" value="3" />
            <input name="post_tag" type="hidden" value="daycare" />
            <input type="text" name="s" id="s" class="ssmulti" placeholder="キーワード検索" />
            
            <!-- <select name="catnum" class="searchfield">
                <option value="" selected>カテゴリー</option>
                <?php
                    $categories = get_categories();
                    foreach($categories as $category) :
                ?>
                    <option value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>
                <?php endforeach; ?>
            </select>

            <select name='post_tag' id='tag'  class="searchfield">
                <?php $tags = get_tags(); if ( $tags ) : ?>
                <option value="" selected="selected">タグ選択</option>
                <?php foreach ( $tags as $tag ): ?>
                <option value="<?php echo esc_html( $tag->slug);  ?>"><?php echo esc_html( $tag->name ); ?></option>
                <?php endforeach; ?>
                <?php endif; ?>
            </select> -->
            
            <select name="office_area" class="searchfield" >
                <option value="" selected>地域名</option>
                <option value="大麻">大麻</option>
                <option value="野幌">野幌</option>
                <option value="江別">江別</option>
                <option value="その他">その他</option>
            </select>

            <select name="kaigo_sougei" class="searchfield" >
                <option value="" selected>送迎なし</option>
                <option value="送迎可能">送迎可能</option>
            </select>

            <select name="kaigo_bath" class="searchfield" >
                <option value="" selected>入浴なし</option>
                <option value="入浴可能">入浴可能</option>
            </select>

            <div class="search-submit">
                <button type="submit" value="検索"></button>
            </div>
        </form>
    </aside>
</div>