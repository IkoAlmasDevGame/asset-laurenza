<?php 

class view {
    protected $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function karyawan(){
        $sql = "select count(id_user_cabang) as id from user_cabang";
        $row = $this -> db -> prepare($sql);
        $row->execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function log(){
        $sql = "select * from user_cabang";
        $row = $this -> db -> prepare($sql);
        $row->execute();
        $row = $row->fetchAll();
        return $row;
    }

    // Mulai database master
    public function ruas(){
        $sql = "select * from m_ruas";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function kategori(){
        $sql = "select * from m_kategori";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function gerbang(){
        $sql = "select * from m_gerbang";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function subkategori(){
        $sql = "select * from m_subkategori";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function kodefikasi(){
        $sql = "SELECT * FROM m_kodefikasi inner join m_kategori on m_kodefikasi.kode_kategori=m_kategori.kode_kategori inner join m_subkategori on m_kodefikasi.kode_subkategori=m_subkategori.kode_subkategori inner join m_ruas on m_kodefikasi.kode_ruas=m_ruas.kode_ruas inner join m_gerbang on m_kodefikasi.kode_gerbang=m_gerbang.kode_gerbang order by id_kodefikasi asc";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function inventori(){
        $sql = "SELECT m_inventori.*, m_kodefikasi.nomer_seri_aset, m_approve.* From m_inventori inner join m_kodefikasi on m_inventori.nomer_seri_aset=m_kodefikasi.nomer_seri_aset inner join m_approve on m_inventori.nomer_seri_aset=m_approve.nomer_seri_aset && m_approve.status=m_approve.status order by id_inventori asc";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function ListApprove(){
        $sql = "SELECT m_inventori.*, m_kategori.kode_kategori, m_subkategori.kode_subkategori, m_ruas.kode_ruas, m_gerbang.kode_gerbang, m_kodefikasi.* from m_inventori inner join m_kodefikasi on m_inventori.nomer_seri_aset=m_kodefikasi.nomer_seri_aset inner join m_kategori on m_kodefikasi.kode_kategori=m_kategori.kode_kategori inner join m_subkategori on m_kodefikasi.kode_subkategori=m_subkategori.kode_subkategori inner join m_ruas on m_kodefikasi.kode_ruas=m_ruas.kode_ruas inner join m_gerbang on m_kodefikasi.kode_gerbang=m_gerbang.kode_gerbang order by id_inventori asc";
        $row = $this->db->prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    public function StatusApprove(){
        $sql = "SELECT m_approve.*, m_inventori.foto_aset, m_kategori.nama_kategori, m_subkategori.nama_subkategori, m_ruas.nama_ruas, m_gerbang.nama_gerbang from m_approve inner join m_kategori on m_approve.kode_kategori=m_kategori.kode_kategori inner join m_subkategori on m_approve.kode_subkategori=m_subkategori.kode_subkategori inner join m_ruas on m_approve.kode_ruas=m_ruas.kode_ruas inner join m_gerbang on m_approve.kode_gerbang=m_gerbang.kode_gerbang inner join m_inventori on m_approve.nomer_seri_aset=m_inventori.nomer_seri_aset && m_inventori.foto_aset=m_inventori.foto_aset inner join m_kodefikasi on m_approve.nomer_seri_aset=m_kodefikasi.nomer_seri_aset group by id_approve asc";
        $row = $this->db->prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    // Akhir database Master

    // Mulai Edit database Master

    public function ruas_edit($id){
        $sql = "select * from m_ruas where id_ruas=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $row = $row->fetch();
        return $row;
    }

    public function gerbang_edit($id){
        $sql = "select * from m_gerbang where id_gerbang=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $row = $row->fetch();
        return $row;
    }

    public function subkategori_edit($id){
        $sql = "select * from m_subkategori where id_subkategori=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $row = $row->fetch();
        return $row;
    }

    public function kodefikasi_edit($id){
        $sql = "SELECT * FROM m_kodefikasi JOIN m_kategori ON m_kodefikasi.kode_kategori=m_kategori.kode_kategori JOIN m_subkategori ON m_kodefikasi.kode_subkategori=m_subkategori.kode_subkategori JOIN m_ruas ON m_kodefikasi.kode_ruas=m_ruas.kode_ruas JOIN m_gerbang ON m_kodefikasi.kode_gerbang=m_gerbang.kode_gerbang where id_kodefikasi=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $hasil = $row->fetch();
        return $hasil;
    }

    public function inventori_edit($id){
        $sql = "SELECT * From m_inventori Where id_inventori=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $row = $row->fetch();
        return $row;
    }

    // Akhir Edit database Master

    // Mulai database jumlah master
    public function ruas_row(){
        $sql = "select count(id_ruas) as ttl_ruas from m_ruas";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }

    public function kategori_row(){
        $sql = "select count(id_kategori) as ttl_kategori from m_kategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }

    public function gerbang_row(){
        $sql = "select count(id_gerbang) as ttl_gerbang from m_gerbang";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }

    public function kodefikasi_row(){
        $sql = "select count(id_kodefikasi) as ttl_kodefikasi from m_kodefikasi";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }

    public function subkategori_row(){
        $sql = "select count(id_subkategori) as ttl_subkategori from m_subkategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }

    public function inventori_row(){
        $sql = "select count(id_inventori) as ttl_inventori from m_inventori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $row = $row->fetch();
        return $row;
    }
    // Akhir database jumlah master
}
?>