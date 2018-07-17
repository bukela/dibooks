<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workbook extends Model
{
    public function workbook_item() {

        return $this->hasOne(WorkbookItem::class);
    }

    public function scopeSearch($query, $search) {
        return $query->where('predmet', 'LIKE', "%$search%");
    }

}
