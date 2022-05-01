<?php

/**
 * @param string $text
 * @return string
 * find links into string and replace it with HTML tags
 */
function liksReplaser(string $text): string
{
    $pattern = "/(http:\/\/[a-zA-Z0-9\.\/-]+\/|https:\/\/\[a-zA-Z0-9\.\/-]+\/)/";
    $replacement = '<a href="$1" target="_blank">$1</a>';
    return preg_replace($pattern,$replacement,$text);

}
