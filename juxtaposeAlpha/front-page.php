<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="Olivia Carino">
    <link rel="shortcut icon" href="images/logo.png">

    <!-- FontAwesome CSS-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <!-- Bootstrap CSS-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Theme CSS -->
    <!-- <link rel="stylesheet" href="/juxtaposeAlpha/wp-content/themes/juxtaposeAlpha/style.css"> -->

    <?php
    wp_head();
    ?>

</head>

<body>

    <header class="header text-center pl-4">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-column pl-4">
                <div id="navigation" class="collapse navbar-collapse flex-row pl-4">
                    <a class="site-title mr-4 pt-lg-0 mb-0" href="index.html"><img class="mb-3 mx-auto logo"
                            src="images/logo.png" alt="logo"></a>

                    <ul class="navbar-nav flex-row text-sm-center text-md-left pl-4 pb-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                <!--<i class="fas fa-home fa-fw mr-2"></i>-->Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page.html">
                                <!--<i class="fas fa-newspaper fa-fw mr-2"></i>-->About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <!--<i class="fas fa-donate fa-fw mr-2"></i>-->Donate</a>
                        </li>
                        <!-- <li class="nav-item">
					    <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
					</li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html">
                                <!--<i class="fas fa-archive fa-fw mr-2"></i>-->Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="contact.html">
                                <!--<i class="fas fa-envelope fa-fw mr-2"></i>-->Contact Us</a>
                        </li>
                    </ul>
                    <!-- <hr> -->
                    <!-- <ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                </ul> -->
                    <form class="form-inline pl-4 ml-4 pb-3">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">

        <header class="page-title theme-bg-light text-center py-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="navigation" class="justify-content-center collapse navbar-collapse flex-row">
                    <ul class="navbar-nav flex-row">
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span class="border-underline"><strong>News</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Sports</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Education</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Opinion</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>E-Edition</strong></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <article class="content mt-0 px-3 p-md-5">

            <!-- Container 1 -->
            <div class="container mt-0">
                <div class="row row-cols-1 row-cols-md-3 mt-4">
                    <div class="card col mb-4 mt-5 pt-3 mx-4 pb-3 shadow-sm">
                        <!-- <div class="card"> -->
                        <h4 class="card-title mb-3 text-center">Top Stories</h4>
                        <div class="shadow-sm card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Top Story</h5>
                                <p class="card-text">Aron Pilhofer dead trees learnings paidContent copyboy
                                    Nook go viral Gutenberg MinnPost A.J. Liebling WikiLeaks news.me every
                                    dog loves food Reuters, WSJ right-sizing reporting </p>
                            </div>
                        </div>
                        <div class="shadow-sm card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Top Story</h5>
                                <p class="card-text">Aron Pilhofer dead trees learnings paidContent copyboy
                                    Nook go viral Gutenberg MinnPost A.J. Liebling WikiLeaks news.me every
                                    dog loves food Reuters, WSJ right-sizing reporting </p>
                            </div>
                        </div>

                        <div class="shadow-sm card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Top Story</h5>
                                <p class="card-text">Aron Pilhofer dead trees learnings paidContent copyboy
                                    Nook go viral Gutenberg MinnPost A.J. Liebling WikiLeaks news.me every
                                    dog loves food Reuters, WSJ right-sizing reporting </p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col">
                        <div class="card text-left mt-5 shadow-sm">
                            <!-- <div class="card-header">
                            Featured
                        </div> -->
                            <img class="card-img-top" src="images/cdc.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Story Title</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a class="read-more-link" href="#"><strong>Continue Reading</strong></a>
                                <!-- <a href="#" class="btn btn-primary py-2">Read More</a> -->
                            </div>
                            <div class="card-footer text-muted">
                                By Local Newspaper /Date/
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 text-center mt-5">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Newsletter Sign up</h5>
                                <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Ad Space</h5>
                                <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Container -->

        </article>

        <!-- Footer -->
        <section class="theme-bg-dark py-4 mt-4 pl-4 text-left">
            <h3 class='text-dark d-block py-1'>Subscribe to the Daily Newsletter</h3>
            <p>Receive breaking news and updates to important stories. </p>
            <form class="signup-form form-inline justify-content-left pt-4">
                <div class="form-group">
                    <label class="sr-only" for="semail">Your email</label>
                    <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                        placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Subscribe</button>
            </form>
            <p class="copyright pt-4 pb-0"><a id="copyright-color" href="#">Juxtapose &copy; - Olivia Carino, Ev Andrews
                    &amp; Alison Jibilian</a></p>
        </section>
        <footer class="footer text-center py-4">

            <!-- Whatever -->

        </footer>

    </div>


    <!-- Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>

</body>

</html>