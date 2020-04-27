<?php

class Pemesanan_model extends CI_Model
{
    public function getpemesanan()
    {
        $all = $this->db->get('pemesanan')->result_array();
        $data['status']=true;
        $data['messages']='Connected to API Pemesanan';
        $data['pemesanan']=$all;
        return $data;
    }

    public function getpemesananbyid($id)
    {
        $data = $this->db->get_where('pemesanan', ['id_pemesanan' => $id])->result_array();
        return $data;
    }

    public function getpemesananbyname($username)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('user', 'user.id_user = pemesanan.id_user');
        $this->db->where('user.username', $username);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function addpemesanan($data)
    {
        $this->db->insert('pemesanan', $data);
        return $this->db->affected_rows();
    }

    public function deletepemesanan($id)
    {
        $this->db->delete('pemesanan', ['id_pemesanan' => $id]);
        return $this->db->affected_rows();
    }

    public function editpemesanan($data, $id)
    {
        $this->db->update('pemesanan', $data, ['id_pemesanan' => $id]);
        return $this->db->affected_rows();
    }
}
