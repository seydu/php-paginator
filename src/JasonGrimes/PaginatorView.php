<?php

namespace JasonGrimes;

class PaginatorView
{
    /**
     * @var string
     */
    public $numberOfPages;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string|null
     */
    public $previousUrl;
    /**
     * @var string|null
     */
    public $nextUrl;
    /**
     * @var array
     */
    public $pages;
    /**
     * @var string
     */
    public $previousText;
    /**
     * @var string
     */
    public $nextText;
}
