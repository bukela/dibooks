<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkbookItem extends Model
{
    public function workbook() {

        return $this->belongsTo(Workbook::class);
    }

    public function getDatumPrijemaAttribute($value) {

        return date("d-m-Y", strtotime($value));
        
    }

    public function getDatumAttribute($value) {

        return date("d-m-Y", strtotime($value));
        
    }
}
