<!-- sidebar.phpで出力される -->
<div class="side">
    <aside>
        <h2 class="side__headline">絞り込み</h2>

        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="" class="searchform">
            <input type="hidden" name="search_type" value="houmon">
            <input name="catnum" type="hidden" value="2" />
            <input name="post_tag" type="hidden" value="rihabili" />
            <input type="text" name="s" id="s" class="searchfield" placeholder="キーワード検索" />
            
            <select name="office_area" class="searchfield" >
                <option value="" selected>地域名</option>
                <option value="大麻">大麻</option>
                <option value="野幌">野幌</option>
                <option value="江別">江別</option>
                <option value="その他">その他</option>
            </select>

            <div class="search-submit">
                <button type="submit" value="検索"></button>
            </div>
        </form>
    </aside>
</div>