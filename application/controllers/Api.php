<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        parent::__construct();
    }

    public function users_get($id_user = '')
    {
        if ($id_user == '') {
            $user = $this->db->get('user')->result();
        } else {
            $this->db->where('id_user', $id_user);
            $user = $this->db->get('user')->result();
        }
        $this->response($user, 200);
    }
}
