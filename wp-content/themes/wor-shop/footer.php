<footer>
    <div class="footer-bottom footer">
        <div class="container">

            <div class="footer-bottom-panel">
                <div class="footer-bottom-adress">
                    <?php global $redux_demo;?>
                    <p><?php echo  $redux_demo['opt-multitext'][0];?></p>
                    <p><?php echo  $redux_demo['opt-multitext'][1];?></p>
                    <p><?php echo  $redux_demo['opt-multitext'][2];?></p>
                </div>
                <div class="footer-bottom-social">
                    <p>давайте дружить!</p>
                    <div class="footer-bottom-social2">
                        <a href="" class="footer-social-btn"><img class="fs-icon" src="<?= get_template_directory_uri();?>/images/faceboo.png" alt=""></a>
                        <a href="" class="footer-social-btn"><img class="fs-icon" src="<?= get_template_directory_uri();?>/images/vk.png" alt=""></a>
                        <a href="" class="footer-social-btn"><img class="fs-icon" src="<?= get_template_directory_uri();?>/images/instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="developed">
                    <p>разработано:</p>
                    <a href="https://gomel.itstep.by/about-academy/" class="my-btn">Академия "Шаг"</a>
                </div>
            </div>

        </div>

    </div>
</footer>

<script src="<?= get_template_directory_uri();?>/js/jquery.js"></script>
<script src="<?= get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script src="<?= get_template_directory_uri();?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>