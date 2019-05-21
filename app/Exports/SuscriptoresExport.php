<?php

namespace App\Exports;

use App\Suscriptor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SuscriptoresExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Suscriptor::select('email', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'Email',
            'Fecha de alta',
        ];
    }
}
