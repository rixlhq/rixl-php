<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\DeletionPreview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeletionPreviewRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeletionPreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeletionPreviewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeletionPreviewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeletionPreviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeletionPreviewRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeletionPreviewRequestBuilderGetQueryParameters.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @return DeletionPreviewRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page_size = null, ?string $page_token = null): DeletionPreviewRequestBuilderGetQueryParameters {
        return new DeletionPreviewRequestBuilderGetQueryParameters($page_size, $page_token);
    }

}
