<?php

namespace Rixl\Sdk\Billing\V1\Subscription;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters.
     * @param string|null $orgId 
     * @return SubscriptionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null): SubscriptionRequestBuilderGetQueryParameters {
        return new SubscriptionRequestBuilderGetQueryParameters($orgId);
    }

}
