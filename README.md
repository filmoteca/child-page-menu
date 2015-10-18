# Child Pages Menu Plugin to WordPress

A plugin to WordPress to add a menu with the child pages of the page where it is added.

## Installation

1. Add this repository to the *composer.json*

```json
    "repositories": [
        {
            "type": "composer",
            "url": "https://github.com/filmoteca/child-pages-menu"
        }
    ]
```

2. Add package

```json
    "required" : {
        "filmoteca/child-pages-menu" : "0.1.0"
    }
```

## Use

The plugin create the function `wpb_list_child_pages` and is not receive any parameter. The function returns string of
html with the menu, so when you call it you have to print the menu.
 
 For instance, if you want show the menu in the sidebar, then open the *sidebar.php* file in you theme and the next code


```php
<nav id="site-navigation" class="main-navigation sub-menu" role="navigation">
    <?php echo wpb_list_child_pages(); ?>
</nav>
```

