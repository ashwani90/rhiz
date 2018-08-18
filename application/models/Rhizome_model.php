<?php
class Rhizome_model extends CI_Model{
    
    
    public function is_valid_login($username,$pass)
	{
        
		 $q=$this->db->where(array('admin_email'=>$username,'admin_password'=>$pass))
				->get('admin');
		
		if($q->num_rows())
		{
			return $res= $q->result_array();
		}else{
			return false;
		}
	}
    public function get_types()
    {
        $q=$this->db->get('building_type');
        return $q->result_array();
    }

    public function insert_building($data)
    {
        $res=array(
            'building_name'=>$data['building_name'],
            'building_type'=>$data['building_type'],
            'building_status'=>$data['status'],
            'building_location'=>$data['location'],
            'building_year'=>$data['year'],
            'building_size'=>$data['size'],
            'building_desc'=>$data['desc'],
            'added_on'=>date('Y-m-d H:i:s'),
            'modified_on'=>date('Y-m-d H:i:s')
        );
        $this->db->insert('buildings',$res);
        return $this->db->insert_id();
    }

    public function insert_building_images($dataInfo,$last_insert_id)
    {
        
        foreach($dataInfo as $da)
        {
            $data=array(
                'building_image'=>$da['file_name'],
                'building_id'=>$last_insert_id
            );
            $this->db->insert('building_images',$data);
        }
        return $this->db->insert_id();
    }
    
    public function get_buildings()
    {
        $q=$this->db->from('buildings b')->join('building_type t','t.type_id=b.building_type')->get();
        $res = $q->result_array();
        $count=0;
        foreach($res as $r)
        {
            $build_id=$r['building_id'];
            $q=$this->db->where(array('building_id'=>$build_id))->get('building_images');
            $res[$count]['images'] = $q->result_array();
            $count++;
        }
       
        return $res;
    }

    public function get_images($building_id)
    {
        $q=$this->db->where(array('building_id'=>$building_id))->get('building_images');
        return $q->result_array();
    }

    public function get_building_name($building_id)
    {
        $q=$this->db->where(array('building_id'=>$building_id))->get('buildings');
        return $q->result_array()[0]['building_name'];
    }
    public function delete_image($image_id)
    {
        $q=$this->db->where(array('building_image_id'=>$image_id))->delete('building_images');
        return $q;
    }
}