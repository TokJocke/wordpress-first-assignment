</main>

<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar("kort-om-oss");?>
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
                    "after" => "<br>",
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

<!--  	<script src="js/script.js"></script>
 -->
<?php wp_footer(); ?>
</body>
</html>