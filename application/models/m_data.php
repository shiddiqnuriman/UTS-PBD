<?php
class M_data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function show_data()
    {
        $total = $this->db->query("SELECT * FROM tempat");
        return $total;
    }

    public function get_a_location($where = array())
    {
        return $this->db
            ->select('*')
            ->where($where)
            ->get('tempat')
            ->row();
    }

    public function delete($where = array())
    {
        $this->db->delete('tempat', $where);
        return $this->db->affected_rows();
    }

    function get_chart_data()
    {
        $data_mingguan = $this->db->query("SELECT YEARWEEK(start_date), COUNT(work) AS jumlah_pegawai_absen FROM tempat GROUP BY YEARWEEK(start_date)");
        return $data_mingguan;
    }
}
