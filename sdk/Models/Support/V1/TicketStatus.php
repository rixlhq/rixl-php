<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Enum;

class TicketStatus extends Enum {
    public const T_I_C_K_E_T__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "TICKET_STATUS_UNSPECIFIED";
    public const T_I_C_K_E_T__S_T_A_T_U_S__O_P_E_N = "TICKET_STATUS_OPEN";
    public const T_I_C_K_E_T__S_T_A_T_U_S__P_E_N_D_I_N_G = "TICKET_STATUS_PENDING";
    public const T_I_C_K_E_T__S_T_A_T_U_S__R_E_S_O_L_V_E_D = "TICKET_STATUS_RESOLVED";
    public const T_I_C_K_E_T__S_T_A_T_U_S__C_L_O_S_E_D = "TICKET_STATUS_CLOSED";
}
