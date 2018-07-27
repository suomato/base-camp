<?php

namespace Basecamp\Models\Blueprints;

class Taxonomy
{
    protected static $args = [];

    protected static function taxonomy_type()
    {
        $function = new \ReflectionClass(static::class);
        return static::$taxonomy_type ?? strtolower($function->getShortName());
    }

    public static function all()
    {
        return \Timber::get_terms(['taxonomy' => self::taxonomy_type()]);
    }

    public static function find($id)
    {
        $term = new \TimberTerm($id);
        if ($term->taxonomy !== self::taxonomy_type()) {
            return null;
        }

        return $term;
    }

    public static function orderby($orderby, $order = 'asc')
    {
        static::$args['orderby'] = $orderby;
        static::$args['order']   = $order;
        return new static;
    }

    public static function take($take)
    {
        static::$args['number'] = $take;
        return new static;
    }

    public static function skip($skip)
    {
        static::$args['offset'] = $skip;
        return new static;
    }

    public static function hideEmpty()
    {
        static::$args['hide_empty'] = true;
        return new static;
    }

    public static function include($include)
    {
        static::$args['include'] = $include;
        return new static;
    }

    public static function exclude($exclude)
    {
        static::$args['exclude'] = $exclude;
        return new static;
    }

    public static function get()
    {
        return \Timber::get_terms(array_merge(['taxonomy' => self::taxonomy_type()], static::$args));
    }
}
