<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_destroy',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_destroy',

            'user_index',
            'user_create',
            'user_show',
            'user_edit',
            'user_destroy',

            'cargo_index',
            'cargo_create',
            'cargo_show',
            'cargo_edit',
            'cargo_destroy',

            'departamento_index',
            'departamento_create',
            'departamento_show',
            'departamento_edit',
            'departamento_destroy',

            'tipo_index',
            'tipo_create',
            'tipo_show',
            'tipo_edit',
            'tipo_destroy',

            'trabajadore_index',
            'trabajadore_create',
            'trabajadore_show',
            'trabajadore_edit',
            'trabajadore_destroy',

            'paciente_index',
            'paciente_create',
            'paciente_show',
            'paciente_edit',
            'paciente_destroy',

            'carpeta_index',
            'carpeta_create',
            'carpeta_show',
            'carpeta_edit',
            'carpeta_destroy',

            'documento_index',
            'documento_create',
            'documento_show',
            'documento_edit',
            'documento_destroy',

            'etiqueta_index',
            'etiqueta_create',
            'etiqueta_show',
            'etiqueta_edit',
            'etiqueta_destroy',

            'explorador_index',
            'explorador_create',
            'explorador_show',
            'explorador_edit',
            'explorador_destroy',
            'documento_download',

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
