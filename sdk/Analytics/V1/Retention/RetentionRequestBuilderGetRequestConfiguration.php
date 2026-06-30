<?php

namespace Rixl\Sdk\Analytics\V1\Retention;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetentionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetentionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetentionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetentionRequestBuilderGetQueryParameters.
     * @param string|null $end End date (inclusive)
     * @param string|null $period Cohort period (day, week, month)
     * @param string|null $start Start date (inclusive)
     * @return RetentionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $period = null, ?string $start = null): RetentionRequestBuilderGetQueryParameters {
        return new RetentionRequestBuilderGetQueryParameters($end, $period, $start);
    }

}
