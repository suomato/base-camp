<?php

namespace Basecamp\Utils;

class Session
{
    protected static $flash = [];

    /**
     * Init Sessions
     *
     * @return void
     */
    public static function init()
    {
        add_action('init', function () {
            if (!session_id()) {
                session_start();
                if (self::has('flash')) {
                    static::$flash = self::get('flash');
                    self::forget('flash');
                }
            }
        }, 1);

        add_action('wp_logout', function () {
            session_destroy();
        });
        add_action('wp_login', function () {
            session_destroy();
        });
    }

    /**
     * Set session data
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Set session data which exists only for the next request.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function flash($key, $value)
    {
        $_SESSION['flash'][$key] = $value;
    }

    /**
     * Return session data based on given key
     *
     * @param string $key
     * @param string $default
     * @return void
     */
    public static function get($key, $default = '')
    {
        $sessions = array_merge($_SESSION, self::$flash);
        return $sessions[$key] ?? $default;
    }

    /**
     * Return true if session exists
     *
     * @param string $key
     * @return boolean
     */
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Remove session data based on given key
     *
     * @param string $key
     * @return void
     */
    public static function forget($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * Remove all session data
     *
     * @return void
     */
    public static function flush()
    {
        session_destroy();
    }
}
