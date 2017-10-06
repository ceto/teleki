<?php
/**
* Template Name: Naptár Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
            <div class="cell large-10">
            <header class="pagehead ps ps--narrow">
                <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                <div class="lead pagehead__lead">
                    <?php the_excerpt(); ?>

                    </div>
                <p><a target="_blank" href="https://calendar.google.com/calendar/embed?src=hu.hungarian%23holiday%40group.v.calendar.google.com&ctz=Europe/Budapest" class="button small">Új ablakba</a> <a href="https://calendar.google.com/calendar/ical/hu.hungarian%23holiday%40group.v.calendar.google.com/public/basic.ics" class="button small">iCal</a></p>
            </header>

        </div>
    </div>
</div>
<div class="ps ps--xlight ps--narrow ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="cell">
                <iframe class="gcal" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=hu&amp;bgcolor=%23FCFCFC&amp;src=hu.hungarian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Europe%2FBudapest" style="border-width:0" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>