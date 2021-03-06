<?php
$today = date("l F jS, Y");
?>
    <footer>
      <div id="footericon">
          <a href="mailto:carry0987@gmail.com" title="carry0987 Email" style="text-decoration:none;" target="_blank">
          <img class="imgspace" src="./static/icon.php?file=email.svg"  width="30px"/>
          </a>
          <a href="https://www.facebook.com/carry0987/" title="carry0987 Facebook" style="text-decoration:none;" target="_blank">
          <img class="imgspace" src="./static/icon.php?file=facebook.svg"  width="30px"/>
          </a>
          <a href="https://github.com/carry0987/" title="carry0987 GitHub" style="text-decoration:none;" target="_blank">
          <img class="imgspace" src="./static/icon.php?file=github.svg"  width="30px"/>
          </a>
      </div>
      <?php echo "\t".'<p>&copy 2017 - '.$today.'</p>'."\n"; ?>
      <div class="change_language">
        <select class="language" name="change_language" onChange="location = this.options[this.selectedIndex].value;">
          <option selected disabled hidden>Language</option>
          <option value="./admin/change_language.php?lang=en_US">English</option>
          <option value="./admin/change_language.php?lang=zh_TW">Chinese</option>
        </select>
      </div>
      <div id="footer">
          <p><img class="rotate" src="./static/icon/logo.png"><br>
            Made By <a class="developer" href="https://carry0987.github.io/" target="_blank">carry0987</a> <?php echo $version; ?></p>
      </div>
    <script type="text/javascript">
        var degrees = 0;
        $(".rotate").click(function(){
            degrees += 360;
            $(this).css({
                "transform" : "rotate("+degrees+"deg)",
                "-ms-transform" : "rotate("+degrees+"deg)",
                "-moz-transform" : "rotate("+degrees+"deg)",
                "-webkit-transform" : "rotate("+degrees+"deg)",
                "-o-transform" : "rotate("+degrees+"deg)"
            });
        });
    </script>
    </footer>
    </div>
    <script src="./static/js.php?file=menu.js" type="text/javascript"></script>
</body>
</html>