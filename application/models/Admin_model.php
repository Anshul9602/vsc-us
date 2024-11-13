<?php

class Admin_model extends CI_Model
{

   

    function get_posts_with_images()
    {
        $this->db->select('user_blog.*, user_profile_images.image_path');
        $this->db->from('user_blog');
        $this->db->join('user_profile_images', 'user_blog.id = user_profile_images.user_id', 'left'); // 'left' join to include blogs without an image
        $query = $this->db->get();
        
        return $query->result_array();
    }

    function get_posts()
    {
        $query = $this->db->query("SELECT * FROM user_blog ");
        return $query->result_array();
    }
    function get_post_image($id)
    {
        $query = $this->db->query("SELECT * FROM user_profile_images WHERE user_id = $id");
        return $query->result_array();
    }
    function get_post($id)
    {
        $this->db->select('user_blog.*, user_profile_images.image_path');
        $this->db->from('user_blog');
        $this->db->join('user_profile_images', 'user_blog.id = user_profile_images.user_id', 'left'); 
        $this->db->where('user_blog.id', $id);
        // 'left' join to include blogs without an image
        $query = $this->db->get();
        
        return $query->result_array();
    }

    function get_client($id)
    {
        $query = $this->db->query("SELECT * FROM client_details WHERE id =" . $id);
        return $query->result_array();
    }

    function updaterate($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    function updatepricefile($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('files', $data);
    }

    function updatedate($data)
    {
        $this->db->where('id', '1');
        $this->db->update('price_date', $data);
    }

    function add_gallery_images($data)
    {
        foreach ($data as $key => $value) {
            $this->db->insert('galleryimages', $data[$key]);
        }
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    function get_meta_data($url)
    {
        $data = ["title" => "", "description" => "", "keywords" => ""];
        $query = $this->db->query("SELECT * FROM meta_data WHERE url ='" . $url . "'");
        if ($query->num_rows() > 0) {
            $x = $query->result_array();
            $data['title'] = $x[0]['title'];
            $data['description'] = $x[0]['description'];
            $data['keywords'] = $x[0]['keywords'];
        }
        return $data;
    }
}
