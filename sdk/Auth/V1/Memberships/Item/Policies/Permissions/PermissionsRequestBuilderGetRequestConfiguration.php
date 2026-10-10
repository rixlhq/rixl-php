<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Permissions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PermissionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionsRequestBuilderGetQueryParameters.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param array<string>|null $types 
     * @param string|null $userUser_id 
     * @return PermissionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null, ?array $types = null, ?string $userUser_id = null): PermissionsRequestBuilderGetQueryParameters {
        return new PermissionsRequestBuilderGetQueryParameters($limit, $offset, $types, $userUser_id);
    }

}
