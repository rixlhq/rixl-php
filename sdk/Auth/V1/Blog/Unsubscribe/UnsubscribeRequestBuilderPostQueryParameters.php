<?php

namespace Rixl\Sdk\Auth\V1\Blog\Unsubscribe;

/**
 * UnsubscribeBlog
*/
class UnsubscribeRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new UnsubscribeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
