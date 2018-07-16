<?php
class Site_model extends CI_Model{
    //getting banners for the home page
    public function get_banners()
    {
        $query = $this->db->get('banner_images');
        return $query->result_array();
    }
    //getting projects for the home page
    public function get_projects_for_index_page()
    {
        $query=$this->db->select('b.building_id,b.building_name,bu.building_image')
                        ->from('buildings b')
                        ->join('building_images bu','b.building_id=bu.building_id')
                        ->where(['bu.pref_image'=>1])
                        ->get();
        return $query->result_array();
    }
    //getting buildings types
    public function get_building_types()
    {
        $query=$this->db->get('building_type');
        return $query->result_array();
    }

    //getting all stored buildings 
    public function get_buildings_all()
    {
        $query=$this->db->select('b.*,bu.*,bt.*')
                        ->from('buildings b')
                        ->join('building_images bu','b.building_id=bu.building_id','left')
                        ->join('building_type bt','bt.type_id=b.building_type','left')
                        ->where(['bu.pref_image'=>1])
                        ->get();
        return $query->result_array();
    }
}