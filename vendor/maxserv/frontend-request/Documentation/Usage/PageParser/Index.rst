.. include:: /Includes.rst.txt


.. _pageparser:

PageParser
==========

The PageParser is responsible for parsing the frontend response and transforming it into a JSON object.

The default parsers are:

* **body**: Has the complete body of the page.

* **title**: Contains the title of the page.

* **metadata**: Contains all the metatags of the page, structured by name and content.

* **locale**: Contains the locale of the page.

* **url**: Contains the URL of the page.

* **favicon**: Contains the URL of the favicon of the page.


Adding your own parser
----------------------

If you want to add your own parser, you can do so by adding a class which implements the `ParserInterface`:

.. code-block:: php

    <?php

    namespace Vendor\Extension\Parser;

    use MaxServ\FrontendRequest\Dto\RequestContext;
    use MaxServ\FrontendRequest\PageParser\ParserInterface;

    class MyCustomParser implements ParserInterface
    {
        public function getIdentifier():  string
        {
            return 'custom_key'; // This will be the key used in the response
        }

        public function parse(string $html, RequestContext $context): string
        {
            // Your custom parsing logic goes here.
            return 'Parsed content';
        }
    }

And registering it with the correct tag in your `Services.yaml`:

.. code-block:: yaml

    services:
        Vendor\Extension\Parser\MyCustomParser:
            tags: [ 'frontend_request.page_parser' ]


Overriding a parser
-------------------

If you want to override an existing parser, you can follow the same steps as above, but make sure to use the same
identifier as the parser you want to override.

Be sure to add this extension as a dependency in your `composer.json` file to ensure correct loading order.
