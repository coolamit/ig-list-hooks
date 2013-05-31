iG:List Hooks
=============

This plugin lists all the hooks fired (after this plugin is loaded) on every page load in WordPress. The listing is available (as a big HTML comment) in page source towards the end before </body> tag.

You should put ig-list-hooks.php in your mu-plugins folder so that its loaded before any regular plugin, to be able to debug both plugins & themes. If you wish to debug only themes then use this as a regular plugin & activate it.
