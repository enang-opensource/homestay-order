<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tbl_user';
    protected $primaryKey = 'id_user';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    protected $useSoftDeletes = true;
    //set nama kolom delete pada tabel dengan type datetime
    protected $deletedField  = 'deleted_at';

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['nama_user', 'first_name', 'last_name', 'no_hp_user', 'email_user'];


    public function getData($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        } else {
            return $this->where('id_user', $id)->get()->getRow();
        }
    }
}
