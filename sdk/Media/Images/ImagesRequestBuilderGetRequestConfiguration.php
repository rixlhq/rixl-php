<?php

namespace Rixl\Sdk\Media\Images;

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
     * @param int|null $limit Number of images to return (default 20, max 100)
     * @param int|null $offset Number of images to skip (default 0)
     * @param string|null $order Sort order (asc, desc)
     * @param string|null $sort Field to sort by (created_at, name, size, updated_at)
     * @return ImagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $sort = null): ImagesRequestBuilderGetQueryParameters {
        return new ImagesRequestBuilderGetQueryParameters($limit, $offset, $order, $sort);
    }

}
