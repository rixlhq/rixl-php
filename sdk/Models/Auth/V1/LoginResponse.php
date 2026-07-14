<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class LoginResponse implements Parsable 
{
    /**
     * @var string|null $accessToken The accessToken property
    */
    private ?string $accessToken = null;
    
    /**
     * @var array<AuthMethod>|null $authentication authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
    */
    private ?array $authentication = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var StreamInterface|null $passkeyOptions passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
    */
    private ?StreamInterface $passkeyOptions = null;
    
    /**
     * @var string|null $refreshToken The refreshToken property
    */
    private ?string $refreshToken = null;
    
    /**
     * @var string|null $requiresAction The requiresAction property
    */
    private ?string $requiresAction = null;
    
    /**
     * @var string|null $sessionId The sessionId property
    */
    private ?string $sessionId = null;
    
    /**
     * @var string|null $status "ok" | "2fa_required" | "email_not_verified"
    */
    private ?string $status = null;
    
    /**
     * @var string|null $tokenType The tokenType property
    */
    private ?string $tokenType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginResponse {
        return new LoginResponse();
    }

    /**
     * Gets the accessToken property value. The accessToken property
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->accessToken;
    }

    /**
     * Gets the authentication property value. authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
     * @return array<AuthMethod>|null
    */
    public function getAuthentication(): ?array {
        return $this->authentication;
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessToken' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'authentication' => fn(ParseNode $n) => $o->setAuthentication($n->getCollectionOfEnumValues(AuthMethod::class)),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'passkeyOptions' => fn(ParseNode $n) => $o->setPasskeyOptions($n->getBinaryContent()),
            'refreshToken' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'requiresAction' => fn(ParseNode $n) => $o->setRequiresAction($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'tokenType' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the passkeyOptions property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
     * @return StreamInterface|null
    */
    public function getPasskeyOptions(): ?StreamInterface {
        return $this->passkeyOptions;
    }

    /**
     * Gets the refreshToken property value. The refreshToken property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refreshToken;
    }

    /**
     * Gets the requiresAction property value. The requiresAction property
     * @return string|null
    */
    public function getRequiresAction(): ?string {
        return $this->requiresAction;
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->sessionId;
    }

    /**
     * Gets the status property value. "ok" | "2fa_required" | "email_not_verified"
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->tokenType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accessToken', $this->getAccessToken());
        $writer->writeCollectionOfEnumValues('authentication', $this->getAuthentication());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBinaryContent('passkeyOptions', $this->getPasskeyOptions());
        $writer->writeStringValue('refreshToken', $this->getRefreshToken());
        $writer->writeStringValue('requiresAction', $this->getRequiresAction());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('tokenType', $this->getTokenType());
    }

    /**
     * Sets the accessToken property value. The accessToken property
     * @param string|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?string $value): void {
        $this->accessToken = $value;
    }

    /**
     * Sets the authentication property value. authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
     * @param array<AuthMethod>|null $value Value to set for the authentication property.
    */
    public function setAuthentication(?array $value): void {
        $this->authentication = $value;
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the passkeyOptions property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
     * @param StreamInterface|null $value Value to set for the passkeyOptions property.
    */
    public function setPasskeyOptions(?StreamInterface $value): void {
        $this->passkeyOptions = $value;
    }

    /**
     * Sets the refreshToken property value. The refreshToken property
     * @param string|null $value Value to set for the refreshToken property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refreshToken = $value;
    }

    /**
     * Sets the requiresAction property value. The requiresAction property
     * @param string|null $value Value to set for the requiresAction property.
    */
    public function setRequiresAction(?string $value): void {
        $this->requiresAction = $value;
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->sessionId = $value;
    }

    /**
     * Sets the status property value. "ok" | "2fa_required" | "email_not_verified"
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the tokenType property value. The tokenType property
     * @param string|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?string $value): void {
        $this->tokenType = $value;
    }

}
