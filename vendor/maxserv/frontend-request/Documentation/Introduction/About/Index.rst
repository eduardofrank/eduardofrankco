.. include:: /Includes.rst.txt


.. _about:

What does it do?
================

This extension provides a simple way to handle frontend requests in TYPO3 from within the backend.
It allows you to retrieve page information such as title, description, and more based on parameters like page id
and language. This is particularly useful for extensions that need to analyze frontend content,such as SEO tools.

This extension does not do anything on its own but is designed to be used in conjunction with other extensions
that require frontend request handling.

It provides a JavaScript module that can be imported into your own extension's JavaScript files.