<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class PolicyIdentityType extends Enum {
    public const P_O_L_I_C_Y__I_D_E_N_T_I_T_Y__T_Y_P_E__U_N_S_P_E_C_I_F_I_E_D = "POLICY_IDENTITY_TYPE_UNSPECIFIED";
    public const P_O_L_I_C_Y__I_D_E_N_T_I_T_Y__T_Y_P_E__U_S_E_R = "POLICY_IDENTITY_TYPE_USER";
    public const P_O_L_I_C_Y__I_D_E_N_T_I_T_Y__T_Y_P_E__A_P_I__K_E_Y = "POLICY_IDENTITY_TYPE_API_KEY";
    public const P_O_L_I_C_Y__I_D_E_N_T_I_T_Y__T_Y_P_E__C_L_I_E_N_T_A_U_T_H__C_R_E_D_E_N_T_I_A_L = "POLICY_IDENTITY_TYPE_CLIENTAUTH_CREDENTIAL";
}
