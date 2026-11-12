<?php

namespace Rixl\Sdk\Auth\V1\Blog\Unsubscribe;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnsubscribeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UnsubscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnsubscribeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UnsubscribeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnsubscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnsubscribeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnsubscribeRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return UnsubscribeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): UnsubscribeRequestBuilderPostQueryParameters {
        return new UnsubscribeRequestBuilderPostQueryParameters($user_id);
    }

}
