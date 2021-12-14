<?php

namespace App\Exports;

use App\Directory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class DirectoryExport implements FromCollection, WithMapping, WithHeadings, WithStyles, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return Directory::all();
    }
    
    public function map($directory): array
    {
        return [
            $directory->directory_no,
            $directory->contact_name,
            $directory->type,
        ];
    }
    public function headings(): array
    {
        return[
            'Directory No',
            'Contact Name',
            'Type',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return[
            1 => ['font' => ['bold' => 'italic']],
        ];
    }

    public function columnWidths(): array
    {
        return[
            'A' => 15,
            'B' => 55,
            'C' => 20,
        ];
    }
}
