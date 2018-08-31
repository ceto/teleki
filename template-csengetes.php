<?php
/**
* Template Name: Csengetés Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-8">
                <header class="pagehead">
                    <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                    <div class="lead pagehead__lead">
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(152); ?>" class="readmore readmore--large">Hetek bosztása és részletes naptár</a></p>
                    </div>
                </header>
                <br><br>
                <div class="grid-x grid-margin-x">
                    <div class="cell tablet-6 large-6">
                        <h3>Csengetési rend</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Óra</th>
                                    <th>Idő</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0. óra</td>
                                    <td>07:30 - 08:15</td>
                                </tr>
                                <tr>
                                    <td>1. óra</td>
                                    <td>08:25 - 09:10</td>
                                </tr>
                                <tr>
                                    <td>2. óra</td>
                                    <td>09:20 - 10:05</td>
                                </tr>
                                <tr>
                                    <td>3. óra</td>
                                    <td>10:15 - 11:00</td>
                                </tr>
                                <tr>
                                    <td>4. óra</td>
                                    <td>11:10 - 11:55</td>
                                </tr>
                                <tr>
                                    <td>5. óra</td>
                                    <td>12:15 - 13:00</td>
                                </tr>
                                <tr>
                                    <td>6. óra</td>
                                    <td>13:10 - 13:55</td>
                                </tr>
                                <tr>
                                    <td>7. óra</td>
                                    <td>14:00 - 14:45</td>
                                </tr>
                                <tr>
                                    <td>8. óra</td>
                                    <td>14:50 - 15:35</td>
                                </tr>

                                <tr>
                                    <td>9. óra</td>
                                    <td>15:40 - 16:15</td>
                                </tr>
                                <tr>
                                    <td>10. óra</td>
                                    <td>16:20 - 16:55</td>
                                </tr>
                                <tr>
                                    <td>11. óra</td>
                                    <td>17:00 - 17:35</td>
                                </tr>
                                <tr>
                                    <td>12. óra</td>
                                    <td>17:40 - 18:15</td>
                                </tr>
                                <tr>
                                    <td>13. óra</td>
                                    <td>18:20 - 18:55</td>
                                </tr>
                                <tr>
                                    <td>14. óra</td>
                                    <td>19:00 - 19:35</td>
                                </tr>
                                <tr>
                                    <td>15. óra</td>
                                    <td>19:40 - 20:15</td>
                                </tr>
                                <tr>
                                    <td>16. óra</td>
                                    <td>20:20 - 20:50</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="cell tablet-6 large-6">
                        <h3>Rövidített csengetési rend</h3>
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Óra</th>
                                    <th>Idő</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0. óra</td>
                                    <td>07:40 - 08:15</td>
                                </tr>
                                <tr>
                                    <td>1. óra</td>
                                    <td>08:25 - 09:00</td>
                                </tr>
                                <tr>
                                    <td>2. óra</td>
                                    <td>09:05 - 09:40</td>
                                </tr>
                                <tr>
                                    <td>3. óra</td>
                                    <td>09:45 - 10:20</td>
                                </tr>
                                <tr>
                                    <td>4. óra</td>
                                    <td>10:25 - 11:00</td>
                                </tr>
                                <tr>
                                    <td>5. óra</td>
                                    <td>11:05 - 11:40</td>
                                </tr>
                                <tr>
                                    <td>6. óra</td>
                                    <td>11:45 - 12:15</td>
                                </tr>
                                <tr>
                                    <td>7. óra</td>
                                    <td>12:20 - 12:55</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>