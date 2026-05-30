.. include:: /Includes.rst.txt

================
Frontend Request
================

:Extension key:
   frontend_request

:Package name:
   maxserv/frontend-request

:Version:
   |release|

:Language:
   en

:Author:
   MaxServ

:License:
   This document is published under the
   `Open Publication License <https://www.opencontent.org/openpub/>`__.

:Rendered:
   |today|

----

This extension helps you to handle frontend requests in TYPO3 from within the backend.
It provides a javascript module that you can import in your own extension's javascript
and based on parameters like the page id, language, and more, it returns a JSON object
with the page information, such as the page title, description, and more.

This extension is not useful on its own, but it is meant to be used in combination with
other extensions that need to handle frontend requests in the backend, such as
Yoast SEO for TYPO3, which uses this extension to analyze the page content and provide
analysis and suggestions for improving the page's SEO and readability.

----

**Table of Contents:**

.. toctree::
   :maxdepth: 2
   :titlesonly:

   Introduction/Index
   Installation/Index
   Usage/Index

.. Meta Menu

.. toctree::
   :hidden:

   Sitemap
