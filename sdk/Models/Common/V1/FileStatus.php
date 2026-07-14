<?php

namespace Rixl\Sdk\Models\Common\V1;

use Microsoft\Kiota\Abstractions\Enum;

class FileStatus extends Enum {
    public const F_I_L_E__S_T_A_T_U_S__U_N_S_P_E_C_I_F_I_E_D = "FILE_STATUS_UNSPECIFIED";
    public const F_I_L_E__S_T_A_T_U_S__U_P_L_O_A_D_I_N_G = "FILE_STATUS_UPLOADING";
    public const F_I_L_E__S_T_A_T_U_S__U_P_L_O_A_D_E_D = "FILE_STATUS_UPLOADED";
    public const F_I_L_E__S_T_A_T_U_S__P_R_O_C_E_S_S_I_N_G = "FILE_STATUS_PROCESSING";
    public const F_I_L_E__S_T_A_T_U_S__P_R_E_P_A_R_I_N_G = "FILE_STATUS_PREPARING";
    public const F_I_L_E__S_T_A_T_U_S__R_E_A_D_Y = "FILE_STATUS_READY";
    public const F_I_L_E__S_T_A_T_U_S__E_R_R_O_R = "FILE_STATUS_ERROR";
}
