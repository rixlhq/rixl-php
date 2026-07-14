<?php

namespace Rixl\Sdk\Auth\V1\Blog\Subscribe;

/**
 * SubscribeBlog
*/
class SubscribeRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new SubscribeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
