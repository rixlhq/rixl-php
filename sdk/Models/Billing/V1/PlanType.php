<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Enum;

class PlanType extends Enum {
    public const P_L_A_N__T_Y_P_E__U_N_S_P_E_C_I_F_I_E_D = "PLAN_TYPE_UNSPECIFIED";
    public const P_L_A_N__T_Y_P_E__F_R_E_E = "PLAN_TYPE_FREE";
    public const P_L_A_N__T_Y_P_E__P_A_Y__A_S__Y_O_U__G_O = "PLAN_TYPE_PAY_AS_YOU_GO";
    public const P_L_A_N__T_Y_P_E__P_R_O = "PLAN_TYPE_PRO";
    public const P_L_A_N__T_Y_P_E__C_U_S_T_O_M = "PLAN_TYPE_CUSTOM";
}
