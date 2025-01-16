# newspage-page-header

This extension extends [b13/newspage](https://github.com/b13/newspage) with more functionality.

It shows newspage related fields directly in the page layout view in the page module.

In the page module layout view, the most important properties (title, category, media, slug, date) can be edited without leaving the layout view.
To customize the fields, use the dedicated `tx_newspage_layout` palette:

```php
$GLOBALS['TCA']['pages']['palettes']['tx_newspage_layout']['showitem'] = 'title,abstract,slug';
```
