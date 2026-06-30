<?php

namespace Rixl\Sdk\Analytics\V1\Funnels;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FunnelsRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FunnelsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?FunnelsRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FunnelsRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FunnelsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FunnelsRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FunnelsRequestBuilderPostQueryParameters.
     * @param string|null $end End date (inclusive)
     * @param string|null $start Start date (inclusive)
     * @return FunnelsRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $start = null): FunnelsRequestBuilderPostQueryParameters {
        return new FunnelsRequestBuilderPostQueryParameters($end, $start);
    }

}
