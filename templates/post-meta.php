<time class="prettydate" datetime="<?= get_post_time('c', true); ?>">
<div class="prettydate__inner">
    <span class="prettydate__year"><?= get_the_date('Y.'); ?></span>
    <span class="prettydate__month"><?= get_the_date('F'); ?></span>
    <span class="prettydate__day"><?= get_the_date('j.'); ?></span>
    <span class="prettydate__dayofweek"><?= get_the_date('l'); ?></span>
</div>
</time>