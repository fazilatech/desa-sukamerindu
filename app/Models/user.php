<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;


    protected $fillable = [

        'nik',

        'name',

        'phone',

        'username',

        'password',

        'role',

    ];


    protected $hidden = [

        'password',

        'remember_token',

    ];



    protected function casts(): array
    {
        return [

            'email_verified_at' => 'datetime',

            'password' => 'hashed',

        ];
    }



    /**
     * Product Views.
     */
    public function productViews(): HasMany
    {
        return $this->hasMany(
            ProductView::class
        );
    }


    /**
     * Orders.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(
            Order::class
        );
    }


    /**
     * Shipping Addresses.
     */
    public function shippingAddresses(): HasMany
    {
        return $this->hasMany(
            ShippingAddress::class
        );
    }


    /**
     * Verified Payments.
     */
    public function verifiedPayments(): HasMany
    {
        return $this->hasMany(
            Payment::class,
            'verified_by'
        );
    }


    /**
     * Order Status Logs.
     */
    public function performedStatusLogs(): HasMany
    {
        return $this->hasMany(
            OrderStatusLog::class,
            'performed_by'
        );
    }



    /**
     * Apakah Kepala Desa?
     */
    public function isKepalaDesa(): bool
    {
        return $this->role === 'kepala_desa';
    }


    /**
     * Apakah Sekretaris Desa?
     */
    public function isSekretarisDesa(): bool
    {
        return $this->role === 'sekretaris_desa';
    }


    /**
     * Apakah Warga?
     */
    public function isWarga(): bool
    {
        return $this->role === 'warga';
    }




    /**
     * Scope Kepala Desa.
     */
    public function scopeKepalaDesa($query)
    {
        return $query->where(
            'role',
            'kepala_desa'
        );
    }


    /**
     * Scope Sekretaris Desa.
     */
    public function scopeSekretarisDesa($query)
    {
        return $query->where(
            'role',
            'sekretaris_desa'
        );
    }


    /**
     * Scope Warga.
     */
    public function scopeWarga($query)
    {
        return $query->where(
            'role',
            'warga'
        );
    }
}
