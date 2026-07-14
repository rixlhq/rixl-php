<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Enum;

class SalesLeadStatus extends Enum {
    public const S_A_L_E_S__L_E_A_D__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "SALES_LEAD_STATUS_UNSPECIFIED";
    public const S_A_L_E_S__L_E_A_D__S_T_A_T_U_S__N_E_W = "SALES_LEAD_STATUS_NEW";
    public const S_A_L_E_S__L_E_A_D__S_T_A_T_U_S__C_O_N_T_A_C_T_E_D = "SALES_LEAD_STATUS_CONTACTED";
    public const S_A_L_E_S__L_E_A_D__S_T_A_T_U_S__Q_U_A_L_I_F_I_E_D = "SALES_LEAD_STATUS_QUALIFIED";
    public const S_A_L_E_S__L_E_A_D__S_T_A_T_U_S__C_L_O_S_E_D = "SALES_LEAD_STATUS_CLOSED";
}
