<?php
function generate_menu_item($url, $text)
{
    return "<li><a class=\"dropdown-item\" href=\"$url\">$text</a></li>";
}
