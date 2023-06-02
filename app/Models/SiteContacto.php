<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* Como funciona o padrão do Eloquente para Relacionar Model x Table
 * O Eloquente entende que o Model está criado com letras maiusculas
 * Então ele faz uma separacão Ex: SiteContacto => Site_Contact => site_contacto
 * Em seguida ele adicona um 's' ao final pela padronizacão do Laravel:
 * site_contactos
 * */

class SiteContacto extends Model
{
    use HasFactory;
    protected $table = 'site_contactos';

    protected $fillable = ['name', 'phone', 'email', 'motivo_contatos_id', 'message'];
}
