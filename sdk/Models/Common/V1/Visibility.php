<?php

namespace Rixl\Sdk\Models\Common\V1;

use Microsoft\Kiota\Abstractions\Enum;

class Visibility extends Enum {
    public const V_I_S_I_B_I_L_I_T_Y__U_N_S_P_E_C_I_F_I_E_D = "VISIBILITY_UNSPECIFIED";
    public const V_I_S_I_B_I_L_I_T_Y__P_U_B_L_I_C = "VISIBILITY_PUBLIC";
    public const V_I_S_I_B_I_L_I_T_Y__U_N_L_I_S_T_E_D = "VISIBILITY_UNLISTED";
    public const V_I_S_I_B_I_L_I_T_Y__P_R_I_V_A_T_E = "VISIBILITY_PRIVATE";
}
