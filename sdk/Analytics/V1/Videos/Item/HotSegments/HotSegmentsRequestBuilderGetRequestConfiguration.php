<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\HotSegments;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HotSegmentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HotSegmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HotSegmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HotSegmentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HotSegmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HotSegmentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HotSegmentsRequestBuilderGetQueryParameters.
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return HotSegmentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $rangeEnd = null, ?string $rangeStart = null): HotSegmentsRequestBuilderGetQueryParameters {
        return new HotSegmentsRequestBuilderGetQueryParameters($rangeEnd, $rangeStart);
    }

}
