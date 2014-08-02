<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>SFF : Single File Format</title>
        <meta name="description" content="Blueprint: On Scroll Effect Layout" />
        <meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticons/flaticon.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/component.css" />
        <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="clearfix">
                <span>Single File Framework</span>
                <h1><?php echo $sff['page_title']; ?></h1>
                <nav>
                    <a href="<?php echo $sff['docs']; ?>" class="bp-icon sff-docs-nav" data-info="Documentation"><span>Documentation</span></a>
                    <a href="<?php echo $sff['tuts']; ?>" class="bp-icon sff-tuts-nav" data-info="Tutorials"><span>Tutorials</span></a>
                    <a href="<?php echo $sff['download']; ?>" class="bp-icon sff-download-nav" data-info="Download"><span>Download</span></a>
                    <a href="<?php echo $sff['about']; ?>" class="bp-icon sff-about-nav" data-info="About"><span>About</span></a>
                </nav>
            </header>
            <div>
                <section class="bp-holder">
                    <h1>What is Single File Framework?</h1>
                    <p>SFF is a simple site architecture to quickly build basic websites. You can start with a collection of HTML pages, that fit your own URL deisgn, or add in your own PHP code to build a more customized application. It's simple, and easy.
                        <div class="button-nav">
                            <span><a href="<?php echo $sff['docs']; ?>">Documentation</a></span>
                            <span><a href="<?php echo $sff['download']; ?>">Download v 0.5</a></span>
                </section>
            </div>
            <div id="cbp-so-scroller" class="cbp-so-scroller">
                <!-- for anyone -->
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>For anyone</h2>
                        <p>SFF was designed for anyone to use, for those who have zero coding skills but know how to put together an awesome site, or a skilled PHP master who needs to build a web application from a simple and sounds architecture. Hello SFF.</p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/images/emoticon.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>No Database required.</h2>
                        <p>There is no MySQL or PostgreSQL requirement here. Put away the mysqli functions for now until it's a requirement.</p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/images/database13.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/images/domain.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Simple Routing</h2>
                        <p>No special rules to create good looking URLs, just create specifiy the file in your URL and load it in your browser.</p>
                    </article>
                </section>
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>No PHP required</h2>
                        <p>You don't need to know a lick of PHP to use SFF. You barely need know HTML.</p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/images/html-tag.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/images/clean1.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Modern</h2>
                        <p>SFF is not built with a series of classes but is built on modern PHP standards. Composer; Bower; Grunt; .. are all used to setup your site and can be extended for your own use.</p>
                    </article>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/images/website3.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Not an MVC</h2>
                        <p>No controllers, no models (unless you want them of course). SSF is not an MVC. It has some building blocks of one, but is not one. SSF simply has a single controlling file and a view.</p>
                    </article>
                </section>
            </div>
        </div>
        <script src="/assets/js/vendor/classie.js"></script>
        <script src="/assets/js/vendor/cbpScroller.js"></script>
        <script>
            new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
        </script>
    </body>
</html>
