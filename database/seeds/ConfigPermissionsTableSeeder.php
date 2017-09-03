<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigPermissionsTableSeeder extends Seeder
{




    /**
     * Criar as permissões padrões do sistema.
     *
     *@param id AUTO_INCREMENT
     *@param module_id
     *@param name 
     *@param label
     * @return void
     */
    public function run()
    {
    	$id   = mt_rand(1, '123456789');
        $date = date('Y-m-d H:i:s');


        /************* Config ************/
		DB::table('config_permissions')->insert([
			'id' => $id,
        	'module_id' => 1,
        	'name' => 'config-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id,
            'config_profile_id' => 2
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id,
            'config_profile_id' => 3
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id,
            'config_profile_id' => 4
        ]);

        /************* Modules ************/
		DB::table('config_permissions')->insert([
        	'module_id' => 2,
        	'name' => 'config-module-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 2,
        	'name' => 'config-module-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 2,
        	'name' => 'config-module-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 2,
        	'name' => 'config-module-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);

        /************* Profiles ************/
		DB::table('config_permissions')->insert([
        	'module_id' => 3,
        	'name' => 'config-profile-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+5,
            'config_profile_id' => 2
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 3,
        	'name' => 'config-profile-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]); 
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+6,
            'config_profile_id' => 2
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 3,
        	'name' => 'config-profile-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+7,
            'config_profile_id' => 2
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 3,
        	'name' => 'config-profile-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+8,
            'config_profile_id' => 2
        ]);

        /************* Permissions ************/
		DB::table('config_permissions')->insert([
        	'module_id' => 4,
        	'name' => 'config-permission-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+9,
            'config_profile_id' => 2
        ]);        
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 4,
        	'name' => 'config-permission-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+10,
            'config_profile_id' => 2
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 4,
        	'name' => 'config-permission-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+11,
            'config_profile_id' => 2
        ]);
        /********************************/
		DB::table('config_permissions')->insert([
        	'module_id' => 4,
        	'name' => 'config-permission-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]); 
		DB::table('config_permission_config_profile')->insert([
        	'config_permission_id' => $id+12,
            'config_profile_id' => 2
        ]);

        /********************************/
        DB::table('config_permissions')->insert([
            'module_id' => 1,
            'name' => 'config-menu-permissions',
            'label' => 'Menu: Segurança e Permissões',
            'created_at' => $date
        ]); 
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+13,
            'config_profile_id' => 2
        ]);

        /********************************/
        DB::table('config_permissions')->insert([
            'module_id' => 5,
            'name' => 'config-product-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]); 
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+14,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+14,
            'config_profile_id' => 4
        ]);

        /********************************/
        DB::table('config_permissions')->insert([
            'module_id' => 5,
            'name' => 'config-product-update',
            'label' => 'Editar',
            'created_at' => $date
        ]); 
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+15,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+15,
            'config_profile_id' => 4
        ]);

        /********************************/
        DB::table('config_permissions')->insert([
            'module_id' => 6,
            'name' => 'config-freight-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]); 
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+16,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+16,
            'config_profile_id' => 4
        ]);

        /********************************/
        DB::table('config_permissions')->insert([
            'module_id' => 6,
            'name' => 'config-freight-update',
            'label' => 'Editar',
            'created_at' => $date
        ]); 
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+17,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+17,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 7,
            'name' => 'config-keyword-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+18,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+18,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 7,
            'name' => 'config-keyword-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+19,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+19,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 7,
            'name' => 'config-keyword-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+19,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+19,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 7,
            'name' => 'config-keyword-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+20,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+20,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 8,
            'name' => 'config-percent-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+21,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+21,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 8,
            'name' => 'config-percent-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+22,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+22,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 8,
            'name' => 'config-percent-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+23,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+23,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 8,
            'name' => 'config-percent-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+24,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+24,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 9,
            'name' => 'config-shipping-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+25,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+25,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 9,
            'name' => 'config-shipping-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+26,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+26,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 9,
            'name' => 'config-shipping-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+27,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+27,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 9,
            'name' => 'config-shipping-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+28,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+28,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 10,
            'name' => 'config-unit-measure-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+29,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+29,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 10,
            'name' => 'config-unit-measure-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+30,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+30,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 10,
            'name' => 'config-unit-measure-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+31,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+31,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 10,
            'name' => 'config-unit-measure-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+32,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+32,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 11,
            'name' => 'config-brand-view',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+33,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+33,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 11,
            'name' => 'config-brand-update',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+34,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+34,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 12,
            'name' => 'config-section-view',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+35,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+35,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 12,
            'name' => 'config-section-update',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+36,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+36,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 13,
            'name' => 'config-category-view',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+37,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+37,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 13,
            'name' => 'config-category-update',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+38,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+38,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 14,
            'name' => 'config-image-product-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+39,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+39,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 14,
            'name' => 'config-image-product-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+40,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+40,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 14,
            'name' => 'config-image-product-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+41,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+41,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 14,
            'name' => 'config-image-product-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+42,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+42,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 15,
            'name' => 'config-color-group-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+43,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+43,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 15,
            'name' => 'config-color-group-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+44,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+44,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 15,
            'name' => 'config-color-group-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+45,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+45,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 15,
            'name' => 'config-color-group-delete',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+46,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+46,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 16,
            'name' => 'config-kit-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+47,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+47,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 16,
            'name' => 'config-kit-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+48,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+48,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 16,
            'name' => 'config-kit-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+49,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+49,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 16,
            'name' => 'config-kit-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+50,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+50,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 17,
            'name' => 'config-profile-client-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+51,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 17,
            'name' => 'config-profile-client-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+52,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 17,
            'name' => 'config-profile-client-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+53,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 17,
            'name' => 'config-profile-client-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+54,
            'config_profile_id' => 2
        ]);


        /*
        |----------------------------------------|
        | INICIO RESERVADOS                      |
        |----------------------------------------|
        */

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 18,
            'name' => 'reservado-18',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+55,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 19,
            'name' => 'reservado-19',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+56,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 20,
            'name' => 'reservado-20',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+57,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 21,
            'name' => 'reservado-21',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+58,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 22,
            'name' => 'reservado-22',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+59,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 23,
            'name' => 'reservado-23',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+60,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 24,
            'name' => 'reservado-24',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+61,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 25,
            'name' => 'reservado-25',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+62,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 26,
            'name' => 'reservado-26',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+63,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 27,
            'name' => 'reservado-27',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+64,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 28,
            'name' => 'reservado-28',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+65,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 29,
            'name' => 'reservado-29',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+66,
            'config_profile_id' => 1
        ]);


        /*
        |----------------------------------------|
        | FIM RESERVADOS                      |
        |----------------------------------------|
        */




        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+67,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+68,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+69,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+70,
            'config_profile_id' => 2
        ]);


        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-excluded',
            'label' => 'Visualizar Excluidos',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+71,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-reactivate',
            'label' => 'Reativar Excluidos',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+72,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-password-update',
            'label' => 'Alterar Senha',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+73,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-access',
            'label' => 'Visualizar Acessos',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+74,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-access-delete',
            'label' => 'Remover Acesos',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+75,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-permissions-view',
            'label' => 'Visualizar Permissões',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+76,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-permissions-update',
            'label' => 'Editar Permissões',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+77,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-historic-view',
            'label' => 'Visualizar Histórico',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+78,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-historic-personal',
            'label' => 'Visualizar seu própio histórico',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+79,
            'config_profile_id' => 2
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+79,
            'config_profile_id' => 3
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+79,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-goal-view',
            'label' => 'Visualizar Metas',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+80,
            'config_profile_id' => 2
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-goal-personal',
            'label' => 'Visualizar sua própia meta',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+81,
            'config_profile_id' => 2
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+81,
            'config_profile_id' => 3
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+81,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'model-users-profile',
            'label' => 'Alterar o própio perfil',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+82,
            'config_profile_id' => 2
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+82,
            'config_profile_id' => 3
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+82,
            'config_profile_id' => 4
        ]);

        //  INICIO RESERVADO USERS

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'reservado1',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+83,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'reservado2',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+84,
            'config_profile_id' => 1
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'reservado3',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+85,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'reservado4',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+86,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 30,
            'name' => 'reservado5',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+87,
            'config_profile_id' => 1
        ]);

        //  FIM RESERVADO

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+88,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+88,
            'config_profile_id' => 3
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+88,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+89,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+89,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+90,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+90,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+91,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+91,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-grids-view',
            'label' => 'Visualizar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+92,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+92,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+92,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-grids-create',
            'label' => 'Adicionar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+93,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+93,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-grids-update',
            'label' => 'Editar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+94,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+94,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-grids-delete',
            'label' => 'Excluir Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+95,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+95,
            'config_profile_id' => 4
        ]);


        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-images-view',
            'label' => 'Visualizar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+96,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+96,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+96,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-images-create',
            'label' => 'Adicionar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+97,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+97,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-images-update',
            'label' => 'Editar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+98,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+98,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'brand-images-delete',
            'label' => 'Excluir Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+99,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+99,
            'config_profile_id' => 4
        ]);

        //  INICIO RESERVADO BRAND

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'reservado6',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+100,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'reservado7',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+101,
            'config_profile_id' => 1
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'reservado8',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+102,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'reservado9',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+103,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 31,
            'name' => 'reservado10',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+104,
            'config_profile_id' => 1
        ]);

        //  FIM RESERVADO


        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+105,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+105,
            'config_profile_id' => 3
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+105,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+106,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+106,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+107,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+107,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+108,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+108,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-grids-view',
            'label' => 'Visualizar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+109,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+109,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+109,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-grids-create',
            'label' => 'Adicionar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+110,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+110,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-grids-update',
            'label' => 'Editar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+111,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+111,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-grids-delete',
            'label' => 'Excluir Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+112,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+112,
            'config_profile_id' => 4
        ]);


        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-images-view',
            'label' => 'Visualizar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+113,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+113,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+113,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-images-create',
            'label' => 'Adicionar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+114,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+114,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-images-update',
            'label' => 'Editar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+115,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+115,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'section-images-delete',
            'label' => 'Excluir Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+116,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+116,
            'config_profile_id' => 4
        ]);

        //  INICIO RESERVADO SECTION
        
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'reservado11',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+117,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'reservado12',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+118,
            'config_profile_id' => 1
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'reservado13',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+119,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'reservado14',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+120,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 32,
            'name' => 'reservado15',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+121,
            'config_profile_id' => 1
        ]);

        //  FIM RESERVADO

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+122,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+122,
            'config_profile_id' => 3
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+122,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+123,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+123,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+124,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+124,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+125,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+125,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-grids-view',
            'label' => 'Visualizar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+126,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+126,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+126,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-grids-create',
            'label' => 'Adicionar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+127,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+127,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-grids-update',
            'label' => 'Editar Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+128,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+128,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-grids-delete',
            'label' => 'Excluir Grades',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+129,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+129,
            'config_profile_id' => 4
        ]);


        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-images-view',
            'label' => 'Visualizar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+130,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+130,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+130,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-images-create',
            'label' => 'Adicionar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+131,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+131,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-images-update',
            'label' => 'Editar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+132,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+132,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'category-images-delete',
            'label' => 'Excluir Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+133,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+133,
            'config_profile_id' => 4
        ]);

        
        //  INICIO RESERVADO CATEGORY

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'reservado16',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+134,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'reservado17',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+135,
            'config_profile_id' => 1
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'reservado18',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+136,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'reservado19',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+137,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 33,
            'name' => 'reservado20',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+138,
            'config_profile_id' => 1
        ]);

        //  FIM RESERVADO  
       
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-view',
            'label' => 'Visualizar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+139,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+139,
            'config_profile_id' => 3
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+139,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-create',
            'label' => 'Adicionar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+140,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+140,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-update',
            'label' => 'Editar',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+141,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+141,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-delete',
            'label' => 'Excluir',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+142,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+142,
            'config_profile_id' => 4
        ]);

    /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-images-view',
            'label' => 'Visualizar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+143,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+143,
            'config_profile_id' => 3
        ]);

        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+143,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-images-create',
            'label' => 'Adicionar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+144,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+144,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-images-update',
            'label' => 'Editar Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+145,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+145,
            'config_profile_id' => 4
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'product-images-delete',
            'label' => 'Excluir Imagens',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+146,
            'config_profile_id' => 2
        ]);
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+146,
            'config_profile_id' => 4
        ]);

        //  INICIO RESERVADO CATALOG

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'reservado21',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+147,
            'config_profile_id' => 1
        ]);

        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'reservado22',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+148,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'reservado23',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+149,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'reservado24',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+150,
            'config_profile_id' => 1
        ]);
        /*|||||||||||||||||||||||||||||||||||||*/
        DB::table('config_permissions')->insert([
            'module_id' => 34,
            'name' => 'reservado25',
            'label' => 'Reservado',
            'created_at' => $date
        ]);
        /*-------------------------------------*/
        DB::table('config_permission_config_profile')->insert([
            'config_permission_id' => $id+151,
            'config_profile_id' => 1
        ]);

        //  FIM RESERVADO CATALOG


    }



    /*
    |--------------------------------------------------------------------------
    | Profiles Deflaut
    |--------------------------------------------------------------------------
    | 1 - Master
    | 2 - Administrador
    | 3 - Vendedor
    | 4 - Editor
    |--------------------------------------------------------------------------
    | Modules
    |--------------------------------------------------------------------------
    | 1 - Configuração do sistema.
    |     - config-view
    |     - config-menu-permissions
    | 2 - Modulos do sistema.
    |     - config-module-view
    |     - config-module-create
    |     - config-module-update
    |     - config-module-delete
    | 3 - Perfis dos usuários.
    |     - config-profile-view
    |     - config-profile-create
    |     - config-profile-update
    |     - config-profile-delete
    | 4 - Prmissões para os perfis.
    |     - config-permission-view
    |     - config-permission-create
    |     - config-permission-update
    |     - config-permission-delete
    | 5 - Configurações dos Produtos.
    |     - config-product-view
    |     - config-product-update
    | 6 - Configurações dos Produtos.
    |     - config-freight-view
    |     - config-freight-update
    | 7 - Palavras chaves (SEO).
    |     - config-keyword-view
    |     - config-keyword-create
    |     - config-keyword-update
    |     - config-keyword-delete
    | 8 - Porcentagens.
    |     - config-percent-view
    |     - config-percent-create
    |     - config-percent-update
    |     - config-percent-delete
    | 9 - Métodos de envio.
    |     - config-shipping-view
    |     - config-shipping-create
    |     - config-shipping-update
    |     - config-shipping-delete
    | 10- Unidades de Medidas
    |     - config-unit-measure-view
    |     - config-unit-measure-create
    |     - config-unit-measure-update
    |     - config-unit-measure-delete
    | 11- Configurações dos imagens dos fabricantes.
    |     - config-brand-view
    |     - config-brand-update
    | 12- Configurações das imagens das seções
    |     - config-section-view
    |     - config-section-update
    | 13- Configurações das imagens das categorias
    |     - config-category-view
    |     - config-category-update
    | 14- Unidades de Medidas
    |     - config-image-product-view
    |     - config-image-product-create
    |     - config-image-product-update
    |     - config-image-product-delete
    | 15- Grupo de Cores
    |     - config-color-group-view
    |     - config-color-group-create
    |     - config-color-group-update
    |     - config-color-group-delete
    | 16- Vendas por Kits
    |     - config-kit-view
    |     - config-kit-create
    |     - config-kit-update
    |     - config-kit-delete
    | 17- Perfil do Cliente
    |     - config-profile-client-view
    |     - config-profile-client-create
    |     - config-profile-client-update
    |     - config-profile-client-delete
    | 18-29 RESERVADOS PARA CONFIGURAÇÃO
    | 30  - Permissões dos Usuários
    |     - model-users-view
    |     - model-users-create
    |     - model-users-update
    |     - model-users-delete
    |     - model-users-excluded
    |     - model-users-reactivate
    !     - model-users-password-update
    |     - model-users-access
    |     - model-users-access-delete
    |     - model-users-permissions-update
    |     - model-users-historic-view
    |     - model-users-historic-personal
    |     - model-users-goal-view
    |     - model-users-goal-personal
    |     - model-users-profile
    |     - model-users-reservado
    |     - model-users-reservado     
    |     - model-users-reservado     
    |     - model-users-reservado  
    |     - model-users-reservado
    | 31- Fabricantes
    |     - brand-view
    |     - brand-create
    |     - brand-update
    |     - brand-delete
    |     - brand-grids-wiew
    |     - brand-grids-create
    |     - brand-grids-update
    |     - brand-grids-delete
    |     - brand-images-wiew
    |     - brand-images-create
    |     - brand-images-update
    |     - brand-images-delete
    |     - model-brands-reservado
    |     - model-brands-reservado     
    |     - model-brands-reservado     
    |     - model-brands-reservado  
    |     - model-brands-reservado
    | 32- Seções
    |     - section-view
    |     - section-create
    |     - section-update
    |     - section-delete
    |     - section-grids-wiew
    |     - section-grids-create
    |     - section-grids-update
    |     - section-grids-delete
    |     - section-images-wiew
    |     - section-images-create
    |     - section-images-update
    |     - section-images-delete
    |     - model-sections-reservado
    |     - model-sections-reservado     
    |     - model-sections-reservado     
    |     - model-sections-reservado  
    |     - model-sections-reservado
    | 33- Categorias
    |     - category-view
    |     - category-create
    |     - category-update
    |     - category-delete
    |     - category-grids-wiew
    |     - category-grids-create
    |     - category-grids-update
    |     - category-grids-delete
    |     - category-images-wiew
    |     - category-images-create
    |     - category-images-update
    |     - category-images-delete
    |     - model-categories-reservado
    |     - model-categories-reservado     
    |     - model-categories-reservado     
    |     - model-categories-reservado  
    |     - model-categories-reservado
    | 34- Produtos
    |     - product-view
    |     - product-create
    |     - product-update
    |     - product-delete
    |     - product-images-wiew
    |     - product-images-create
    |     - product-images-update
    |     - product-images-delete
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    |
    */

}