<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalAccountProvider extends Enum {
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__U_N_S_P_E_C_I_F_I_E_D = "EXTERNAL_ACCOUNT_PROVIDER_UNSPECIFIED";
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__G_O_O_G_L_E = "EXTERNAL_ACCOUNT_PROVIDER_GOOGLE";
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__A_P_P_L_E = "EXTERNAL_ACCOUNT_PROVIDER_APPLE";
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__M_I_C_R_O_S_O_F_T = "EXTERNAL_ACCOUNT_PROVIDER_MICROSOFT";
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__F_A_C_E_B_O_O_K = "EXTERNAL_ACCOUNT_PROVIDER_FACEBOOK";
    public const E_X_T_E_R_N_A_L__A_C_C_O_U_N_T__P_R_O_V_I_D_E_R__T_E_L_E_G_R_A_M = "EXTERNAL_ACCOUNT_PROVIDER_TELEGRAM";
}
