flavaHeadJsPlugin
=================

Allows for easy implmentation of including your javascripts via headjs (http://headjs.com).


Installation
------------

Include the flavaHeadJsHelper in your settings file:

    
    standard_helpers:
      ...
      - flavaHeadJs
      ...


Include the `include_headjs_javascripts` tag in your template:


    ...
    <head>
      <?php include_http_metas() ?>
      <?php include_metas() ?>
      <?php include_title() ?>
      <?php include_optimized_stylesheets() ?>
      <?php include_headjs_javascripts() ?>
    </head>
    ...


That's it! You're done! You're now loading your javascripts in parallel!



Optional
--------

By default, flavaHeadJs will look for the headjs file to include via the
`script` config value in app.yml:


    all:
      flava_headjs:
        script: '../flavaHeadJsPlugin/js/head.min.js'


This can be overridden by copying the configuration to your local app.yml and
replacing to your heart's content.
