<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ClientCredentialStatus extends Enum {
    public const C_L_I_E_N_T__C_R_E_D_E_N_T_I_A_L__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "CLIENT_CREDENTIAL_STATUS_UNSPECIFIED";
    public const C_L_I_E_N_T__C_R_E_D_E_N_T_I_A_L__S_T_A_T_U_S__A_C_T_I_V_E = "CLIENT_CREDENTIAL_STATUS_ACTIVE";
    public const C_L_I_E_N_T__C_R_E_D_E_N_T_I_A_L__S_T_A_T_U_S__R_E_V_O_K_E_D = "CLIENT_CREDENTIAL_STATUS_REVOKED";
}
