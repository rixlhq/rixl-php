<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class AuthMethod extends Enum {
    public const A_U_T_H__M_E_T_H_O_D__U_N_S_P_E_C_I_F_I_E_D = "AUTH_METHOD_UNSPECIFIED";
    public const A_U_T_H__M_E_T_H_O_D__P_A_S_S_K_E_Y = "AUTH_METHOD_PASSKEY";
    public const A_U_T_H__M_E_T_H_O_D__T_O_T_P = "AUTH_METHOD_TOTP";
}
