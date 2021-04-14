</main>

<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar("kort-om-oss");?>
          <!--       <h4>Kort om oss</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
                <p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p> -->
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar("kontaktuppgifter");?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Social media</h4>
                <?php wp_nav_menu([//Icon ligger för nära footer pågrund av att classen läggs till genom adminPanelen behöver fixa <icon>
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'social',
                    'container' => false,
                ]); ?>
  
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- 	<script src="js/script.js"></script>
-->
<?php wp_footer(); ?>
</body>
</html>