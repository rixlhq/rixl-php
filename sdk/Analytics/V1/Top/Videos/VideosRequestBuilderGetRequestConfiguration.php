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
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return VideosRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null): VideosRequestBuilderGetQueryParameters {
        return new VideosRequestBuilderGetQueryParameters($limit, $rangeEnd, $rangeStart);
    }

}
