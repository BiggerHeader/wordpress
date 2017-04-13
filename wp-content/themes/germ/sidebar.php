<div id="sidebar">
    <?php
    if (dopt('d_same_sidebar_b') != '') {
        if (is_dynamic_sidebar())
            dynamic_sidebar('index_sidebar');
    } else {
        if (is_dynamic_sidebar() && is_home())
            dynamic_sidebar('index_sidebar');
        elseif (is_dynamic_sidebar() && is_single())
            dynamic_sidebar('single_sidebar');
        else
            dynamic_sidebar('page_sidebar');
    }
    ?>
    <aside id="text-2" class="widget widget_text">
        <h3 class="widget-title tptn_title"><span>热门文章</span></h3>
        <div class="textwidget">
            <?php
            get_most_viewed_format();
            ?>
        </div>
    </aside>

</div>
