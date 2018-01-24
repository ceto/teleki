<div class="recommendwrap">
    <button class="recommendbtn" type="button" data-toggle="recommend-dropdown">Ajánlom ismerősnek</button>
    <div class="dropdown-pane recommend-dropdown" id="recommend-dropdown" data-dropdown data-hover="true" data-hover-pane="true" data-position="top" data-alignment="center">
        <svg class="icon"><use xlink:href="#icon-thumbs-up"></use></svg>
        <h3>Megosztásoddal segíted munkánkat!</h3>
        <p>Köszönjük.</p>
        <!-- Your like button code -->
      <div class="fb-like" data-href="<?= get_permalink(); ?>" data-layout="button" data-action="like" data-width="320" data-size="large" data-show-faces="true" data-share="true"></div>
      <div class="fb-send" data-href="<?= get_permalink(); ?>"></div>
    </div>
</div>