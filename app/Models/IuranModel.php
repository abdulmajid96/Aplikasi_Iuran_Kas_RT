<?php namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah','warga_id'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getWarga() {
 
        $query = $this->db->query('select * from warga');
        return $query->getResultArray();
     }

    public function getLaporan()
    {
         return $this->db->table('iuran')
         ->join('warga','warga.id=iuran.warga_id')
         ->get()->getResultArray();  
    }

    public function tagihan($where)
    {
       
            $this->select('iuran.id, iuran.bulan, iuran.tahun, iuran.jumlah, warga.nama');
           
			$this->join('warga', 'iuran.warga_id = warga.id_warga');
			$this->where($where);
			return $this->get()->getResultArray();
        

        
    }

}
