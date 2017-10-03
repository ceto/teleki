<?php if ( have_rows('downloads') ): ?>
    <section class="widget">
        <h3 class="widget__title">Letölthető anyagok</h3>
        <div class="widget__body">
            <ul class="dlcage">
                <?php while( have_rows('downloads') ): the_row();
                    $file = get_sub_field('csatolmany');
                ?>
                    <li class="dlcage__item">
                        <span class="dlcage__item__title"><?= $file['title']; ?></span>
                        <span class="dlcage__item__fileinfo">
                            <span class="dlcage__item__extension"><?= pathinfo($file['filename'], PATHINFO_EXTENSION); ?></span>,
                            <span class="dlcage__item__size"><?= size_format(filesize(get_attached_file($file['ID']))) ?></span>
                        </span>
                        <a class="dlcage__item__action" href="<?= $file['url']; ?>">letöltés</a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>