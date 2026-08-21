<?php

namespace Rixl\Sdk\Auth\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Blog\BlogRequestBuilder;
use Rixl\Sdk\Auth\V1\Email\EmailRequestBuilder;
use Rixl\Sdk\Auth\V1\Invitations\InvitationsRequestBuilder;
use Rixl\Sdk\Auth\V1\Login\LoginRequestBuilder;
use Rixl\Sdk\Auth\V1\Logout\LogoutRequestBuilder;
use Rixl\Sdk\Auth\V1\MembershipApplications\MembershipApplicationsRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\MembershipsRequestBuilder;
use Rixl\Sdk\Auth\V1\Passkey\PasskeyRequestBuilder;
use Rixl\Sdk\Auth\V1\Password\PasswordRequestBuilder;
use Rixl\Sdk\Auth\V1\Providers\ProvidersRequestBuilder;
use Rixl\Sdk\Auth\V1\Register\RegisterRequestBuilder;
use Rixl\Sdk\Auth\V1\Token\TokenRequestBuilder;
use Rixl\Sdk\Auth\V1\Userinfo\UserinfoRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\UsersRequestBuilder;
use Rixl\Sdk\Auth\V1\VerifyPasskey\VerifyPasskeyRequestBuilder;
use Rixl\Sdk\Auth\V1\VerifyTotp\VerifyTotpRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The blog property
    */
    public function blog(): BlogRequestBuilder {
        return new BlogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The email property
    */
    public function email(): EmailRequestBuilder {
        return new EmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invitations property
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The login property
    */
    public function login(): LoginRequestBuilder {
        return new LoginRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logout property
    */
    public function logout(): LogoutRequestBuilder {
        return new LogoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The membershipApplications property
    */
    public function membershipApplications(): MembershipApplicationsRequestBuilder {
        return new MembershipApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberships property
    */
    public function memberships(): MembershipsRequestBuilder {
        return new MembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The passkey property
    */
    public function passkey(): PasskeyRequestBuilder {
        return new PasskeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The password property
    */
    public function password(): PasswordRequestBuilder {
        return new PasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The providers property
    */
    public function providers(): ProvidersRequestBuilder {
        return new ProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The register property
    */
    public function register(): RegisterRequestBuilder {
        return new RegisterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The token property
    */
    public function token(): TokenRequestBuilder {
        return new TokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The userinfo property
    */
    public function userinfo(): UserinfoRequestBuilder {
        return new UserinfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The users property
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verifyPasskey property
    */
    public function verifyPasskey(): VerifyPasskeyRequestBuilder {
        return new VerifyPasskeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verifyTotp property
    */
    public function verifyTotp(): VerifyTotpRequestBuilder {
        return new VerifyTotpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
