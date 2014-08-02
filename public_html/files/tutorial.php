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
                    <a href="<?php echo $sff['tuts']; ?>" class="bp-icon sff-tuts-nav" data-info="Tutorial"><span>Tutorial</span></a>
                    <a href="<?php echo $sff['download']; ?>" class="bp-icon sff-download-nav" data-info="Download"><span>Download</span></a>
                    <a href="<?php echo $sff['about']; ?>" class="bp-icon sff-about-nav" data-info="About"><span>About</span></a>
                </nav>
            </header>
            <div id="cbp-so-scroller" class="cbp-so-scroller">
                <!-- for anyone -->
                <section class="cbp-so-section">
                    <article class="cbp-so-side cbp-so-side-left">
                        <h2>Tutorial</h2>
                        <p>
                            SFF is super easy to setup a website, here is the quick setup guide.
                        <ul>
                            <li>Instllation</li>
                            <li>Create a page</li>
                        </ul>
                        </p>
                    </article>
                    <figure class="cbp-so-side cbp-so-side-right">
                        <img src="/assets/fonts/flaticons/png/emoticon.png" alt="img01">
                    </figure>
                </section>
                <section class="content">
                    <article id="installation">
                        <h2>Installation</h2>
                        <ol>
                            <li>First download SFF</li>
                            <li>Unpack it's contents</li>
                            <li>Upload evertying inside 'public' to the root folder of your website</li>
                            <li>Upload everything else outside of your root folder</li>
                            <li>Go got your browser to make sure the site loads</li>
                            <li>You're done with the installation.</li>
                        </ol>
                    </article>
                    <article id="creating-pages">
                        <h2>Creating Pages</h2>
                        <p>Creating pages is easy as writing plain HTML files. 
                            You need to make sure you place your new files in 
                            the <strong>/files</strong> directory. </p>
                        <p>Files in this directory should be named like 
                            <strong>myfile.php</strong>, so even though they
                            may be plain HTML files, they will parse as PHP
                            files. This also allows PHP to be included in your
                            files.</p>
                        <p>Once a file is uploaded here, you may refer to it like:<br>
                            http://www.mysite.com/myfile<br>
                        </p>
                        <p>That's it! Create as many files as you need for your site.</p>
                    </article>
                    <article id="params">
                        <p>If you need more than just a plain static HTML site,
                            SFF offers ways to build your site to make it dynamic.
                        </p>
                        <p><strong>URL Params</strong><br>
                            Sometimes you may need to pass in parameters to your page
                            for futher processing or to handle a situation. For
                            example if you are showing a storefront with a specific
                            product, you may want to create a single template
                            which loads products based on parameters. Simple
                            include those params in your URL<br>
                            <pre>http://mysite.com/shop/product/awesome-item</pre><br>
                            </p>
                            <p>On your page, PHP variables will be availble named<br>
                            <pre>$product</pre> with a  value of <pre>'awesome-item'</pre>
                    </p>
                    </article>
                    <article id="advanced-config">
                        <h2>Advanced: Configuration Files</h2>
                        <p>
                            If you are vuilding a full featured PHP site, you 
                            will likely need some dependencies. SFF provides
                            an architecture to easily add in your own files
                            and configurations.</p>
                        <p>To create a configuration file, create a new PHP
                            file inside the config directory just outside of your
                            sites root folder. Within the file you want to create
                            your configurations, which is essentially a multi-dimentional
                            array. Each entry should be named like:<br>
                        <pre>$config['my_var'] = 'variable value';</pre>
                        Once your file is rendered, each config key will
                        be available as it's name:
                        <pre> echo $my_var //outputs variable value</pre><br>
                        If you want to keep your variables tidy, and have
                        less potential for overwriting, use a hash as your hey.
                        <pre>$config['my_site']['title'] = 'My Wonderful Site';</pre>
                        Now you would access your variable like:
                        <pre>echo $my_site['title']; </pre>
                    </p>
                    <p>Another way to access your config value is using the built in function.
                    <pre> echo get_config_item('title', $config, 'my_site');</pre>
                    This would output 'My Wonderful Site'. if you notice, we passed
                    in a variable named $config. Where did that come from?
                    The entire config array is available to your project, and SFF
                    offers a few shortcuts to getting those values. Anyway
                    you choose to access them is the same, it's all about preference.
                    </p>
                    <p>Once you have your configuraiton file ready it's immeditly available
                        upon page rendering.</p>
                    </article>
                    <article id="advanced-plugins">
                        <h2>Advanced: Plugins</h2>
                        <p>
                            What is a plugin to SFF?
                        </p>
                        <p>A plugin is really just a PHP file which gets included
                            into your site. SFF calls any file a plugin that
                            provides new functionality to the site, whetehr
                            it be a vanilla function, a class file
                            or a third-party application like 
                            <a href="https://bitbucket.org/mailchimp/mandrill-api-php">Mandrill from MailChimp</a>
                            or <a href="https://github.com/fzaninotto/Faker">Faker</a> to create fake data. 
                        </p>
                        <p>
                            To add a new plugin, simply copy a file to the plugins folder just outside
                            of the root site folder. It should be named with a PHP extension of course.
                        </p>
                        <p>
                            While SFF plugin loading is a bit blunt, it does
                            offer a way to exclude dependencies. Often
                            you'd only need to load a 'client' file to
                            load the rest of or other files. With your
                            configuration file, use it to declare
                            any files not needed to be loaded at the time
                            the final page is rendered. Directories and
                            files not ending with '.php' will be ignored by default.
                            If you have multiple files in the plugins folder,
                            you don't needed loaded at runtime, simple include
                            a key named 'exclude' in your config.
                        <pre>$config['plugins']['exclude'] = array('filename.php')</pre>
                        </p>
                    </article>
                </section>
            </div>
        </div>
    </body>
</html>
