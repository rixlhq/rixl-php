<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos;

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
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $sort_direction 
     * @param string|null $sort_field 
     * @return VideosRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $sort_direction = null, ?string $sort_field = null): VideosRequestBuilderGetQueryParameters {
        return new VideosRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset, $sort_direction, $sort_field);
    }

}
