<?php get_header();?>
<!--
    Template name: prise
-->
<main class="background content">
    <section class="container">
        <h1 class="pl">прайс-лист</h1>
        <h2 class="header-text title">истинно мужская классика</h2>
    </section>

    <section class="container price-list">
        <div class="price-list-info">
            <h4>мы используем только лучшие средства:</h4>

                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('homepage-sidebar');
                ?>
        </div>
        <div class="service">
            <h4>цены на услуги наших мастеров:</h4>
            <table class="table-one">
                <tr class="table">
                    <?php global $redux_demo;?>

                    <td><?php echo $redux_demo['amenities'][0];?></td>
                    <th><?php echo $redux_demo['price-amenities'][0];?></th>
                </tr>
                <tr class="table">
                    <td><?php echo $redux_demo['amenities'][1];?></td>
                    <th><?php echo $redux_demo['price-amenities'][1];?></th>
                </tr>
                <tr class="table">
                    <td><?php echo $redux_demo['amenities'][2];?></td>
                    <th><?php echo $redux_demo['price-amenities'][2];?></th>
                </tr>

            </table>
        </div>
    </section>
    <section class="container about-us">
        <h4>несколько слов о нас:</h4>
        <div class="about-us-text">
            <div class="text1">
                <p>наша парикмахерская занимается исключительно мужскими стрижками. стрижка каждого клиента для нас-это уникальный и продуманная до мелочей работа.
                    мы не работаем на количество,мы делаем качество.</p>
            </div>
            <div class="text2">
                <p>наша мастерская расположена в центре города,
                    поэтому сделать стильную стрижку можно в любое время,даже в обеденный перерыв. здесь вы можете погрузиться
                    в удобную для вас атмосферу,чувствовать себя комфортно и свободно!

                </p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>