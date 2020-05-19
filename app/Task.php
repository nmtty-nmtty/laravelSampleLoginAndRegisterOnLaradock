<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'customer_id', 'comment', 'complete_flg'
    ];

    public function findByCustomerId($customer_id)
    {
        $query = Task::where('customer_id', $customer_id);
        return $query->get();
    }

    public function findById($id)
    {
        $query = Task::where('id', $id);
        return $query->get();
    }
}
