<!-- Footer -->
<section class="footer-widgets">
    <div class="container">
        <div class="row">
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-1' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-1' ); ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-2' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-2' ); ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-3' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-3' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#" class="text-white text-decoration-none" >About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a class="text-white text-decoration-none" href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a class="text-white text-decoration-none" href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a class="text-white text-decoration-none" href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="text-white fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="text-white  fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="text-white fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>