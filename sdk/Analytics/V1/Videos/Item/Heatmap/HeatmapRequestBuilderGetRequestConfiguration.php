<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\Heatmap;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HeatmapRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HeatmapRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HeatmapRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HeatmapRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HeatmapRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HeatmapRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HeatmapRequestBuilderGetQueryParameters.
     * @param int|null $buckets 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return HeatmapRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $buckets = null, ?string $rangeEnd = null, ?string $rangeStart = null): HeatmapRequestBuilderGetQueryParameters {
        return new HeatmapRequestBuilderGetQueryParameters($buckets, $rangeEnd, $rangeStart);
    }

}
