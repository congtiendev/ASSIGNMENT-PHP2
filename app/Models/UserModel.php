<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class UserModel extends Model
    {
        /**
         * @var mixed|string
         */
        protected $table = 'accounts';
        protected $primaryKey = 'user_id';
        public $timestamps = false;
        protected $fillable = [
            'user_id',
            'user_name',
            'full_name',
            'email',
            'phone',
            'password',
            'address',
            'birth_year',
            'avatar',
            'status',
            'role',
        ];
    }