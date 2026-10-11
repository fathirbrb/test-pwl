<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $guarded = ['id'];

    // Pengaturan agar ID tidak dianggap auto-increment angka
    public $incrementing = false;
    protected $keyType = 'string';

    // Membuat UUID otomatis setiap kali ada data baru yang ditambah
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getAllMK()
    {
        return $this->all();
    }
}