<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'customer_id', 'comment', 'complete_flg'
    ];

    public function findByCustomerId(String $customer_id)
    {
        $query = Task::where('customer_id', $customer_id);
        return $query->get();
    }
}
