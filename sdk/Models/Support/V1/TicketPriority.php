<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Enum;

class TicketPriority extends Enum {
    public const T_I_C_K_E_T__P_R_I_O_R_I_T_Y__U_N_S_P_E_C_I_F_I_E_D = "TICKET_PRIORITY_UNSPECIFIED";
    public const T_I_C_K_E_T__P_R_I_O_R_I_T_Y__L_O_W = "TICKET_PRIORITY_LOW";
    public const T_I_C_K_E_T__P_R_I_O_R_I_T_Y__N_O_R_M_A_L = "TICKET_PRIORITY_NORMAL";
    public const T_I_C_K_E_T__P_R_I_O_R_I_T_Y__H_I_G_H = "TICKET_PRIORITY_HIGH";
    public const T_I_C_K_E_T__P_R_I_O_R_I_T_Y__U_R_G_E_N_T = "TICKET_PRIORITY_URGENT";
}
