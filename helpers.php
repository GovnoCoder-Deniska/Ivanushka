<?php

function array_get($array, $key, $default = null)
{
    if (!empty($key)) {
        $levels = explode('.', $key);
        $currentLevel = array_shift($levels);
        if (array_key_exists($currentLevel, $array)) {
            if (is_array($array[$currentLevel])) {
                return array_get($array[$currentLevel], implode('.', $levels), $default);
            }

            return $array[$currentLevel];
        }
    }

    return $default;
}

function abbreviatedDescription($string)
{
  if (strlen($string) > 125) {
    return mb_substr($string, 0, 125) . "...";
  }

  return $string;
}
