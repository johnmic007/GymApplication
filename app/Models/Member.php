<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parents_name', 'institution_id', 'category', 'department', 'rollnumber_employeenumber', 'date_of_birth', 'mobile_number', 'age', 'gender', 'medical_conditions', 'address', 'current_weight', 'current_height', 'subscription_id', 'first_payment_date', 'membership_start_date', 'notes',
    ];
}
