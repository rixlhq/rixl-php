<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipRole extends Enum {
    public const M_E_M_B_E_R_S_H_I_P__R_O_L_E__U_N_S_P_E_C_I_F_I_E_D = "MEMBERSHIP_ROLE_UNSPECIFIED";
    public const M_E_M_B_E_R_S_H_I_P__R_O_L_E__O_W_N_E_R = "MEMBERSHIP_ROLE_OWNER";
    public const M_E_M_B_E_R_S_H_I_P__R_O_L_E__A_D_M_I_N = "MEMBERSHIP_ROLE_ADMIN";
    public const M_E_M_B_E_R_S_H_I_P__R_O_L_E__M_E_M_B_E_R = "MEMBERSHIP_ROLE_MEMBER";
}
