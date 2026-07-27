<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipApplicationState extends Enum {
    public const M_E_M_B_E_R_S_H_I_P__A_P_P_L_I_C_A_T_I_O_N__S_T_A_T_E__U_N_S_P_E_C_I_F_I_E_D = "MEMBERSHIP_APPLICATION_STATE_UNSPECIFIED";
    public const M_E_M_B_E_R_S_H_I_P__A_P_P_L_I_C_A_T_I_O_N__S_T_A_T_E__P_E_N_D_I_N_G = "MEMBERSHIP_APPLICATION_STATE_PENDING";
    public const M_E_M_B_E_R_S_H_I_P__A_P_P_L_I_C_A_T_I_O_N__S_T_A_T_E__A_P_P_R_O_V_E_D = "MEMBERSHIP_APPLICATION_STATE_APPROVED";
    public const M_E_M_B_E_R_S_H_I_P__A_P_P_L_I_C_A_T_I_O_N__S_T_A_T_E__D_E_C_L_I_N_E_D = "MEMBERSHIP_APPLICATION_STATE_DECLINED";
    public const M_E_M_B_E_R_S_H_I_P__A_P_P_L_I_C_A_T_I_O_N__S_T_A_T_E__C_A_N_C_E_L_L_E_D = "MEMBERSHIP_APPLICATION_STATE_CANCELLED";
}
