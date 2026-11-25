<?php

namespace Rixl\Sdk\Auth\V1\Logout\All;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return AllRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): AllRequestBuilderPostQueryParameters {
        return new AllRequestBuilderPostQueryParameters($user_id);
    }

}
