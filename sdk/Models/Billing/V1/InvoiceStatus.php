<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Enum;

class InvoiceStatus extends Enum {
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "INVOICE_STATUS_UNSPECIFIED";
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__D_R_A_F_T = "INVOICE_STATUS_DRAFT";
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__O_P_E_N = "INVOICE_STATUS_OPEN";
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__P_A_I_D = "INVOICE_STATUS_PAID";
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__V_O_I_D = "INVOICE_STATUS_VOID";
    public const I_N_V_O_I_C_E__S_T_A_T_U_S__U_N_C_O_L_L_E_C_T_I_B_L_E = "INVOICE_STATUS_UNCOLLECTIBLE";
}
