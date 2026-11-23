<?php
    //Template Name: ARCHIVES

// Aquí tenemos que anexar header.php
get_header();
?>

<!-- Preloader-->
<div class="page-loader">
    <div class="loader"></div>
</div>
<!-- Preloader end-->

<!-- Header-->
<header class="header header-transparent">
    <!-- Top bar-->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-left-align">
                        <li>Mon - Fri: 07:00 am - 05:00 pm</li>
                        <li><abbr title="Phone">P:</abbr> +39 02 87 21 43 19</li>
                        <li><a href="start.html" data-color="#e1be64">Demos</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="top-bar-tools">
                        <li><a class="open-offcanvas" href="#"><i class="ti-menu"></i></a></li>
                        <li><a href="sign-in.html"><i class="ti-search"></i></a></li>
                        <li><a href="sign-in.html"><i class="ti-user"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation navigation-center">
        <div class="container-fluid">
            <!-- Brand-->
            <div class="inner-header"><a class="inner-brand" href="index.html"><img class="brand-dark"
                        src="assets/images/logo.png" width="74px" alt=""><img class="brand-light"
                        src="assets/images/logo-light.png" width="74px" alt=""></a></div>
            <!-- Navigation-->
            <?php get_template_part('nav'); ?>
        </div>
    </div>
    </div>
</header>
<!-- Header end-->

<!-- Wrapper-->
<div class="wrapper">

    <!-- Hero-->
    <section class="module-cover parallax"
        data-background="<?php echo get_template_directory_uri();?>/assets/images/chef-1.png" data-overlay="1"
        data-gradient="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="display-1">ARCHIVES</h2>
                        <p>Surf my Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero end-->

    <section class="module">
        <div class="container">
            <div class="row blog-masonry">



                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Last Entries</h4>
                                </div>
                                
                                <div class="card-body">
                                    <ul class="last-entries">
                                    <?php
                                        $args = array (
                                            'limit' => 15, //15 posts máximo, los más actuales
                                            'type' => 'postbypost', //devuelve títulos en vez de meses que en su comportamiento por defecto
                                        );
                                        wp_get_archives( $args );                                    
                                    ?>
                                    </ul>
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Recipes</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Categories</h4>
                                </div>
                                
                                <div class="card-body">
                                    <ul class="list-categories">
                                        <?php
                                            wp_list_categories('title_li=&show_count=1');
                                        ?>
                                    </ul>
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Tags</h4>
                                </div>
                                
                                <div class="card-body">
                                <ul class="list-tags">
                                        <?php
                                            echo get_tags_list();
                                        ?>
                                </ul>
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Author</h4>
                                </div>
                                
                                <div class="card-body">
                                <ul class="list-author">
                                    <?php
                                        wp_list_authors('hide_empty=0&optioncount=1&order=DESC&orderby=post_count');
                                    ?>
                                </div>

                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Most commented posts</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Most popular posts</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Fechas</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>

                        <div class="col-md-4 post-item">
                            <!-- Post-->
                            <article class="post bordered">
                                <div class = "card-header">
                                    <h4>Last Entries</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                </div>

                                <div class="card-footer">
                                
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>



                        



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-mY="50px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"><a class="btn btn-black" href="#">Load More</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-mY="100px"></div>
                </div>
            </div>
        </div>
    </section>

    <svg class="footer-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
        viewbox="0 0 100 100" preserveaspectratio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"></path>
    </svg>
    
</div>


<?php
// Aquí tenemos que anexar footer.php
get_footer();
?>