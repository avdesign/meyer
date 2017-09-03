<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'painel'], function () {

	
	Route::get('admin', 'Admin\PainelController@index')->name('painel');
	Route::get('catalog', 'Admin\PainelController@catalog');
	Route::get('home', 'Admin\PainelController@home');
	Route::get('error{code}', 'Admin\PainelController@error')->name('error');


/*
|--------------------------------------------------------------------------
| Autenticação de Usuários
|--------------------------------------------------------------------------
*/
	Route::get('/', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/', 'Admin\Auth\LoginController@login')->name('admin.login');
	Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
	Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
	
	// Recuperar senha
	Route::post('admin/password/email', 'Admin\Auth\RegisterController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('admin/recuperar/{id}/senha', 'Admin\Auth\RegisterController@showLinkRequestForm')->name('admin.password.request');
	Route::post('admin/password/reset', 'Admin\Auth\ResetPasswordController@reset');
	Route::get('admin/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
/*
|--------------------------------------------------------------------------
| Module:  Users crud
|--------------------------------------------------------------------------
*/


	Route::post('usuario/reativar', 'Admin\Auth\RegisterController@reactivateExcluded')->name('user.reactivate');
	Route::post('usuarios/excluidos/data', 'Admin\Auth\RegisterController@dataExcluded')->name('users.excluded.data');
	Route::get('usuarios/excluidos', 'Admin\Auth\RegisterController@excluded');
	Route::post('usuarios/data', 'Admin\Auth\RegisterController@data')->name('users.data');
	Route::put('usuario/{id}/perfil', 'Admin\Auth\RegisterController@updateProfile')->name('user.profile.update');
	Route::resource('usuarios', 'Admin\Auth\RegisterController');

/*
|--------------------------------------------------------------------------
| Module:  Users modulos.
|--------------------------------------------------------------------------
*/
	Route::get('usuario/{id}/perfil', 'Admin\AdminController@profile')->name('user.profile');
	Route::get('usuario/{id}/acessos', 'Admin\AdminController@accessView');
	Route::post('usuario/{id}/acessos', 'Admin\AdminController@accessActions')->name('user.access.actions');
	Route::get('usuario/{id}/permissoes-admin', 'Admin\AdminController@permissonsAdmin');
	Route::get('usuario/{id}/{type}/modulos', 'Admin\AdminController@modules');
	Route::post('usuario/{id}/modulos/{type}/data', 'Admin\AdminController@modulesData')->name('user.modules.data');
	Route::get('usuario/{id}/permissoes/{idmod}/data', 'Admin\AdminController@permissions')->name('user.permissions.data');
	Route::put('usuario/{id}/permissao/alterar', 'Admin\AdminController@updatePermission')->name('user.permission.update');
	Route::post('usuario/{id}/status', 'Admin\AdminController@status')->name('user.status');
/*
|--------------------------------------------------------------------------
| Configurações do sistema
|--------------------------------------------------------------------------
*/
	//Config Group Colors.
	Route::resource('config/grupo-cores', 'Admin\ConfigColorGroupController');

	// Config images products.
	Route::post('config/images/data', 'Admin\ConfigImageProductController@data')->name('config.images.data');
	Route::resource('config/images', 'Admin\ConfigImageProductController');

	// Config images categories.
	Route::get('config/imagens/categorias', 'Admin\ConfigCategoryController@edit');
	Route::put('config/imagens/{id}/categorias', 'Admin\ConfigCategoryController@update')->name('config.category.update');

	// Config images sections.
	Route::get('config/imagens/secoes', 'Admin\ConfigSectionController@edit');
	Route::put('config/imagens/{id}/secoes', 'Admin\ConfigSectionController@update')->name('config.section.update');

	// Config images brands.
	Route::get('config/imagens/fabricantes', 'Admin\ConfigBrandController@edit');
	Route::put('config/imagens/{id}/fabricantes', 'Admin\ConfigBrandController@update')->name('config.brand.update');

	// Config Unit Measure.
	Route::post('config/unidades/data', 'Admin\ConfigUnitMeasureController@data')->name('measures.data');
	Route::resource('config/unidades', 'Admin\ConfigUnitMeasureController');

	// Kits (Caixa, Pacote etc)
	Route::post('config/kits/data', 'Admin\ConfigKitController@data')->name('config.kits.data');
	Route::resource('config/kits', 'Admin\ConfigKitController');

	// Metodos de envio.
	Route::post('config/metodos/loader', 'Admin\ConfigShippingController@load')->name('shipping.load');
	Route::resource('config/metodos', 'Admin\ConfigShippingController');

	// Porcentagens sobre os produtos.
	Route::post('config/porcentagens/data', 'Admin\ConfigPercentController@data')->name('percent.data');
	Route::resource('config/porcentagens', 'Admin\ConfigPercentController');
	
	// Perfil e porcentagens de preços do cliente.
	Route::resource('config/perfil-cliente', 'Admin\ConfigProfileClientController');
	Route::post('config/perfil-cliente/data', 'Admin\ConfigProfileClientController@data')->name('profile.client.data');
	Route::post('perfil-cliente/prices', 'Admin\ConfigProfileClientController@prices')->name('profile.client.get.prices');
	Route::post('perfil-cliente/offers', 'Admin\ConfigProfileClientController@offers')->name('profile.client.get.offers');

	// Palavras chaves (keywords).
	Route::post('config/keywords/data', 'Admin\ConfigKeywordsController@data')->name('keywords.data');
	Route::resource('config/keywords', 'Admin\ConfigKeywordsController');

	// Modulos vinculados ao produto.
	Route::get('config/{id}/fretes', 'Admin\ConfigFreightController@edit');
	Route::put('config/fretes/{id}/alterar', 'Admin\ConfigFreightController@update')->name('config.freight.update');

	// Modulos vinculados ao produto.
	Route::get('config/{id}/produtos', 'Admin\ConfigProductController@edit');
	Route::put('config/produtos/{id}/alterar', 'Admin\ConfigProductController@update')->name('config.products.update');

	// Cores do sistema
	Route::get('config/sistema', 'Admin\ConfigController@index');
	Route::get('config/cores/sistema', 'Admin\ConfigController@colorSystem')->name('config.colors');
	Route::put('config/cores/sistema', 'Admin\ConfigController@colorUpdate')->name('config.colors.update');
	Route::get('config/folders/{name}', 'Admin\ConfigController@folders');

	// Modulos do sistema
	Route::resource('config/modulos', 'Admin\ConfigModuleController');
	Route::post('config/modulos/data', 'Admin\ConfigModuleController@data')->name('module.data');
	Route::post('config/modulos/{id}/permissoes', 'Admin\ConfigModuleController@showPermissions')->name('module.permissions.show');

	// Perfis dos Usuários
	Route::post('config/perfis/data', 'Admin\ConfigProfileController@data')->name('profile.data');
	Route::post('config/perfis/{id}/users', 'Admin\ConfigProfileController@showUsers')->name('profile.users.show');
	Route::get('config/perfis/{id}/users/criar', 'Admin\ConfigProfileController@createUsers')->name('profile.users.create');
	Route::post('config/perfis/{id}/users/criar', 'Admin\ConfigProfileController@storeUsers')->name('profile.users.store');
	Route::post('config/perfis/{id}/user/{iduser}listar', 'Admin\ConfigProfileController@listPerfis')->name('profile.users.list');
	Route::delete('config/perfis/{id}/user/{iduser}/excluir', 'Admin\ConfigProfileController@deleteUser')->name('profile.users.delete');
	Route::resource('config/perfis', 'Admin\ConfigProfileController');

	
	// Permissões dos Usuários	
	Route::post('config/permissoes/data', 'Admin\ConfigPermissionController@data')->name('permission.data');
	Route::post('config/permissoes/{id}/perfis', 'Admin\ConfigPermissionController@showProfiles')->name('permission.profile.show');
	Route::get('config/permissoes/{id}/perfis/criar', 'Admin\ConfigPermissionController@createProfile')->name('permission.profile.create');
	Route::post('config/permissoes/{id}/perfis/criar', 'Admin\ConfigPermissionController@storeProfiles')->name('permission.profile.store');
	Route::delete('config/permissoes/{id}/perfis/{idper}/excluir', 'Admin\ConfigPermissionController@deleteProfile')->name('permission.profile.delete');
	Route::resource('config/permissoes', 'Admin\ConfigPermissionController');

	// Marcas & Fabricantes 
	Route::resource('marcas', 'Admin\BrandController');
	Route::post('marcas/data', 'Admin\BrandController@data')->name('brands.data');
	Route::get('marca/{id}/detalhes', 'Admin\BrandController@details')->name('brands.details');	
	Route::resource('marca/{id}/grids-brand', 'Admin\GridBrandController');
	Route::resource('marca/{id}/logo-brand', 'Admin\LogoBrandController');
	Route::put('marca/status/{id}/logo', 'Admin\LogoBrandController@status')->name('logo-brand.status');
	Route::resource('marca/{id}/banner-brand', 'Admin\BannerBrandController');
	Route::put('marca/status/{id}/banner', 'Admin\BannerBrandController@status')->name('banner-brand.status');

	// Seções dos Produtos 
	Route::resource('secoes', 'Admin\SectionController');
	Route::post('secoes/data', 'Admin\SectionController@data')->name('sections.data');
	Route::get('secao/{id}/detalhes', 'Admin\SectionController@details')->name('sections.details');	
	Route::resource('secao/{id}/grids-section', 'Admin\GridSectionController');
	Route::resource('secao/{id}/featured-section', 'Admin\FeaturedSectionController');
	Route::put('secao/status/{id}/featured', 'Admin\FeaturedSectionController@status')->name('featured-section.status');
	Route::resource('secao/{id}/banner-section', 'Admin\BannerSectionController');
	Route::put('secao/status/{id}/banner', 'Admin\BannerSectionController@status')->name('banner-section.status');

	// Categorias dos Produtos 
	Route::resource('categorias', 'Admin\CategoryController');
	Route::post('categorias/data', 'Admin\CategoryController@data')->name('categories.data');
	Route::get('categoria/{id}/detalhes', 'Admin\CategoryController@details')->name('categories.details');	
	Route::resource('categoria/{id}/grids-category', 'Admin\GridCategoryController');
	Route::resource('categoria/{id}/featured-category', 'Admin\FeaturedCategoryController');
	Route::put('categoria/status/{id}/featured', 'Admin\FeaturedCategoryController@status')->name('featured-category.status');
	Route::resource('categoria/{id}/banner-category', 'Admin\BannerCategoryController');
	Route::put('categoria/status/{id}/banner', 'Admin\BannerCategoryController@status')->name('banner-category.status');

	// Products / Categories
	Route::resource('produtos/{slug}/catalogo', 'Admin\ProductController');
	Route::get('produto/{id}/detalhes', 'Admin\ProductController@details');
	Route::post('produtos/{id}/catalogo/data', 'Admin\ProductController@data')->name('catalogo.data');
	Route::put('produto/{id}/status', 'Admin\ProductController@status')->name('product.status');
	Route::get('produto/{idsec}/combo', 'Admin\ProductController@combo')->name('catalogo.combo');
	Route::get('produto/{idpro}/grids/{module}/{id}/{stock}/{kit}', 'Admin\ProductController@grids');

	// Images Colors Products
	Route::resource('produto/{idpro}/colors-product', 'Admin\ImageColorController');
	Route::put('produto/{idpro}/status-color/{id}', 'Admin\ImageColorController@status')->name('status-color');
	Route::get('produto/{id}/add-grid', 'Admin\ImageColorController@addGrid')->name('add-grid');
	Route::get('produto/{id}/change-grids/{stock}/{kit}', 'Admin\ImageColorController@changeGrids');
	Route::get('produto/{id}/grids/{stock}/{kit}', 'Admin\ImageColorController@grids');

	// Images Positions Colors
	Route::resource('produto/{idpro}/positions-product', 'Admin\ImagePositionController');
	Route::put('produto/{id}/status-position', 'Admin\ImagePositionController@status')->name('status-position');
	Route::get('produto/{idimg}/add-positions', 'Admin\ImagePositionController@addPosition')->name('add-positions');
	// Todas as Cores
	Route::get('produtos/cores', 'Admin\ImageColorController@products');
	Route::post('produtos/colors/data', 'Admin\ImageColorController@data')->name('colors.data');
	Route::put('produtos/{idpro}/colors-status/{id}', 'Admin\ImageColorController@colorsStatus')->name('colors-status');
});


/*
|--------------------------------------------------------------------------
| Routes Site
|--------------------------------------------------------------------------
*/
Route::get('/', 'Site\HomeController@index')->name('site.home');

/*
|--------------------------------------------------------------------------
| Routes cart
|--------------------------------------------------------------------------
*/

Route::resource('carrinho', 'Site\CartController');
Route::get('ajax/cart/info', 'Site\CartController@cartInfo')->name('cart.info');
Route::get('ajax/cart/popup', 'Site\CartController@cartPopup')->name('cart.popup');

Route::get('checkout', 'Site\CheckoutController@cartInfo')->name('checkout');



Route::get('product/quickview/{id}', 'Site\ProductController@quickview');
Route::post('product/quickview/add/cart', 'Site\ProductController@quickAddCart')->name('quickview.add');

Route::get('produto/detalhes/{id}', 'Site\ProductController@index');
Route::post('product/{id}/color', 'Site\ProductController@color');

Route::resource('product/{id}/review', 'Site\ProductReviewControlle');



//Route::resource('product/{id}related', 'Site\RelatedProduct'); // não fiz ainda o bd
//Route::resource('product/file/upload', 'Site\ProductFileUploadControlle');


Route::get('categoria/{id}', 'Site\CategoryController@index');
Route::post('categoria/{id}', 'Site\CategoryController@filter');


Route::resource('newsletter', 'Site\NewsletterController');





