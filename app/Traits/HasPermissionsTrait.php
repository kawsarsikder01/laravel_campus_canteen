<?

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;



 trait HasPermissionsTrait
 {

    // get permissions

    public function getAllPermission($permission)
    {
        return Permission::whereIn('slug',$permission)->get();
    }

    //check permission

    public function hasPermission($permission)
    {
        return (bool) $this->permission->where('slug',$permission->slug)->count();
    }

    //check has role

    public function hasRole(...$roles)
    {
        foreach($roles as $role)
        {
            if($this->roles->contains('slug',$slug))
            {
                return true;
            }
            return false;
        }
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission)|| $this->hasPermission($permission);
    }

    public function givePermissionsTo(... $permissions) {

        $permissions = $this->getAllPermissions($permissions);
        if($permissions === null) {
          return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
      }

    public function hasPermissionThroughRole($permission)
    {
        foreach($permission->roles as $role)
        {
            if($this->roles->contains($role))
            {
                return true;
            }
            return false;
        }
    }
    
    public function permissions()
    {
        $this->belongsTomany(Permission::class,'users_permission');
    }
    public function roles()
    {
        $this->belongsTomany(Role::class,'users_roles');
    }
 }







?>