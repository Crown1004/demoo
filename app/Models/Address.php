<?php

namespace App\Models;

use App\Models\Shop\Brand;
use App\Models\Shop\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'street',
        'city',
        'state',
        'zip',
    ];

    public function customers()
    {
        return $this->morphedByMany(Customer::class, 'addressable');
    }

    public function brands()
    {
        return $this->morphedByMany(Brand::class, 'addressable');
    }
}
