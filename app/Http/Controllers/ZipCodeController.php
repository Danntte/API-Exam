<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZipCodes;

class ZipCodeController extends Controller
{
    function show($zCode){
        
        $zipCode = ZipCodes::where('d_codigo', '=', (string)$zCode)->get();
        
        $zipCodeRefactor = [
            "zip_code" => $zipCode[0]->d_codigo,
            "locality" => $zipCode[0]->d_asenta,
            "federal_entity" => ["key"=>$zipCode[0]->c_estado,"name"=>$zipCode[0]->d_estado,"code"=>null],
            "settlements"=>[["key"=>$zipCode[0]->id_asenta_cpcons,"name"=>$zipCode[0]->d_asenta,"zone_type"=>$zipCode[0]->d_zona,"settlement_type"=>["name"=>$zipCode[0]->d_tipo_asenta]]],
            "municipality"=>["key"=>$zipCode[0]->c_mnpio,"name"=>$zipCode[0]->D_mnpio],
        ];

        return $zipCodeRefactor; 
    }
}
