<?php
namespace App\Src\Helpers;
class Helpers
{
    /**
     * @param string $text
     * @return string
     * find links into string and replace it with HTML tags
     */
   static public function liksReplaser(string $text): string
    {
        $pattern = "/(http:\/\/[^\s]+|https:\/\/\[^\s]+)/";
        $replacement = '<a href="$1" target="_blank">$1</a>';
        return preg_replace($pattern, $replacement, $text);
    }

    static public function getUniq(){
       $token = md5(time());
       $_SESSION['token'] = $token;
       return $token;
    }
}
