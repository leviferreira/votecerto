<?php
/**
 * Sluifier is used to slugify an politican name
 */
namespace VoteCerto\WebBundle\Services;

/**
 * Class Slugifier
 * @package VoteCerto\WebBundle\Services
 */
class Slugifier
{
    /**
     * Modifies a string to remove all non ASCII characters and spaces.
     */
    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}