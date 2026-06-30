<?php

namespace Rixl\Sdk\Analytics\V1\Top\Videos;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VideosRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VideosRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VideosRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VideosRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VideosRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VideosRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VideosRequestBuilderGetQueryParameters.
     * @param string|null $end End date (inclusive)
     * @param string|null $limit Maximum number of results
     * @param string|null $start Start date (inclusive)
     * @return VideosRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $limit = null, ?string $start = null): VideosRequestBuilderGetQueryParameters {
        return new VideosRequestBuilderGetQueryParameters($end, $limit, $start);
    }

}
