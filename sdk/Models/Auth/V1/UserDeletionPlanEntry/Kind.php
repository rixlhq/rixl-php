<?php

namespace Rixl\Sdk\Models\Auth\V1\UserDeletionPlanEntry;

use Microsoft\Kiota\Abstractions\Enum;

class Kind extends Enum {
    public const K_I_N_D__U_N_S_P_E_C_I_F_I_E_D = "KIND_UNSPECIFIED";
    public const K_I_N_D__D_E_L_E_T_E__O_R_G_A_N_I_Z_A_T_I_O_N = "KIND_DELETE_ORGANIZATION";
    public const K_I_N_D__L_E_A_V_E__O_R_G_A_N_I_Z_A_T_I_O_N = "KIND_LEAVE_ORGANIZATION";
    public const K_I_N_D__S_O_L_E__O_W_N_E_R__B_L_O_C_K_E_R = "KIND_SOLE_OWNER_BLOCKER";
    public const K_I_N_D__I_N_T_E_R_N_A_L__O_R_G__B_L_O_C_K_E_R = "KIND_INTERNAL_ORG_BLOCKER";
    public const K_I_N_D__P_E_R_S_O_N_A_L__O_R_G__M_E_M_B_E_R = "KIND_PERSONAL_ORG_MEMBER";
}
