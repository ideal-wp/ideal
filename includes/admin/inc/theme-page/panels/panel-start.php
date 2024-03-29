<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
?>
<style>.notice {display: none !important;}</style>
<?php if (!class_exists('Kirki')) {?>
<div uk-alert class="ideal-kirki-notic-admin">
  <h3><?php esc_html_e('Important Notice', 'ideal')?> </h3>
  <div class="uk-clearfix">
    <div class="uk-float-left">
      <div class="ideal-notic-admin-text"><span>
          <?php esc_html_e('Please install and activate the recommended plugins and any of the desired optional plugins which you wish to use on your site, Or Watch the video below, to know how to start', 'ideal')?>
        </span>
      </div>
    </div>
    <div class="uk-float-right">
      <div class="ideal-admin-instal"> <a
          href="<?php echo esc_url(admin_url('themes.php?page=tgmpa-install-plugins&plugin_status=activate')) ?>"
          class="uk-button uk-button-default"><?php esc_html_e('Begin Installing Plugins', 'ideal')?></a>
      </div>
    </div>
  </div>
</div>
<?php }?>
<button class="uk-button uk-button-default uk-margin-bottom" type="button"
  uk-toggle="target: +"><?php esc_html_e('Toggle The Video', 'ideal')?></button>

<iframe
  src="https://www.youtube-nocookie.com/embed/slbjwhhUC9Q?&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1"
  width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true;autoplay: false"></iframe>

<div class="ideal-admin-page-footer-start">
  <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>
      <span class="id-ad-icon"><i class="fas fa-book"></i></span>
      <h3>DOCUMENTATION</h3>
      <p>
        <?php esc_html_e('The ideal Theme is in the first release So Now The documentation is under construction and you can visit our documentation site .', 'ideal')?>
      </p>
      <a href="https://ideal.mtaman.me/docs/"
        class="uk-button uk-button-default uk-margin-bottom"><?php esc_html_e('DOCUMENTATION', 'ideal')?></a>

    </div>
    <div>
      <span class="id-ad-icon"><i class="far fa-life-ring"></i></span>
      <h3><?php esc_html_e('Support', 'ideal')?></h3>
      <p>
        <?php esc_html_e('Got any questions? Please Go Ideal WordPress Theme Support Page Ask away and we will get back to you shortly..', 'ideal')?>
      </p>
    </div>

    <div>
      <span class="id-ad-icon-smile"><i class="fas fa-smile"></i></span>
      <h3><?php esc_html_e('Please Rate us', 'ideal')?></h3>
      <p>
        <?php esc_html_e(' We understand that there can be no success, without excellent support. Could you please do us a BIG favor and give it a 5-star rating on WordPress? This would boost our motivation and help other users make a comfortable decision while choosing the Ideal theme.', 'ideal')?>
      </p>
    </div>

  </div>
</div>
