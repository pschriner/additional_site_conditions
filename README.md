# TYPO3 Extension additional_site_conditions

Additional site conditions for the site yml.

## Installation

Simply install the extension with Composer or the Extension Manager.

`composer require schriner/additional-site-conditions`

## Usage

Currently implemented:

### indpEnv.get

Use to get the value of a `GeneralUtility::getIndpEnv()` call.

This is useful e.g. if a site is called by a different hostname in a local context and can't resolve it's true hostname.

### Usage:

```yml
baseVariants:
  - base: https://foo-bar/
    condition: indpEnv.get("HTTP_HOST") == "foo-bar"
```
