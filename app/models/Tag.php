<?php

namespace Basecamp\Models;

use Basecamp\Models\Blueprints\Taxonomy;

class Tag extends Taxonomy
{
    protected static $taxonomy_type = 'post_tag';
}
