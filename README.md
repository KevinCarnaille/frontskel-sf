Front-End Skeleton for Symfony2 Development

================

# Installation requirements:

- php composer.phar install
- php app/console assets:install web --symlink


To run properly the less compilation, don't forget to mention your nodejs path in app/config/config.yml.
For mac users, it can be something like that :

```
# Assetic Configuration
assetic:
   node: /usr/local/bin/node
```

# Components:

## - Bundles/override :

- leafo/lessphp to compile less
- TwigBundle override to stylize 404/500 error pages
- Sonata-project/SonataSeoBundle ([documentation](https://sonata-project.org/bundles/seo/master/doc/index.html))

## - Front-End :

- **CSS Framework KNACSS** (lighter than Bootstrap or Foundation). You can read all the documentation (in french) about it [here](http://knacss.com) or [here](https://github.com/raphaelgoetter/KNACSS):
UPDATE 19/09/15 : An experimental css framework is in development process. It will be added to knacss, like an extension.
If you want to use a more popular CSS framework in your project, you can use bower or npm to save the one you prefer :
```
bower install bootstrap
```

- **Iconic font and CSS toolkit FONT-AWESOME**. Documentation here: http://fortawesome.github.io/Font-Awesome/

- **CSS pre-processor LESS** for every external and internal components (with the help of leafo/lessphp bundle).

- **HTML5shiv.js / Placeholder.js / Respond.js** for all < IE9 issues

- **Cookie Consent** script made by Silktide (https://silktide.com/tools/cookie-consent/download/)

=================

# Work in Progress

Any ideas, submissions or improvements are welcome

