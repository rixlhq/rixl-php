<?php

namespace Rixl\Sdk\Billing\V1\StorageUsage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StorageUsageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StorageUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StorageUsageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StorageUsageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StorageUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StorageUsageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StorageUsageRequestBuilderGetQueryParameters.
     * @param string|null $org_id 
     * @return StorageUsageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null): StorageUsageRequestBuilderGetQueryParameters {
        return new StorageUsageRequestBuilderGetQueryParameters($org_id);
    }

}
