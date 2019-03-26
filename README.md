# MD Redirect Canonical Fix

MD Redirect Canonical Fix is a plugin that fixes two WordPress tickets ([#41891](https://core.trac.wordpress.org/ticket/41891) and [#43274](https://core.trac.wordpress.org/ticket/43274)) that are still not fixed in WordPress core. It is meant to be used as companion plugin with [Change Core Slugs plugin](https://github.com/dimadin/change-core-slugs) in cases where you set `page` or `comments-page` bases to include any non-ASCII character, or when `feed` or `comments` bases are set.

When these two bugs are fixed, you will not need this temporary plugin. There is a built-in mechanism that checks this repository whether plugin is not needed anymore. It also checks if there are newer versions of this plugin that you must manually install.

## Install/upgrade

If you already have installed plugin MD Redirect Canonical Fix, you must deactivate it first, then delete it through [Plugins screen](https://codex.wordpress.org/Plugins_Screen). After that, you should download latest version from [Releases page](https://github.com/dimadin/redirect-canonical-fix/releases), and upload it through [Add New Plugin screen](https://codex.wordpress.org/Plugins_Add_New_Screen#Upload_Plugins). Finally, you can activate it like any other plugin.
