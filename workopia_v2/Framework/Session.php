<?php

namespace Framework;

class Session
{
  // start the session
  public static function start()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
  }

  // set a key/value pair for the session
  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  // get a session value by key
  public static function get($key, $default = null)
  {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
  }

  // check if session key exists
  public static function has($key)
  {
    return isset($_SESSION[$key]);
  }

  // clear a session by key
  public static function clear($key)
  {
    if (isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    }
  }

  // clear all session data (for this session)
  public static function clearAll()
  {
    session_unset();
    session_destroy();
  }

  /**
   * Set a flash message
   * 
   * @param string $key
   * @param string $message
   * @return void
   */
  public static function setFlashMessage($key, $message)
  {
    self::set('flash_' . $key, $message);
  }

  public static function getFlashMessage($key, $default = null)
  {
    $message = self::get('flash_' . $key, $default);
    self::clear('flash_' . $key);
    return $message;
  }
}
