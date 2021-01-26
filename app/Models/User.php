<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyEmail;
use App\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\GroupAndOption;
use App\Notifications\SMS_Access;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'users';

    public function _construct()
    {
        //
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'scope',
        'first_name',
        'surname',
        'username',
        'avatar',
        'email',
        'password',
        'theme',
        'language',
        'country_code',
        'phone_number',
        'token_login',
        'menu_desplegado',
        'opcion_seleccionada',
        'menu_bar_deployed',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    /**
     * The options that belong to the user.
     */
    public function groupsAndOptions()
    {
        return $this->belongsToMany(GroupAndOption::class);
    }

    /**
     * Para el envío de correo de confirmación de registro
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /** 
     * Se envía un SMS con un código de verificación al usuario indicado. 
     */
    function sendSMSCode()
    {
        $this->token_login = mt_rand(10000, 99999);
        $this->save();
        $mensaje = [
            'codigo' => $this->token_login,
        ];
        $this->notify(new SMS_Access($mensaje));
    }

    /**
     * Para el envío de correo de restablecimiento de contraseña
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyCustomResetPassword($token));
    }

    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return $this->country_code.$this->phone_number;
    }
}
