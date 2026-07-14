<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BandwidthUsageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BandwidthUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BandwidthUsageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BandwidthUsageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BandwidthUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BandwidthUsageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BandwidthUsageRequestBuilderGetQueryParameters.
     * @param string|null $orgId 
     * @return BandwidthUsageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null): BandwidthUsageRequestBuilderGetQueryParameters {
        return new BandwidthUsageRequestBuilderGetQueryParameters($orgId);
    }

}
