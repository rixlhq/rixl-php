<?php

namespace Rixl\Sdk\Analytics\V1\Top\Images;

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
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return ImagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null): ImagesRequestBuilderGetQueryParameters {
        return new ImagesRequestBuilderGetQueryParameters($limit, $rangeEnd, $rangeStart);
    }

}
