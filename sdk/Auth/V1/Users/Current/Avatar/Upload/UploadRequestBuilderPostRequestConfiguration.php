<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Avatar\Upload;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UploadRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UploadRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?UploadRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UploadRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UploadRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UploadRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UploadRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return UploadRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): UploadRequestBuilderPostQueryParameters {
        return new UploadRequestBuilderPostQueryParameters($user_id);
    }

}
