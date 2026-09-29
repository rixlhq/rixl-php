<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Reactivate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReactivateRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReactivateRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReactivateRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReactivateRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReactivateRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReactivateRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReactivateRequestBuilderPostQueryParameters.
     * @param string|null $org_id 
     * @return ReactivateRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null): ReactivateRequestBuilderPostQueryParameters {
        return new ReactivateRequestBuilderPostQueryParameters($org_id);
    }

}
