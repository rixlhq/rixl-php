<?php

namespace Rixl\Sdk\Auth\V1\Blog\Subscribe;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscribeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscribeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscribeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscribeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscribeRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return SubscribeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): SubscribeRequestBuilderPostQueryParameters {
        return new SubscribeRequestBuilderPostQueryParameters($user_id);
    }

}
