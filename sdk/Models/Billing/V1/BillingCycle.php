<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Enum;

class BillingCycle extends Enum {
    public const B_I_L_L_I_N_G__C_Y_C_L_E__U_N_S_P_E_C_I_F_I_E_D = "BILLING_CYCLE_UNSPECIFIED";
    public const B_I_L_L_I_N_G__C_Y_C_L_E__M_O_N_T_H_L_Y = "BILLING_CYCLE_MONTHLY";
    public const B_I_L_L_I_N_G__C_Y_C_L_E__Y_E_A_R_L_Y = "BILLING_CYCLE_YEARLY";
}
