<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class InvitationState extends Enum {
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__U_N_S_P_E_C_I_F_I_E_D = "INVITATION_STATE_UNSPECIFIED";
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__P_E_N_D_I_N_G = "INVITATION_STATE_PENDING";
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__A_C_C_E_P_T_E_D = "INVITATION_STATE_ACCEPTED";
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__D_E_C_L_I_N_E_D = "INVITATION_STATE_DECLINED";
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__R_E_V_O_K_E_D = "INVITATION_STATE_REVOKED";
    public const I_N_V_I_T_A_T_I_O_N__S_T_A_T_E__E_X_P_I_R_E_D = "INVITATION_STATE_EXPIRED";
}
