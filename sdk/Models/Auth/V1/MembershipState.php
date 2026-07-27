<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipState extends Enum {
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__U_N_S_P_E_C_I_F_I_E_D = "MEMBERSHIP_STATE_UNSPECIFIED";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__A_C_T_I_V_E = "MEMBERSHIP_STATE_ACTIVE";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__S_U_S_P_E_N_D_E_D = "MEMBERSHIP_STATE_SUSPENDED";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__L_E_F_T = "MEMBERSHIP_STATE_LEFT";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__R_E_M_O_V_E_D = "MEMBERSHIP_STATE_REMOVED";
}
