<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Info;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InfoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InfoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InfoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InfoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InfoRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return InfoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): InfoRequestBuilderGetQueryParameters {
        return new InfoRequestBuilderGetQueryParameters($user_id);
    }

}
