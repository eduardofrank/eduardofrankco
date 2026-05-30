.. include:: /Includes.rst.txt


.. _javascript:

Javascript
==========

Javascript module
-----------------
This extension provides a Javascript module that you can import in your own Javascript code to
make the request and get the parsed page response.

The `FrontendRequest` class provides a `request` method which expects an object with the following properties:

* `pageId`: The ID of the page you want to request.

* `languageId`: The ID of the language you want to request the page in.

* `additionalGetVars`: (optional) A string with the additional get parameters to be sent with the request.

Example usage:

.. code-block:: javascript

    import FrontendRequest from "@maxserv/frontend-request/frontend-request.js"

    class YourJavascriptClass {
        async fetchPage(pageId, languageId) {
            FrontendRequest.request({
                pageId: pageId,
                languageId: languageId,
            }).then((response) => {
                // Handle the response here
                console.log(response);
            }).catch((error) => {
                // Handle any errors here
                console.error(error);
            })
        }
    }


Fire event to listen to
-----------------------
The FrontendRequest class also has a method `requestWithEvent` which you can call from within PHP to
fire an event that can be listened to in your JavaScript code.

An example using the `JavascriptRenderer` within the `PageRenderer`:

.. code-block:: php

    $pageRenderer->getJavaScriptRenderer()->addJavaScriptModuleInstruction(
        JavaScriptModuleInstruction::create('@maxserv/frontend-request/frontend-request.js')->invoke(
            'requestWithEvent',
            [
                'pageId' => $pageId,
                'languageId' => $languageId,
                'additionalGetVars' => $additionalGetVars ?? '',
            ],
            'your-event-name'
        )
    );

This will fire an event with the name `your-event-name` that you can listen to in your JavaScript code.

.. code-block:: javascript

    document.addEventListener('your-event-name', (event) => {
        // Handle the event here
        console.log(event.detail);
    });