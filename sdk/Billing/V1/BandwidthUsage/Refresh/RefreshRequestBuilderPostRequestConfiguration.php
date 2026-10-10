<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage\Refresh;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RefreshRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RefreshRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?RefreshRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RefreshRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RefreshRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RefreshRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RefreshRequestBuilderPostQueryParameters.
     * @param string|null $org_id 
     * @return RefreshRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null): RefreshRequestBuilderPostQueryParameters {
        return new RefreshRequestBuilderPostQueryParameters($org_id);
    }

}
