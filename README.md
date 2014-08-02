* -----------SINGLE FILE FRAMEWORK-------------
* A single file to handle all files asbed on URL
* written by Richard Testani
* http://www.richtestani.com
* @sandman25
* version 0.5.5
* July 2014

* ============== MANUAL =======================
* Upload this file, the .htaccess and the folders.
* Inside the files directory is php file.
* This is your template. Edit this as you please.
* Go to yourdomain.com/ to see it.
* 
* With SFF you can add any page by placing
* php files in the files folder and load it via:
* yourdomain.com/my-page
*
* ---- URL Params ------------------------------
* You can pass in page params like:
* yourdomain.com/page-name/param/value
* Params are handled in pairs, so you
* should build your URLs accordingly.
*
* ---- Plugins ---------------------------------
* These are really basic includes, but lets you
* add in whatever functionality you want.
* Write your own functions which are callable
* in your pages. Simple drop a PHP file in
* the plugins folder, and go.
*
* ---- Config ----------------------------------
* You can supply your own site configurations
* by adding a php file to the config folder
* your file should consist soley of a
* multi-dimentional array named $config
* example:
* $config['page_title'] = 'My Site';
* $config['title'] = 'My Title';
* each key is available as a
* variable as its name:
* echo $title;
*
*/
