</div>
<footer id="footer" class="yahei clearfix" style="text-align: center;color: #6c645c">
   <!-- <a class=" <?php /*echo dopt('d_saying_bottom') ? 'saying-bottom' : ''; */?>">
        <?php /*echo dopt('d_notice_bottom'); */?>
    </a>-->
    <p>Powered by <a href="https://cn.wordpress.org" target="_blank" rel="nofollow">WordPress</a>, and
        theme by <a href="https://hzy.pw/p/1933" target="_blank">Moshel.</a>
        <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
            <?php echo get_option('zh_cn_l10n_icp_num'); ?>
        </a>
        <span class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?>
            </a>
        </span>
        <span>
            <a href="<?php echo esc_url(home_url('/sitemap.xml')); ?>" target="_blank">网站地图</a>
        </span>
    </p>
    <p><span id="runtime" style="color: #523f6d"></span></p>
</footer>
</div>
<a class="ttip-none rss-icon" title="Rss" href="<?php echo esc_url(home_url('/feed')); ?>" target="_blank">
    <i class="fa fa-rss"></i></a>
<style>
    a.rss-icon {
        color: #fff;
        background: #e74c3c none repeat scroll 0 0;
        display: block;
        width: 45px;
        height: 45px;
        right: 30px;
        text-align: center;
        font-size: 2rem;
        color: #47C2DC;
        border-bottom: none;
        z-index: 11;
        border-radius: 5px;
        position: fixed;
        bottom: 220px;
    }
    .fa-rss::before {
        content: "";
    }
</style>
<img id="qrimg" src=""/>
<a id="qr" href="javascript:;"  style="background: #e74c3c none repeat scroll 0 0;"><i class="fa fa-qrcode"></i></a>
<a id="gotop" title="点击返回页顶" href="javascript:;" style="background: #e74c3c none repeat scroll 0 0;"><i class="fa fa-arrow-up"></i></a>

<?php
if (dopt('d_track_b') != '')
    echo '<div class="static-hide">' . dopt('d_track') . '</div>';

wp_footer();

if (dopt('d_footcode_b') != '')
    echo dopt('d_footcode');
?>
<script>// <![CDATA[
    function runtime() {
        window.setTimeout("runtime()", 1000);
        var seconds = 1000
        var minutes = seconds * 60
        var hours = minutes * 60
        var days = hours * 24
        var years = days * 365
        var today = new Date()
        var todayYear = today.getFullYear()
        var todayMonth = today.getMonth()
        var todayDate = today.getDate()
        var todayHour = today.getHours()
        var todayMinute = today.getMinutes()
        var todaySecond = today.getSeconds()
        /* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳) year - 作为date对象的年份，为4位年份值 month - 0-11之间的整数，做为date对象的月份 day - 1-31之间的整数，做为date对象的天数 hours - 0(午夜24点)-23之间的整数，做为date对象的小时数 minutes - 0-59之间的整数，做为date对象的分钟数 seconds - 0-59之间的整数，做为date对象的秒数 microseconds - 0-999之间的整数，做为date对象的毫秒数 */
        var t1 = Date.UTC(2017, 3, 1, 1, 1, 1)
        var t2 = Date.UTC(todayYear, todayMonth, todayDate, todayHour, todayMinute, todaySecond)
        var diff = t2 - t1
        var diffYears = Math.floor(diff / years)
        var diffDays = Math.floor((diff / days) - diffYears * 365)
        var diffHours = Math.floor((diff - (diffYears * 365 + diffDays) * days) / hours)
        var diffMinutes = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours) / minutes)
        var diffSeconds = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours - diffMinutes * minutes) / seconds)
        document.getElementById("runtime").innerHTML = " 本站已运行" + diffYears + " 年 " + diffDays + " 天 " + diffHours + " 小时 " + diffMinutes + " 分钟 " + diffSeconds + " 秒"
    }
    runtime()
    // ]]></script>

</body>
</html>
