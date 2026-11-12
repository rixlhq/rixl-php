<?php

namespace Rixl\Sdk\Analytics\V1\Posts\Item\Stats;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StatsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StatsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StatsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StatsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StatsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StatsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StatsRequestBuilderGetQueryParameters.
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return StatsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $rangeEnd = null, ?string $rangeStart = null): StatsRequestBuilderGetQueryParameters {
        return new StatsRequestBuilderGetQueryParameters($rangeEnd, $rangeStart);
    }

}
