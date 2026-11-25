<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Invitations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Rixl\Sdk\Models\Auth\V1\InvitationState;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvitationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvitationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvitationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvitationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvitationsRequestBuilderGetQueryParameters.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @param InvitationState|null $state Defaults to pending.
     * @return InvitationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page_size = null, ?string $page_token = null, ?InvitationState $state = null): InvitationsRequestBuilderGetQueryParameters {
        return new InvitationsRequestBuilderGetQueryParameters($page_size, $page_token, $state);
    }

}
