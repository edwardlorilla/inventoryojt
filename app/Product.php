<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manufacturer_id', 'category_id', 'Productmodel_id','status', 'serial_number','quantity', 'tag_number', 'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
    public function Location()
    {
        return $this->belongsTo(Location::class);
    }
    public function Manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
    public function Productmodel()
    {
        return $this->belongsTo(Productmodel::class);
    }

}
