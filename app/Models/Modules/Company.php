<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $connection = 'pgsql-local';

    protected $table = 'companies';

    protected $fillable = [
        "name",
        "address1",
        "address2",
        "zip",
        "state",
        "phone",
        "status",
        "remember_token",
        "country",
        "subdomain",
        "image",
        "bucket_name",
        "timezone",
        "integrations",
        "arena_WorkspaceId",
        "logo_id",
        "glacier_vault_name",
        "sso_enabled",
        "manual_login",
        "email_notifications",
        "last_login_field",
        "api_token",
        "required_signature_verification",
    ];

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];
}
