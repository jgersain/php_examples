<?php
namespace Text;

class Format
{
  public static function upperText($value)
  {
    return strtoupper($value);
  }

  /**
   * Return string
   */
  public static function lowerText($value)
  {
    return strtolower($value);
  }
}