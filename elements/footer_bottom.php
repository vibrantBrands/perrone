<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>

<?php View::element('footer_required'); ?>

<script type="text/javascript">
    (function() {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'https://cdn.commoninja.com/sdk/latest/commonninja.js';
      document.getElementsByTagName('head')[0].appendChild(script);
    })();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/_js/lity.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/_js/main.js"></script>

</body>
</html>
