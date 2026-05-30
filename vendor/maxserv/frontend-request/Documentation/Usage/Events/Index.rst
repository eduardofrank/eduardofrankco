.. include:: /Includes.rst.txt


.. _events:

Events
======

Event to change the URL to request
----------------------------------
By default the extension is generating the URL to analyse based on the Site Configuration and configured Route Enhancers. In some cases
you want to change the URL that needs to be analysed.

With the `ModifyPreviewUrlEvent` you will be able to alter the URL that will be used to analyse your content.

First you need to create an EventListener that will handle the event:

.. code-block:: php

    <?php

    namespace Vendor\Package\EventListener;

    use MaxServ\FrontendRequest\Event\ModifyUrlEvent;

    final class ModifyUrlEventEventListener
    {
        public function __invoke(ModifyUrlEvent $event)
        {
            $url = $event->getUrl();
            $site = $event->getSite();
            $parameters = $event->getParameters();

            // Create a new url based on your needs

            $event->setUrl($newUrl);
        }
    }


Event to change the request
---------------------------
The request is generated with the `RequestFactory` from TYPO3.

With the `ModifyRequest` you will be able to change the request, this makes it possible to (f.e.) add your own headers
to the request.

First you need to create an EventListener that will handle the event:

.. code-block:: php

    <?php

    namespace Vendor\Package\EventListener;

    use MaxServ\FrontendRequest\Event\ModifyRequestEvent;

    final class ModifyRequestEventListener
    {
        public function __invoke(ModifyRequestEvent $event)
        {
            $request = $event->getRequest();
            $context = $event->getContext();

            $event->setRequest(
                $request->withHeader('X-Your-Own-Header', GeneralUtility::hmac(
                    $context->getUrl()
                ))
            );
        }
    }

Registering an Event Listener
-----------------------------

After you created an event listener, you need to register it.

Check the TYPO3 documentation for your used TYPO3 version on how to register this correctly.

After you have registered the listener, you need to clear the TYPO3 cache through the `Maintenance` module
(or `vendor/bin/typo3 cache:flush`) before your code will be activated.
