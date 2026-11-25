<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class OrganizationState extends Enum {
    public const O_R_G_A_N_I_Z_A_T_I_O_N__S_T_A_T_E__U_N_S_P_E_C_I_F_I_E_D = "ORGANIZATION_STATE_UNSPECIFIED";
    public const O_R_G_A_N_I_Z_A_T_I_O_N__S_T_A_T_E__A_C_T_I_V_E = "ORGANIZATION_STATE_ACTIVE";
    public const O_R_G_A_N_I_Z_A_T_I_O_N__S_T_A_T_E__D_E_L_E_T_E_D = "ORGANIZATION_STATE_DELETED";
    public const O_R_G_A_N_I_Z_A_T_I_O_N__S_T_A_T_E__P_U_R_G_I_N_G = "ORGANIZATION_STATE_PURGING";
}
