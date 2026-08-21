<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ExportFormat extends Enum {
    public const E_X_P_O_R_T__F_O_R_M_A_T__U_N_S_P_E_C_I_F_I_E_D = "EXPORT_FORMAT_UNSPECIFIED";
    public const E_X_P_O_R_T__F_O_R_M_A_T__C_S_V = "EXPORT_FORMAT_CSV";
    public const E_X_P_O_R_T__F_O_R_M_A_T__X_L_S_X = "EXPORT_FORMAT_XLSX";
    public const E_X_P_O_R_T__F_O_R_M_A_T__P_D_F = "EXPORT_FORMAT_PDF";
    public const E_X_P_O_R_T__F_O_R_M_A_T__J_S_O_N = "EXPORT_FORMAT_JSON";
}
