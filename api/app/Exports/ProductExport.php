<?php

namespace App\Exports;

use App\Models\Product as ModelsProduct;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsProduct::all();
    }
}