<?php


class searchInfo
{
    public static function func($zapros){
        $text= self::_getLink($zapros);
        if ( $text=file_get_contents($text))
        {
            $result = strip_tags(explode("</table>", explode("</p>", $text)[1])[0]);
            return $result;
        } else {
            return 'No result';
        }

    }

    public static function _getLink($word){
        $word = str_replace(' ', '_', $word);
        ini_set('display_errors', 'Off');

        if (file_get_contents('https://ru.wikipedia.org/wiki/'.$word)){
            return 'https://ru.wikipedia.org/wiki/'.$word;
        } else {
            return 'No result';
        }

    }

    public static function result($zapros)
    {
        return self::func($zapros);
    }
}