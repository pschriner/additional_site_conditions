==========================================
TYPO3 Extension additional_site_conditions
==========================================

Installation
============

Via composer:

..  code-block:: shell
    :caption: Installation via composer

    composer require schriner/additional-site-conditions

Usage
=====

Currently implemented:

..  code-block:: shell

    indpEnv.get

Use to get the value of a `GeneralUtility::getIndpEnv() <https://api.typo3.org/main/classes/TYPO3-CMS-Core-Utility-GeneralUtility.html#method_getIndpEnv>`__ call.

This is useful e.g. if a site is called by a different hostname in a local context and can't resolve it's true hostname.

..  code-block:: yaml
    :caption: Example for usage in site configuration

    baseVariants:
      -
        base: https://foo-bar/
        condition: indpEnv.get("HTTP_HOST") == "foo-bar"
