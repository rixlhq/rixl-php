<?php

namespace Rixl\Sdk\Auth\V1\SignIns;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SignInsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SignInsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SignInsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SignInsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SignInsRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return SignInsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): SignInsRequestBuilderGetQueryParameters {
        return new SignInsRequestBuilderGetQueryParameters($user_id);
    }

}
