CrudgenerateBundle -- ALPHA VERSION
===================================

A custom crud with pagination, sort and filter for Symfony2

IMPORTANT!!!!!!!!!!! Symofny >= 2.3.0

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

Use KnpPaginatorBundle for pagination. View https://github.com/KnpLabs/KnpPaginatorBundle for configure it.