<footer class="g-footer">
        <div class="g-footer__wrap">
          <p class="g-footer__copy">Copyright &copy; 地域と文化の魅力ラボ All Rights Reserved.</p>
        </div>
      </footer>
    </div>
  </div>


  <!-- hamburger -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <script>
    let ua = navigator.userAgent.toLowerCase();
    let isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

    if (isMobile) {
      $('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
    } else {
      $('head').prepend('<meta name="viewport" content="width=1280">');
    }
  </script>
  <script>
    // ハンバーガーメニュー内のすべてのリンクにイベントリスナーを追加
    const hamburgerLinks = document.querySelectorAll('.hamburger-menu a');
    hamburgerLinks.forEach(link => {
      link.addEventListener('click', () => {
        // メニューを閉じるためにメニューボタンのチェックを外す
        document.getElementById('menu-btn').checked = false;
      });
    });
  </script>
  <?php wp_footer(); ?>
</body>

</html>