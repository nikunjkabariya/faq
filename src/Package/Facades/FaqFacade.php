<?php

namespace Nikunjkabariya\Faq;

use Illuminate\Support\Facades\Facade;

/**
 * FAQ Facade
 */
class FaqFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'faq';
    }
}
