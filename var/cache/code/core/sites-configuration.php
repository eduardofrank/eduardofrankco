<?php
return array (
  'efrank_site_id' => 
  array (
    'base' => 'https://eduardofrank.ddev.site',
    'dependencies' => 
    array (
      0 => 'eduardo-frank/efrank14',
    ),
    'errorHandling' => 
    array (
      0 => 
      array (
        'errorCode' => 404,
        'errorHandler' => 'Page',
        'errorContentSource' => 't3://page?uid=12',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Español',
        'enabled' => true,
        'locale' => 'es_ES.utf8',
        'hreflang' => 'es_ES',
        'base' => '/',
        'websiteTitle' => '',
        'navigationTitle' => 'Español',
        'flag' => 'es',
        'languageId' => 0,
      ),
      1 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'locale' => 'de_DE.utf8',
        'hreflang' => 'de_DE',
        'base' => '/de/',
        'websiteTitle' => '',
        'navigationTitle' => 'Deutsch',
        'fallbackType' => 'fallback',
        'fallbacks' => '0',
        'flag' => 'de',
        'languageId' => 1,
      ),
      2 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'locale' => 'en_US.utf8',
        'hreflang' => 'en_US',
        'base' => '/en/',
        'websiteTitle' => '',
        'navigationTitle' => 'English',
        'fallbackType' => 'fallback',
        'fallbacks' => '0',
        'flag' => 'en-us-gb',
        'languageId' => 2,
      ),
    ),
    'rootPageId' => 1,
    'websiteTitle' => 'Eduardo Frank - TYPO3 Blog',
  ),
);
#