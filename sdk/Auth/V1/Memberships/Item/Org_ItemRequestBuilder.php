<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Memberships\Item\Check\CheckRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Domain\DomainRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Info\InfoRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Invite\InviteRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Leave\LeaveRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Members\MembersRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Name\NameRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Policies\PoliciesRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\State\StateRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Username\UsernameRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{org_-id}
*/
class Org_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The check property
    */
    public function check(): CheckRequestBuilder {
        return new CheckRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The domain property
    */
    public function domain(): DomainRequestBuilder {
        return new DomainRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The info property
    */
    public function info(): InfoRequestBuilder {
        return new InfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invite property
    */
    public function invite(): InviteRequestBuilder {
        return new InviteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The leave property
    */
    public function leave(): LeaveRequestBuilder {
        return new LeaveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The name property
    */
    public function name(): NameRequestBuilder {
        return new NameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The policies property
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The state property
    */
    public function state(): StateRequestBuilder {
        return new StateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The username property
    */
    public function username(): UsernameRequestBuilder {
        return new UsernameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new Org_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{org_%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
