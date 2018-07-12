<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkbookItem extends Model
{
    public function workbook() {

        return $this->belongsTo(Workbook::class);
    }
}
