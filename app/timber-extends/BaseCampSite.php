<?php

class BaseCampSite extends TimberSite
{
    /**
     * @var string|void WordPress core url
     */
    public $wp_link;

    public function __construct()
    {
        parent::__construct();
        $this->wp_link = site_url();
        $this->link    = home_url();
    }
}
