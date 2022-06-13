<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function users1_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get( 'id' );

        if ( $id === null )
        {
            // Check if the users data store contains users
            if ( $users )
            {
                // Set the response and exit
                $this->response( $users, 200 );
            }
            else
            {
                // Set the response and exit
                $this->response( [
                    'status' => false,
                    'message' => 'No users were found'
                ], 404 );
            }
        }
        else
        {
            if ( array_key_exists( $id, $users ) )
            {
                $this->response( $users[$id], 200 );
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );
            }
        }
    }

    public function index_get($id = 0)
    {
        $check_data = $this->db->get_where('user',['id' => $id])->row_array();

        if($id){
            if($check_data){
                $data = $this->db->get_where('user',['id' => $id])->row_array();

                $this->response($check_data, RestController::HTTP_OK);
            } else{
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }
        } else{
            $data = $this->db->get('user')->result();
            $this->response($data, RESTController::HTTP_OK);
        }
    }

    public function index_post(){
        $data = array(
            'username'  => $this->post('username'),
            'password'  => $this->post('password'),
            'nama'      => $this->post('nama'),
            'akses'     => $this->post('akses'),//'1' => untuk manual
        );

        $insert = $this->db->insert('user', $data);

        if($insert){
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' =>'failed', 502));
        }
    } 
    public function index_put(){
        $id = $this->put('id');

        $data = array(
            'username'  => $this->put('username'),
            'password'  => $this->put('password'),
            'nama'      => $this->put('nama'),
            'akses'     => $this->put('akses'),//'1' => untuk manual
        );

        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);

        if($update){
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' =>'failed', 502));
        }
    }

    public function index_delete(){
        $id = $this->delete('id');
        $check_data = $this->db->get_where('user',['id' => $id])->row_array();

        if($check_data) {
            $this->db->where('id', $id);
            $this->db->delete('user');

            $this->response(array('status' => 'success'), 200);
        } else{
            $this->response(array('status' => 'data not found'), 404); 
        }
    }

    

}