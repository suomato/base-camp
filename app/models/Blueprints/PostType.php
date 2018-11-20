<?php

namespace Basecamp\Models\Blueprints;

class PostType
{
    protected static $args = [];

    protected static function post_type()
    {
        $function = new \ReflectionClass(static::class);
        return static::$post_type ?? strtolower($function->getShortName());
    }

    public static function all()
    {
        return \Timber::get_posts(['post_type' => self::post_type()]);
    }

    public static function find($id)
    {
        $post = new \TimberPost($id);
        if ($post->post_type !== self::post_type()) {
            return null;
        }

        return $post;
    }

    public static function take($take)
    {
        static::$args['posts_per_page'] = $take;
        return new static;
    }

    public static function skip($skip)
    {
        static::$args['offset'] = $skip;
        return new static;
    }

    public static function status($status)
    {
        static::$args['post_status'] = $status;
        return new static;
    }

    public static function include($include)
    {
        static::$args['post__in'] = $include;
        return new static;
    }

    public static function exclude($exclude)
    {
        static::$args['post__not_in'] = $exclude;
        return new static;
    }

    public static function orderby($orderby, $order = 'asc')
    {
        static::$args['orderby'] = $orderby;
        static::$args['order']   = $order;
        return new static;
    }

    public static function author($author)
    {
        if (is_int($author)) {
            static::$args['author'] = $author;
        } else {
            static::$args['author_name'] = $author;
        }
        return new static;
    }

    public static function inCategory($categories)
    {
        if (self::post_type() === 'post') {
            if (is_int($categories) || array_filter($categories, 'is_int')) {
                static::$args['category'] = $categories;
            } else {
                static::$args['category_name'] = $categories;
            }
            return new static;
        }
        die('Not supported');
    }

    public static function get()
    {
        $result       = \Timber::get_posts(array_merge(['post_type' => self::post_type()], static::$args));
        static::$args = [];

        return $result;
    }
}
