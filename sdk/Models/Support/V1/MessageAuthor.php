<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Enum;

class MessageAuthor extends Enum {
    public const M_E_S_S_A_G_E__A_U_T_H_O_R__U_N_S_P_E_C_I_F_I_E_D = "MESSAGE_AUTHOR_UNSPECIFIED";
    public const M_E_S_S_A_G_E__A_U_T_H_O_R__C_U_S_T_O_M_E_R = "MESSAGE_AUTHOR_CUSTOMER";
    public const M_E_S_S_A_G_E__A_U_T_H_O_R__A_G_E_N_T = "MESSAGE_AUTHOR_AGENT";
    public const M_E_S_S_A_G_E__A_U_T_H_O_R__S_Y_S_T_E_M = "MESSAGE_AUTHOR_SYSTEM";
}
