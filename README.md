Coercive Utility Head
=====================

Handler for html head tags

Get
---
```
composer require coercive/head
```

Example
-------
```php
<?php

$head = new Head;

# Meta Title
$head->Title()->setContent('example title');

# Meta Description
$head->Description()->setContent('example description');

# Meta Keywords
$head->Keywords()->setContent('example test');

# Show
echo $head->toHtml();

```
