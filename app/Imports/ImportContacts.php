<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportContacts implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   
    public function model(array $row)
    {
       
        return new Contact([
            'module_code'     => $row['module_code'],
            'module_name'    => $row['module_name'],
            'module_term'    => $row['module_term'],
        ]);
          
    }
        
    
}
