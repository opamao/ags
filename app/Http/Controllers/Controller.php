<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // $result = Product::select('*')
    //         ->join("categorie_type", 'products.id_cat', '=', 'categorie_type.id_cat')
    //         ->join("categories", 'categorie_type.categorie_id', '=', 'categories.id')
    //         ->join("types", 'categorie_type.type_id', '=', 'types.id')
    //         ->where('store_id', 5)
    //         // ->groupBy('nom_categorie','nom_type')
    //         ->get()
    //         ->groupBy('nom_categorie')
    //         ->map(function ($group) {
    //             return $group->map(function ($value) {
    //                 return [
    //                     "nom_cat" => $value->nom_categorie,
    //                     "name" => $value->nom_type,
    //                     "status" => $value->status
    //                 ];
    //             });
    //         });

}
