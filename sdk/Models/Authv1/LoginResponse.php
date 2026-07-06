<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LoginResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $access_token The access_token property
    */
    private ?string $access_token = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<int>|null $authentication authentication lists the 2FA methods the user has configured whenstatus is "2fa_required". The public API renders these as lowercasestrings: "passkey", "totp".
    */
    private ?array $authentication = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var int|null $expires_in The expires_in property
    */
    private ?int $expires_in = null;
    
    /**
     * @var array<int>|null $passkey_options passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON,present only when "passkey" is one of the authentication methods.
    */
    private ?array $passkey_options = null;
    
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $requires_action The requires_action property
    */
    private ?string $requires_action = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * @var string|null $status "ok" | "2fa_required" | "email_not_verified"
    */
    private ?string $status = null;
    
    /**
     * @var string|null $token_type The token_type property
    */
    private ?string $token_type = null;
    
    /**
     * Instantiates a new LoginResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the authentication property value. authentication lists the 2FA methods the user has configured whenstatus is "2fa_required". The public API renders these as lowercasestrings: "passkey", "totp".
     * @return array<int>|null
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
     * Gets the expires_in property value. The expires_in property
     * @return int|null
    */
    public function getExpiresIn(): ?int {
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
            'authentication' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setAuthentication($val);
            },
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expires_in' => fn(ParseNode $n) => $o->setExpiresIn($n->getIntegerValue()),
            'passkey_options' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setPasskeyOptions($val);
            },
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'requires_action' => fn(ParseNode $n) => $o->setRequiresAction($n->getStringValue()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'token_type' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the passkey_options property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON,present only when "passkey" is one of the authentication methods.
     * @return array<int>|null
    */
    public function getPasskeyOptions(): ?array {
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
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
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
        $writer->writeCollectionOfPrimitiveValues('authentication', $this->getAuthentication());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeIntegerValue('expires_in', $this->getExpiresIn());
        $writer->writeCollectionOfPrimitiveValues('passkey_options', $this->getPasskeyOptions());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('requires_action', $this->getRequiresAction());
        $writer->writeStringValue('session_id', $this->getSessionId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('token_type', $this->getTokenType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the access_token property value. The access_token property
     * @param string|null $value Value to set for the access_token property.
    */
    public function setAccessToken(?string $value): void {
        $this->access_token = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the authentication property value. authentication lists the 2FA methods the user has configured whenstatus is "2fa_required". The public API renders these as lowercasestrings: "passkey", "totp".
     * @param array<int>|null $value Value to set for the authentication property.
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
     * Sets the expires_in property value. The expires_in property
     * @param int|null $value Value to set for the expires_in property.
    */
    public function setExpiresIn(?int $value): void {
        $this->expires_in = $value;
    }

    /**
     * Sets the passkey_options property value. passkey_options is the WebAuthn PublicKeyCredentialRequestOptions as JSON,present only when "passkey" is one of the authentication methods.
     * @param array<int>|null $value Value to set for the passkey_options property.
    */
    public function setPasskeyOptions(?array $value): void {
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
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
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
