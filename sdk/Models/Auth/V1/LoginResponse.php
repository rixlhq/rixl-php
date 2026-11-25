<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class LoginResponse implements Parsable 
{
    /**
     * @var string|null $access_token The access_token property
    */
    private ?string $access_token = null;
    
    /**
     * @var array<AuthMethod>|null $authentication authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
    */
    private ?array $authentication = null;
    
    /**
     * @var string|null $challenge_id The challenge_id property
    */
    private ?string $challenge_id = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $expires_in The expires_in property
    */
    private ?string $expires_in = null;
    
    /**
     * @var string|null $last_active_org_id The last_active_org_id property
    */
    private ?string $last_active_org_id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var StreamInterface|null $passkey_options passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
    */
    private ?StreamInterface $passkey_options = null;
    
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $requires_action The requires_action property
    */
    private ?string $requires_action = null;
    
    /**
     * @var string|null $role The role property
    */
    private ?string $role = null;
    
    /**
     * @var string|null $status "ok" | "2fa_required" | "email_not_verified"
    */
    private ?string $status = null;
    
    /**
     * @var string|null $token_type The token_type property
    */
    private ?string $token_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginResponse {
        return new LoginResponse();
    }

    /**
     * Gets the access_token property value. The access_token property
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->access_token;
    }

    /**
     * Gets the authentication property value. authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
     * @return array<AuthMethod>|null
    */
    public function getAuthentication(): ?array {
        return $this->authentication;
    }

    /**
     * Gets the challenge_id property value. The challenge_id property
     * @return string|null
    */
    public function getChallengeId(): ?string {
        return $this->challenge_id;
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the expires_in property value. The expires_in property
     * @return string|null
    */
    public function getExpiresIn(): ?string {
        return $this->expires_in;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'access_token' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'authentication' => fn(ParseNode $n) => $o->setAuthentication($n->getCollectionOfEnumValues(AuthMethod::class)),
            'challenge_id' => fn(ParseNode $n) => $o->setChallengeId($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expires_in' => fn(ParseNode $n) => $o->setExpiresIn($n->getStringValue()),
            'last_active_org_id' => fn(ParseNode $n) => $o->setLastActiveOrgId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'passkey_options' => fn(ParseNode $n) => $o->setPasskeyOptions($n->getBinaryContent()),
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'requires_action' => fn(ParseNode $n) => $o->setRequiresAction($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'token_type' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the last_active_org_id property value. The last_active_org_id property
     * @return string|null
    */
    public function getLastActiveOrgId(): ?string {
        return $this->last_active_org_id;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the passkey_options property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
     * @return StreamInterface|null
    */
    public function getPasskeyOptions(): ?StreamInterface {
        return $this->passkey_options;
    }

    /**
     * Gets the refresh_token property value. The refresh_token property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refresh_token;
    }

    /**
     * Gets the requires_action property value. The requires_action property
     * @return string|null
    */
    public function getRequiresAction(): ?string {
        return $this->requires_action;
    }

    /**
     * Gets the role property value. The role property
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the status property value. "ok" | "2fa_required" | "email_not_verified"
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the token_type property value. The token_type property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->token_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('access_token', $this->getAccessToken());
        $writer->writeCollectionOfEnumValues('authentication', $this->getAuthentication());
        $writer->writeStringValue('challenge_id', $this->getChallengeId());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('expires_in', $this->getExpiresIn());
        $writer->writeStringValue('last_active_org_id', $this->getLastActiveOrgId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeBinaryContent('passkey_options', $this->getPasskeyOptions());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('requires_action', $this->getRequiresAction());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('token_type', $this->getTokenType());
    }

    /**
     * Sets the access_token property value. The access_token property
     * @param string|null $value Value to set for the access_token property.
    */
    public function setAccessToken(?string $value): void {
        $this->access_token = $value;
    }

    /**
     * Sets the authentication property value. authentication lists the 2FA methods the user has configured when status is "2fa_required". The public API renders these as lowercase strings: "passkey", "totp".
     * @param array<AuthMethod>|null $value Value to set for the authentication property.
    */
    public function setAuthentication(?array $value): void {
        $this->authentication = $value;
    }

    /**
     * Sets the challenge_id property value. The challenge_id property
     * @param string|null $value Value to set for the challenge_id property.
    */
    public function setChallengeId(?string $value): void {
        $this->challenge_id = $value;
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the expires_in property value. The expires_in property
     * @param string|null $value Value to set for the expires_in property.
    */
    public function setExpiresIn(?string $value): void {
        $this->expires_in = $value;
    }

    /**
     * Sets the last_active_org_id property value. The last_active_org_id property
     * @param string|null $value Value to set for the last_active_org_id property.
    */
    public function setLastActiveOrgId(?string $value): void {
        $this->last_active_org_id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the passkey_options property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON, present only when "passkey" is one of the authentication methods.
     * @param StreamInterface|null $value Value to set for the passkey_options property.
    */
    public function setPasskeyOptions(?StreamInterface $value): void {
        $this->passkey_options = $value;
    }

    /**
     * Sets the refresh_token property value. The refresh_token property
     * @param string|null $value Value to set for the refresh_token property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refresh_token = $value;
    }

    /**
     * Sets the requires_action property value. The requires_action property
     * @param string|null $value Value to set for the requires_action property.
    */
    public function setRequiresAction(?string $value): void {
        $this->requires_action = $value;
    }

    /**
     * Sets the role property value. The role property
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->role = $value;
    }

    /**
     * Sets the status property value. "ok" | "2fa_required" | "email_not_verified"
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the token_type property value. The token_type property
     * @param string|null $value Value to set for the token_type property.
    */
    public function setTokenType(?string $value): void {
        $this->token_type = $value;
    }

}
