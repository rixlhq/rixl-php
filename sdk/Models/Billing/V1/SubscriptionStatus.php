<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Enum;

class SubscriptionStatus extends Enum {
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "SUBSCRIPTION_STATUS_UNSPECIFIED";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__A_C_T_I_V_E = "SUBSCRIPTION_STATUS_ACTIVE";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__I_N_A_C_T_I_V_E = "SUBSCRIPTION_STATUS_INACTIVE";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__C_A_N_C_E_L_E_D = "SUBSCRIPTION_STATUS_CANCELED";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__E_X_P_I_R_E_D = "SUBSCRIPTION_STATUS_EXPIRED";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__P_E_N_D_I_N_G = "SUBSCRIPTION_STATUS_PENDING";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__S_U_S_P_E_N_D_E_D = "SUBSCRIPTION_STATUS_SUSPENDED";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__T_R_I_A_L_I_N_G = "SUBSCRIPTION_STATUS_TRIALING";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__P_A_S_T__D_U_E = "SUBSCRIPTION_STATUS_PAST_DUE";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__U_N_P_A_I_D = "SUBSCRIPTION_STATUS_UNPAID";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__I_N_C_O_M_P_L_E_T_E = "SUBSCRIPTION_STATUS_INCOMPLETE";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__I_N_C_O_M_P_L_E_T_E__E_X_P_I_R_E_D = "SUBSCRIPTION_STATUS_INCOMPLETE_EXPIRED";
    public const S_U_B_S_C_R_I_P_T_I_O_N__S_T_A_T_U_S__P_A_U_S_E_D = "SUBSCRIPTION_STATUS_PAUSED";
}
