<?php
    class Member extends CI_Controller {

        public function index() {

            $this->load->model('Mmember');
            $data[ 'member' ] = $this->Mmember->tampil();
            
            $this->load->view('header');
            $this->load->view('member_tampil', $data);
            $this->load->view('footer');
        }

        function detail($id_member) {

            $this->load->model('Mmember');
            
            $data["member"] = $this->Mmember->detail($id_member);

            $this->load->view('header');
            $this->load->view('member_detail', $data);
            $this->load->view('footer');
            
        }
    }
?>