Front-End Skeleton for Symfony2 Development

================

# Installation requirements:

- php composer.phar install
- php app/console assets:install web --symlink


# Components:

- The project involves the (very light) CSS Framework KNACSS. You can read all the documentation (in french) about it here:
http://knacss.com or https://github.com/raphaelgoetter/KNACSS
UPDATE 13/09/15 : An experimental css framework is in development process. It will be added to knacss.
You will have to choose the one your prefer, edit files and base.html.twig assetic links.

- Iconic font and CSS toolkit FONT-AWESOME. Documentation here: http://fortawesome.github.io/Font-Awesome/

- Frontskel-sf project uses the CSS pre-processor LESS for every external and internal components (with the help of leafo/lessphp bundle).

- HTML5shiv.js / Placeholder.js / Respond.js for all < IE9 issues

=================

# Work in Progress

To run properly the less compilation, don't forget to mention your nodejs path in app/config/config.yml:

For mac users, it can be something like that :

```
# Assetic Configuration
assetic:
   node: /usr/local/bin/node
```


Any ideas, submissions or improvements are welcome

