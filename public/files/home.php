<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Blueprint: On Scroll Effect Layout</title>
        <meta name="description" content="Blueprint: On Scroll Effect Layout" />
        <meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo DS.ASSETS.DS; ?>fonts/flaticons/flaticon.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DS.ASSETS.DS; ?>css/layout.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DS.ASSETS.DS; ?>css/component.css" />
        <script src="<?php echo DS.ASSETS.DS; ?>js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="clearfix">
                <span>Single File Framework</span>
                <h1>A PHP based framework</h1>
                <nav>
                    <a href="/docs" class="nav-icon flaticon-information12" data-info="Tutorial"><span>Tutorial</span></a>
                    <a href="/docs" class="nav-icon flaticon-information12" data-info="Documentation"><span>Documentation</span></a>
                    <a href="/docs" class="nav-icon flaticon-information12" data-info="About Author"><span>Author</span></a>
                </nav>
            </header>
            <div>
                <section class="bp-holder">
                    <h1>What is SFF?</h1>
                    <p>Single file framework is a simple site architecture to quickly build basic websites. You can start with a collection of HTML pages, that fit your own URL deisgn, or add in your own PHP code to build a more customized application. It's simple, and easy.
                        <div class="button-nav">
                            <span><a href="/docs">Documentation</a></span>
                            <span><a href="/download">Download v 0.5</a></span>
                </section>
            </div>
            <div id="cbp-so-scroller" class="cbp-so-scroller">
                
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>No Database</h2>
                        <p>There is no need to store anything in a database. Just put your content into plain HTML files and save. </p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/fonts/flaticons/png/database13.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/fonts/flaticons/png/domain.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Simple Routing</h2>
                        <p>Use the URL to direct which file to load. No crazy setup, just point to the file you want. If you need, you can specifiy special routes for your files, and it's easy to do. Check out the routing documentation</p>
                    </article>
                </section>
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>No PHP required</h2>
                        <p>You don't need to know a lick of PHP to use SFF. You barely need know HTML.</p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/fonts/flaticons/png/html-tag.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/fonts/flaticons/png/clean1.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Not OOP</h2>
                        <p>SFF is not built with OOP. But it's built with a super clean setup which you can build your own app with OOP standards.</p>
                    </article>
                </section>
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>For anyone</h2>
                        <p>SFF was designed for anyone to use, whether you have zero coding skills but know how to put together an awesome site, or a skilled PHP master who wants to put together a web application wth minimal footprint... here it is.</p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/fonts/flaticons/png/emoticon.png" alt="img01">
                    </figure>
                </section>
                <section class="cbp-so-section">
                    <figure class="cbp-so-side cbp-so-side-left">
                        <img src="/assets/fonts/flaticons/png/website3.png" alt="img01">
                    </figure>
                    <article class="cbp-so-side cbp-so-side-right">
                        <h2>Not an MVC</h2>
                        <p>No controllers, no models (unless you want them of course). SSF is not an MVC. It has some building blocks of one, but is not one. SSF simply has a single controlling file and a view.</p>
                    </article>
                </section>
            </div>
        </div>
        <script src="js/classie.js"></script>
        <script src="js/cbpScroller.js"></script>
        <script>
            new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
        </script>
    </body>
</html>
