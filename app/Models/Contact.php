<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lester\EloquentSalesForce\Model;

class Contact extends Model
{
    use HasFactory;
    
    /* 
    Default fields to retrieve from SalesForce
    */
    public $columns = [
        'Name',
        'Id',
        'Email',
        'Salutation',
        'FirstName',
        'LastName',
        'Title',
        'AccountId',
        'Phone',
        'MobilePhone',
        'OwnerId',
        'Department',
        'Birthdate',
        'MailingAddress',
        'PhotoUrl'
    ];
}
