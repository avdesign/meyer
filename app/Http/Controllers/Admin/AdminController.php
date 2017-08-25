<?php

namespace AVDPainel\Http\Controllers\Admin;

use AVDPainel\Interfaces\Admin\adminInterface as InterModel;
use AVDPainel\Interfaces\Admin\ConfigModuleInterface as InterModule;
use AVDPainel\Interfaces\Admin\ConfigSystemInterface as InterConfigSystem;
use AVDPainel\Interfaces\Admin\AdminPermissionInterface as InterPermission;
use AVDPainel\Interfaces\Admin\ConfigProfileInterface as InterConfigProfile;
use AVDPainel\Interfaces\Admin\ConfigPermissionInterface as InterConfigPermission;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use AVDPainel\Http\Controllers\Controller;

use AVDPainel\Models\Admin\Admin;

class AdminController extends Controller
{

    protected $ability = 'model-users';
    protected $view    = 'backend.users';

    public function __construct(
        InterModel $interModel, 
        InterModule $interModules, 
        InterPermission $interPermissions,
        InterConfigSystem $confUser)
    {
        $this->middleware('auth:admin');

        $this->confUser         = $confUser;
        $this->interModel       = $interModel;
        $this->interModules     = $interModules;
        $this->interPermissions = $interPermissions;
    }


    /**
     * Perfil do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function profile($id)
    {
        if( Gate::denies("{$this->ability}-view") ) {
            return view("backend.erros.message-401");
        }

        $title = 'Perfil do Usuário';
        $data  = $this->interModel->setId(numLetter($id));

        return view("{$this->view}.profile", compact('data', 'title'));    
    }

    /**
     * Acessos do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function accessView($id)
    {

        if( Gate::denies("{$this->ability}-access") ) {
            return view("backend.erros.message-401");
        }

        $data   = $this->interModel->setId(numLetter($id));
        $title  = 'Acessos do Usuário';
        $lists  = listAccessTxt(numLetter($id));
        $access = $data->accesses;
        $files  = array();
        
        foreach ($lists as $key => $value) {
            $str[$key]['str']    = substr($value, -14);
            $files[$key]['path'] = $value;
            $files[$key]['date'] = substr($str[$key]['str'], 0, 10);
        }

        return view("{$this->view}.accesses", compact('id','data','title','files','access'));    
    }

    /**
     * Acessos do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function accessActions(Request $request, $id)
    {
        if( Gate::denies("{$this->ability}-access") ) {
            return view("backend.erros.message-401");
        }

        $id     = numLetter($id);
        $name   = $request['user'];
        $path   = $request['path'];
        $action = $request['ac'];

        if ($action == 'open') {

            $open = actionsTxt($action, $path, $name, $id);

        } else {            

            if ($action == 'delete') {

                if( Gate::denies("{$this->ability}-access-delete") ) {
                    return view("backend.erros.message-401");
                }

                $out = actionsTxt($action, $path, $name, $id);

            } else {

                if( Gate::denies("{$this->ability}-access-delete-all") ) {
                    return view("backend.erros.message-401");
                }

                $path = 'Accesses/'.$id;  
                $out = actionsTxt($action, $path, $name, $id);

            }

            return response()->json($out);
        }

    }

    /**
     * Table Permissões do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function modules($id, $type)
    {
        

        $data     = $this->interModel->setId(numLetter($id));
        $title    = 'Permissões do Usuário';
        $confUser = $this->confUser->get();

        return view("{$this->view}.modules", compact('data', 'type', 'confUser', 'title'));    
    }




    /**
     * Table Permissões do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function modulesData(Request $request, $id, $type)
    {
  
        $data = $this->interModules->typeModules($request, $id, $type);
        return $data;
    }


    /**
     * Table Permissões do usuário.
     *
     * @param  int  $id usuário
     * @return \Illuminate\Http\Response
     */
    protected function permissions($id, $idmod)
    {
        $title  = 'Permissões do Usuário';
        $data   = $this->interModel->setId(numLetter($id));
        $mData  = $this->interModules->setId($idmod);
        $fields = $mData->permissions()->distinct('module_id')->get();
        $active = $this->interPermissions->getUsers($idmod, numLetter($id));

        $array[0] = 'no-permission';
        if (count($active) >=1) {
            foreach ($active as $i => $value) {
                $array[$i] = $value->name;
            }
        }

        foreach ($fields as $k => $v) {
            $checks[$k]['id']        = $v->id;
            $checks[$k]['name']      = $v->name;
            $checks[$k]['label']     = $v->label;
            $checks[$k]['module_id'] = $v->module_id;
            if (strInArray($checks[$k]['name'], $array)) {
                $checks[$k]['value']     = 1;
                $checks[$k]['checked']   = ' checked';
            } else {
                $checks[$k]['value']     = 0;
                $checks[$k]['checked']   = '';
            }
        }

        return view("{$this->view}.permissions", compact('title', 'id','checks'));    
    }

    /**
     * Mudar permissão do usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function updatePermission(
        Request $request, $id, 
        InterConfigPermission $permission,
        InterConfigProfile $profile)
    {


        $user = $this->interModel->setId(numLetter($id));
        $perm = $permission->setId($request['id']);
        $mode = $this->interModules->setId($perm->module_id);
        $prof = $profile->getFilde('name', $user->profile);


        $update = $this->interPermissions->updatePermiison(
                        $request['ac'], 
                        $prof->id, 
                        $user, 
                        $perm,
                        $mode
                  );

        if ($update) {
            $success = true;
            $message = $update;
        } else {
            $success = false;
            $message = 'Houve um problema no servidor.';
        }

        $out = array(
            "success" => $success,
            "message" => $message
        );

        return response()->json($out);
    }
    
}
