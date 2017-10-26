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
                        <h3 class="stabtabletitle">Normál csengetés</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Óra</th>
                                    <th>Idő</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table__headcell">1. óra</td>
                                    <td>08:00 - 08:45</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">2. óra</td>
                                    <td>08:55 - 09:40</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">3. óra</td>
                                    <td>09:50 - 10:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">4. óra</td>
                                    <td>10:50 - 11:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">5. óra</td>
                                    <td>11:45 - 12:30</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">6. óra</td>
                                    <td>12:50 - 13:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">7. óra</td>
                                    <td>13:45 - 14:30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cell tablet-6 large-6">
                        <h3 class="stabtabletitle">Rövidített órák</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Óra</th>
                                    <th>Idő</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table__headcell">1. óra</td>
                                    <td>08:00 - 08:45</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">2. óra</td>
                                    <td>08:55 - 09:40</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">3. óra</td>
                                    <td>09:50 - 10:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">4. óra</td>
                                    <td>10:50 - 11:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">5. óra</td>
                                    <td>11:45 - 12:30</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">6. óra</td>
                                    <td>12:50 - 13:35</td>
                                </tr>
                                <tr>
                                    <td class="table__headcell">7. óra</td>
                                    <td>13:45 - 14:30</td>
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