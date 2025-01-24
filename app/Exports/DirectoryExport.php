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
use  DB;

class DirectoryExport implements FromCollection, WithMapping, WithHeadings, WithStyles, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function __construct($request){
        $this->category_id = $request->category_id;
    }


    public function collection()
    {
        $category = $this->category_id;
        $data = Directory::WhereHas('office', function ($q) use ($category) {
            return $q->where('category_id',$category);
        })->get();

        return $data;
    }
    
    public function map($directory): array
    {
        $office = json_decode($directory->office, true)['office'] ?? $directory->office;
        return [
            $directory->directory_no,
            $office,
            $directory->contact_name,
            $directory->type,
            $directory->email
        ];
    }

    public function headings(): array
    {
        return[
            'Directory No',
            'Office Name',
            'Contact Name',
            'Type',
            'Email'
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
