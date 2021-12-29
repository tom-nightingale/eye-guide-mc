# Web Design Boilerplate

## Contents
1. [Prerequisites](#prerequisites)
1. [Theme Setup](#theme-setup)
    1. [Adtrak Themes ([Tailwind, Twig/Timber], [Gutenberg, Tailwind, Twig/Timber])](#adtrak-themes-tailwind-twigtimber-gutenberg-tailwind-twigtimber)
    1. [Adtrak Theme with Woocommerce](#adtrak-theme-with-woocommerce)
1. [WordPress Settings](#wordpress-settings)
1. [Useful Commands](#useful-commands)
1. [Tailwind CSS](#tailwind-css)
    1. [Purge / Just-in-Time Mode](#purge--just-in-time-mode)
    1. [Critical CSS](#critical-css)
    1. [Defaults](#defaults)
1. [Before Deployment](#before-deployment)
    1. [Building production assets on DeployHQ](#building-production-assets-on-deployhq)
    1. [Building production assets locally](#building-production-assets-locally)


## Prerequisites ##
1. You need to have ```composer``` installed on your machine [https://getcomposer.org/download/](https://getcomposer.org/download/)
2. You need to have ```NodeJS 12+``` installed on your machine [https://nodejs.org/en/download/](https://nodejs.org/en/download/)
3. You need to have ```NPM``` installed on your machine [https://www.npmjs.com/get-npm](https://www.npmjs.com/get-npm)
4. You will need a local working environment (WAMP, MAMP, etc).

## Theme Setup

### Adtrak Themes ([Tailwind, Twig/Timber], [Gutenberg, Tailwind, Twig/Timber])

1. Create a new repository on gitlab (lowercase/hyphenated) and clone it to your local machine (```git clone [REPO URL] [FOLDER NAME]```)
2. Download latest release of WordPress [https://wordpress.org/latest.zip](https://wordpress.org/latest.zip) 
3. Extract Wordpress to your new folder
4. Delete the ```wp-content``` folder from your new folder
5. Download this boilerplate. Copy ```wp-content``` and ```example.gitignore``` to your folder
6. Rename the theme folder
6. Update ```style.css``` with your client name
6. Update *screenshot.png* with the client's branding
7. Rename ```example.gitignore``` to ```.gitignore``` and open the file
8. Edit lines ```5```, ```6``` & ```7``` and replace the theme name to prevent ```node_modules```, ```dist``` and ```vendor``` files being committed 
9. Create local database
10. Open the Command Line / Terminal 
11. Change Directory to the theme folder (```cd /[FOLDER NAME]/wp-content/themes/[YOUR NEW THEME NAME]```)
12. Run ```npm install```
13. Run ```composer install```
14. Open ```gulpfile.js``` in the theme folder
15. Edit line ~ ```174``` to the name of your local site. *(e.g. my-new-site.vm)*
16. Save the ```gulpfile```
17. Visit your new site in the browser and set up Wordpress **MAKE SURE YOU USE ```adtrakwp_``` AS YOUR TABLE PREFIX** (the ```wp-config``` file will be ignored by GIT)  
18. You may need to edit the ```wp-config.php``` file to change charset. Add this line if this is the case: ```define( 'DB_CHARSET', 'utf8mb4' );```
19. Log in and activate relevant plugins (except WooCoommerce plugins if you're site will not use them - delete these if so)
20. Activate your theme through the WordPress admin console
21. Delete the ```adtrak-skips``` folder from your theme if you are not using it
22. Open the Command Line / Terminal and make sure you're in your theme folder
23. Run ```npm run dev``` or ```gulp```
24. ```npm run dev``` will run the ```development``` tasks, and won't minify your SCSS nor Javascript
1. Go to [WordPress Settings](#wordpress-settings)

For the Gutenberg directions, see the README inside the theme.

#### Theme Structure ####

1. All components (```header```, ```footer```, ```phone-top-right``` etc) can be found in ```_views/_components``` 
2. All functions (```script enqueuing```, ```Custom Post Types```, ```Custom Taxonomies``` etc) can be found in ```_functions```
3. All page templates (```front-page.twig```, ```page.twig```, etc) can be found in ```_views```
4. Images, styles, js and fonts can be found in ```_resources```

### Adtrak Theme with Woocommerce

1. Follow steps 1-23 in the guide above
2. Go to the Wordpress Admin area
3. Select 'WooCommerce'
4. Follow the Woocommerce Set Up Guide, entering your clients details as required
5. Do not install any of the add ons when prompted
6. Do not install Jetpack when prompted.
7. Once complete, you can add payment gateways
8. Go to WooCommerce -> Settings -> Payments (tab)
9. Enable Paypal and Stripe and follow the set up guides
10. Enable Paypal Sandbox / Stripe Test Mode whilst testing your WooCommerce website
11. Once complete, you can add products to your website
12. Select 'Products' -> Add New
13. Scroll to the Product Data section and select your product options.
14. Publish your products
15. Continue to develop our theme
1. Go to [WordPress Settings](#wordpress-settings)

## WordPress Settings ##

1. Permalinks: ```/news/%postname%/```
2. Discussion: CHECK: Before a comment appears, comment must be manually approved
3. Discussion: CHECK: Users must be registered and logged in to comment
4. Discussion: UNCHECK: Allow people to post comments on new articles
5. Create home page, go to *Settings > Reading*, and front-page displays your new home page
6. Create your menus, and change their display locations to suit

## Useful Commands ##

The following are useful locally and when [setting up DeployHQ](https://arc.adtrak.co.uk/books/web-design-development/page/deployhq).

```npm run dev``` will run your local development

```
cd wp-content/themes/your-theme-name
npm install --save --quiet
npm run build

cd wp-content/themes/your-theme-name
composer install

```

You can use the following to exclude `node_modules` from your uploads under "Excluded Files"

```
wp-content/themes/your-theme-name/node_modules/**
```


## Tailwind CSS

We have created a [Tailwind](https://tailwindcss.com/docs/installation/) config file that is easily editable in ```tailwind.config.js```. If you need to add colours, fonts etc., they can be added or edited in this file.

You can access the primary, secondary & tertiary colours by using classes as follows:


| Default   | Light           | Dark           |
|-----------|-----------------|----------------|
| primary   | primary-light   | primary-dark   |
| secondary | secondary-light | secondary-dark |


Feel free to add your own extensions.

You can also use [Tailwind colour generators](https://tailwind.simeongriggs.dev/) to override standard colours. Using this, for example, means you override ```text-red-500``` with your own hex colour of red, instead of using Tailwind's.

### Purge / Just-in-Time Mode ###

All boilerplates have Just-in-Time mode enabled and so CSS is generated on-demand. If you are injecting classes with JS or via WordPress admin, add your class to the safelist.txt and restart your local development server.

### Critical CSS

Due to the minified and purged size of Tailwind, we can inline our CSS completely using the Twig ```source``` function. The new ```head.twig``` import checks the URL - if its a local URL, it uses a normal stylesheet link. If not, it inlines all your CSS in the head.

This has been done in the ```adtrak-child-tailwind-twig-timber``` theme.

In order for your images to work in CSS, simply use the full URL, e.g. ```background-image: url('/wp-content/themes/my-theme/_resources/images/tick.png');```

### Defaults

The default Tailwind config can be found in ```tailwind.config-default.js```. This is included by default, and is purely here for reference.

For more help with Tailwind, don't forget the [docs](https://tailwindcss.com/docs/installation/)

## Before Deployment

Before you deploy a project, you need to build the ```production``` assets. 
To do this you need to run a different ```gulp``` command.

It is recommended that [DeployHQ](http://resources.adtrak.agency/local-working-using-deployhq/) handle this.

### Building production assets on DeployHQ
1. Open deployHQ and go to your project
2. Go to 'Build Pipeline' from the left hand menu
3. Click 'NPM' from the Template options
4. In the Command textarea, enter the content below:
```
cd wp-content/themes/your-theme-name
npm install --save --quiet
npm run build
```
**Remember to change the command if you have changed the theme name!**

5. If you are using Timber/Twig, click 'Composer'
6. Enter the content below
```
cd wp-content/themes/your-theme-name
composer install --no-progress
```

### Building production assets locally

This is often good to test locally.

1. In Terminal / Hyper / CMD, navigate to your theme directory
2. Run ```npm run build``` (you can also use ```gulp --production``` if you wish)
3. Check main.min.css is minified before deployment

Note: it's best that assets are built using DeployHQ
