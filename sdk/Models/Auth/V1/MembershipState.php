<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipState extends Enum {
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__U_N_S_P_E_C_I_F_I_E_D = "MEMBERSHIP_STATE_UNSPECIFIED";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__P_E_N_D_I_N_G = "MEMBERSHIP_STATE_PENDING";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__A_C_C_E_P_T_E_D = "MEMBERSHIP_STATE_ACCEPTED";
    public const M_E_M_B_E_R_S_H_I_P__S_T_A_T_E__D_E_C_L_I_N_E_D = "MEMBERSHIP_STATE_DECLINED";
}
