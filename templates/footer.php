<footer class="sitefooter" role="contentinfo">
    <div class="sitefooter__main">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-2">
                <div class="cell">
                    <p class="ficonized">
                        <svg class="icon"><use xlink:href="#icon-logo"></use></svg>
                        <strong>BGSZC Teleki Blanka Közgazdasági Szakgimnáziuma</strong><br>
                        1095 Budapest, Mester u. 23.
                    </p>
                    <p>
                        E-mail: <a href="mailto:titkarsag@teleki-bp.sulinet.hu">titkarsag@teleki-bp.sulinet.hu</a><br>
                        Telefon:&nbsp;<a href="tel:+3612159254">+36 (1) 2159 254</a>
                    </p>
                    <p>OM azonosító: 203061</p>
                    <p><a class="readmore widget__readmore" href="<?= get_permalink( 10 ) ?>">Térkép és részletek</a></p>
                </div>
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </div>
    </div>
    <div class="sitefooter__sub">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell atext-right">
                    <p>&copy; <?= date('Y') ?> BGSZC Teleki &middot; Minden jog fenntartva! &middot; <a class="fsocial" href="https://www.facebook.com/TelekiBlankaKozgazdasagiSzki/"><svg class="icon"><use xlink:href="#icon-facebook"></use></svg></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>