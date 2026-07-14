<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ImagesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ImagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImagesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ImagesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImagesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ImagesRequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $sortDirection 
     * @param string|null $sortField 
     * @return ImagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $sortDirection = null, ?string $sortField = null): ImagesRequestBuilderGetQueryParameters {
        return new ImagesRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset, $sortDirection, $sortField);
    }

}
