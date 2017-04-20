<div class="comments clearfix box" id="comments">
    <?php $comments = get_comments('post_id=' . $post->ID . '&status=approve'); ?>
    <h5 id="comments-title"><span><?php echo count($comments); ?> 条评论</span></h5>
    <div class="commentshow">
        <ol class="comments-list">
            <?php
            //
            /*$wpsmiliestrans = array(
                ':mrgreen:' => 'icon_mrgreen',
                ':neutral:' => 'icon_neutral',
                ':twisted:' => 'icon_twisted',
                ':arrow:' => 'icon_arrow',
                ':shock:' => 'icon_eek',
                ':smile:' => 'icon_smile',
                ':???:' => 'icon_confused',
                ':cool:' => 'icon_cool',
                ':evil:' => 'icon_evil',
                ':grin:' => 'icon_biggrin',
                ':idea:' => 'icon_idea',
                ':oops:' => 'icon_redface',
                ':razz:' => 'icon_razz',
                ':roll:' => 'icon_rolleyes',
                ':wink:' => 'icon_wink',
                ':cry:' => 'icon_cry',
                ':eek:' => 'icon_surprised',
                ':lol:' => 'icon_lol',
                ':mad:' => 'icon_mad',
                ':sad:' => 'icon_sad',
                '8-)' => 'icon_cool',
                '8-O' => 'icon_eek',
                ':-(' => 'icon_sad',
                ':-)' => 'icon_smile',
                ':-?' => 'icon_confused',
                ':-D' => 'icon_biggrin',
                ':-P' => 'icon_razz',
                ':-o' => 'icon_surprised',
                ':-x' => 'icon_mad',
                ':-|' => 'icon_neutral',
                ';-)' => 'icon_wink',
                '8O' => 'icon_eek',
                ':(' => 'icon_sad',
                ':)' => 'icon_smile',
                ':?' => 'icon_confused',
                ':D' => 'icon_biggrin',
                ':P' => 'icon_razz',
                ':o' => 'icon_surprised',
                ':x' => 'icon_mad',
                ':|' => 'icon_neutral',
                ';)' => 'icon_wink',
                ':!:' => 'icon_exclaim',
                ':?:' => 'icon_question',
            );
            foreach ($comments as $comment) {
                foreach ($wpsmiliestrans as $k=>$v){
                    $comment->comment_content = preg_replace("/(".$key.")/","111",$comment->comment_content);
                }
              }
              var_dump($comments);*/
            wp_list_comments('callback=comment&max_depth=1000&style=ol&per_page=' . get_option('comments_per_page'));
            ?>
        </ol>
        <nav class="commentnav"
             data-postid="<?php echo $post->ID ?>"><?php paginate_comments_links('prev_text=«&next_text=»'); ?></nav>
    </div>

    <div id="respond" class="comment-respond">
        <h5 id="replytitle" class="comment-reply-title">发表一条评论
            <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">取消回复</a>
            </small>
        </h5>
        <form action="#" method="post" id="commentform" class="clearfix">
            <?php if ($user_ID) { ?>
                <p style="margin-bottom:10px"><i class="fa fa-user"></i> 已登录为 <a
                            href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>
                    &nbsp;|&nbsp;
                    <i class="fa fa-mail-reply"></i> <a href="<?php echo wp_logout_url(get_permalink()); ?>"
                                                        title="退出登录">登出 &raquo;</a></p>
            <?php } else { ?>
                <p class="input-row replay_author"><input type="text" name="author" class="text_input" id="author"
                                                          size="22" tabindex="1" placeholder="署名 *"/>
                </p>

                <p class="input-row replay_email"><input type="text" name="email" class="text_input" id="email"
                                                         size="22" tabindex="2"
                                                         placeholder="<?php _e('E-MAIL', 'quench'); ?> *"
                                                         value="<?php echo rand() . '@random.mail' ?>"/>
                </p>

                <p class="input-row replay_url"><input type="text" name="url" class="text_input" id="url" size="22"
                                                       tabindex="3" placeholder="<?php _e('WEBSITE', 'quench'); ?>"/>
                </p>

            <?php } ?>

            <?php comment_id_fields();
            do_action('comment_form', $post->ID); ?>

            <p class="input-row message-row"><textarea class="text_area" rows="3" cols="80" name="comment" id="comment"
                                                       tabindex="4" placeholder="欢迎在这里畅所欲言..."></textarea></p>
            <script type='text/javascript' src='/wp-content/themes/germ/jsmiley.js'></script>
            <?php echo fa_get_wpsmiliestrans(); ?>
            <input type="submit" name="submit" class="button" id="submit" tabindex="5" value="提交评论"/>

        </form>
    </div>


</div>
