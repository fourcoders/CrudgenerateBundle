CrudgenerateBundle -- ALPHA VERSION
===================================

A custom crud with pagination, sort and filter for Symfony2

Add in your composer.json

    {
        "require": {
            "fourcoders/generatecrud-bundle": "dev-master"
        }
    }

Add in your app/AppKernel.php

    <?php

      // app/AppKernel.php
      public function registerBundles()
      {
        return array(
          // ...
          new Fourcoders\Bundle\CrudgenerateBundle\FourcodersCrudgenerateBundle(),
          // ...
          );
      }
