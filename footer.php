        </div><!-- contents -->
        <?php get_sidebar(); ?>
      </div><!--pageBody-->

      <div id="secondNavi">
        <div id="secondNaviInner">
          <ul id="s_navi" class="cf">
            <li><a href="/privacy" class="animsition-link"><i class="fa fa-chevron-circle-right"></i>&nbsp;個人情報保護方針</a></li>
          </ul>
        </div>
      </div><!--secondNavi-->

      <div id="footerWrap">
        <div id="footer">
          <ul id="f_area">
            <li><p class="f_txt_5_15"><span>オフィス</span></p><p class="txt10">〒171-0014<br />東京都豊島区池袋2-61-8<br />アゼリア青新ビル503</p><p class="text_right"><a href="/map" class="animsition-link"><i class="fa fa-angle-double-right"></i>アクセスマップへ</a></p></li>
            <li><p class="f_txt_5_15"><span>電話でのお問い合わせ</span></p><p class="tel_txt"><i class="fa fa-phone-square"></i>&nbsp;03-5962-0875</p><p class="smalltext_c">受付時間／10:00-19:00　※土日祝・年末年始を除く</p></li>
          </ul>
        </div><!--footer-->
      </div><!--footerWrap-->

      <div id="f_addressWrap">
        <div class="f_address">
          <address>&copy; 2017 朝日株式会社 Rights Reserved.</address>
        </div>
      </div><!--f_addressWrap-->

    </div><!--pageTop-->
  <script>
  $(function(){
    $('#topImage').vegas({
      slides: [
       { src: '<?php echo get_template_directory_uri(); ?>/img/top1.jpg' },
       { src: '<?php echo get_template_directory_uri(); ?>/img/top2.jpg' },
       { src: '<?php echo get_template_directory_uri(); ?>/img/top3.jpg' },
       { src: '<?php echo get_template_directory_uri(); ?>/img/top4.jpg' },
       { src: '<?php echo get_template_directory_uri(); ?>/img/top5.jpg' }
      ],
      delay: 8000,
      overlay: '<?php echo get_template_directory_uri(); ?>/img/overlay.png',
      animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ],
      transition: [ 'fade', 'zoomOut', 'swirlLeft' ],
      transitionDuration: 1500
    });
  });
  </script>
  <?php wp_footer(); ?>
</body>
</html>

