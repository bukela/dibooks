<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workbook extends Model
{
    public function workbook_item() {

        return $this->hasOne(WorkbookItem::class);
    }
}
