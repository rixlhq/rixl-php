<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationCategory extends Enum {
    public const N_O_T_I_F_I_C_A_T_I_O_N__C_A_T_E_G_O_R_Y__U_N_S_P_E_C_I_F_I_E_D = "NOTIFICATION_CATEGORY_UNSPECIFIED";
    public const N_O_T_I_F_I_C_A_T_I_O_N__C_A_T_E_G_O_R_Y__U_S_A_G_E = "NOTIFICATION_CATEGORY_USAGE";
    public const N_O_T_I_F_I_C_A_T_I_O_N__C_A_T_E_G_O_R_Y__P_A_Y_M_E_N_T = "NOTIFICATION_CATEGORY_PAYMENT";
}
