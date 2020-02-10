<?php
/**
 * The template for displaying the footer
 */

?>
    <div class="py-5 bg-primary">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center mb-3 mb-md-0">
                    <h2 class="text-uppercase text-white mb-4" data-aos="fade-up"><?php neosFooterTitle(); ?></h2>
                    <a href="<?php neosFooterLink(); ?>" class="btn btn-bg-primary font-secondary text-uppercase" data-aos="fade-up" data-aos-delay="100"><?php neosFooterText(); ?></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer bg-dark">
        <div class="container">


            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <?php get_sidebar('footer-1'); ?>
                </div>
                <div class="col-md-5 mb-4 mb-md-0 ml-auto">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <?php get_sidebar('footer-2'); ?>
                        </div>
                        <div class="col-md-6">
                            <?php get_sidebar('footer-3'); ?>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4 text-white">Stay up to date</h3>
                            <form action="#" class="d-flex footer-subscribe">
                                <input type="text" class="form-control rounded-0" placeholder="Enter your email">
                                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">

                    <div class="row">
                        <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
                        <div class="col-md-12">
                            <p>
                                <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                                <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>


                </div>

            </div>
        </div>
    </footer>
</div>

    <?php wp_footer(); ?>    
</body>
</html>