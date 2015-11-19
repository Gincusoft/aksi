<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author tumbas
 */
class Menu extends Tumbas_Controller {

    public function __construct() {
        parent::__construct();
        $this->_view_dir = 'menu';
        $this->load->model('menu_model');
    }

    public function index() {
        $data['title'] = 'Data Menu';
        $data['content'] = 'list';

        $this->_generate_view($data);
    }

    public function get_menu_list() {
        $json = array();
        if ($this->input->is_ajax_request()) {
            $menu_list = $this->menu_model->get_menu();
            foreach ($menu_list as $menu) {
                $row = array(
                    'menu_id' => encode($menu->menu_id),
                    'menu_name' => $menu->menu_name,
                    'menu_icon' => $menu->menu_icon,
                    'menu_url' => '',
                    'parent_id' => $menu->parent_id,
                    'order_no' => $menu->order_no,
                );
                $menu_item_list = $menu_list = $this->menu_model->get_menu_item($menu->menu_id);
                foreach ($menu_item_list as $menu_item) {
                    $row['children'][] = array(
                        'menu_id' => encode($menu_item->menu_id),
                        'menu_name' => $menu_item->menu_name,
                        'menu_icon' => $menu_item->menu_icon,
                        'menu_url' => $menu_item->menu_url,
                        'parent_id' => $menu_item->parent_id,
                        'order_no' => $menu_item->order_no,
                    );
                }

                array_push($json, $row);
            }

            $data[] = array(
                'menu_id' => encode(0),
                'menu_name' => 'Root',
                'menu_icon' => '',
                'menu_url' => '',
                'parent_id' => '0',
                'order_no' => '0',
                'children' => $json
            );

            echo json_encode($data);
        } else {
            echo 'Forbidden access!';
        }
    }

    public function get_tree_menu() {
        $json = array();
        if ($this->input->is_ajax_request()) {
            $menu_list = $this->menu_model->get_menu();
            foreach ($menu_list as $menu) {
                $row = array(
                    'id' => encode($menu->menu_id),
                    'text' => $menu->menu_name,
                );
//                $menu_item_list = $menu_list = $this->menu_model->get_menu_item($menu->menu_id);
//                foreach ($menu_item_list as $menu_item) {
//                    $row['children'][] = array(
//                        'id' => encode($menu_item->menu_id),
//                        'text' => $menu_item->menu_name,
//                    );
//                }

                array_push($json, $row);
            }
            
            $data[] = array(
                'id' => encode(0),
                'text' => 'Root',
                'children' => $json
            );

            echo json_encode($data);
        } else {
            echo 'Forbidden access!';
        }
    }

    public function get_order_no($parent_id, $action = 'add') {
        if ($this->input->is_ajax_request() && isset($parent_id)) {
            $data = array();
            $parent_id = decode($parent_id);
            $count_menu = $this->menu_model->get_menu_max($parent_id)->count_menu;

            if ($action == 'add')
                $count_menu += 1;

            for ($i = 1; $i <= $count_menu; $i++) {
                $data[] = array(
                    'id' => $i,
                    'text' => $i
                );
            }

            echo json_encode($data);
        } else {
            echo 'Forbidden access!';
        }
    }

    public function add_menu() {
        if ($this->input->is_ajax_request()) {
            if ($this->input->post('menu_name')) {
                $data = $this->input->post();
                $data['parent_id'] = decode($data['parent_id']);
                $query = $this->menu_model->add_menu($data);

                if ($query) {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Berhasil menambah data.'
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Gagal menambah data.'
                    );
                }

                echo json_encode($response);
            } else {
                $data['menu_list'] = array();
                $menu_list = $this->menu_model->get_menu();
                $data['menu_list'][0] = ' - Pilih -';
                foreach ($menu_list as $menu) {
                    $data['menu_list'][$menu->menu_id] = $menu->menu_name;
                }

                $data['order_list'] = array();
                $count_menu = $this->menu_model->get_menu_max()->count_menu;
                for ($i = 1; $i <= $count_menu + 1; $i++) {
                    $data['order_list'][$i] = $i;
                }

                $this->load->view("menu/menu_add", $data);
            }
        } else {
            echo 'Forbidden access!';
        }
    }

    public function edit_menu() {
        if ($this->input->is_ajax_request()) {
            if ($this->input->post('menu_id')) {
                $id = decode($this->input->post('menu_id'));
//                echo $id;
//                exit();
                unset($_POST['menu_id']);
                $data = $this->input->post();
                $data['parent_id'] = decode(($data['parent_id']));
                $query = $this->menu_model->edit_menu($data, $id);

                if ($query) {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Berhasil mengedit data.'
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Gagal mengedit data.'
                    );
                }

                echo json_encode($response);
            } else {
                $data = $this->input->get();
                $data['menu_url'] = str_replace('.../', '', $data['menu_url']);
                $data['parent_id'] = encode($data['parent_id']);
                $this->load->view("menu/menu_edit", $data);
            }
        } else {
            echo 'Forbidden access!';
        }
    }

    public function delete_menu() {
        if ($this->input->is_ajax_request() && $this->input->post('menu_id')) {
            $id = decode($this->input->post('menu_id'));
            $data = $this->input->post();
            $query = $this->menu_model->delete_menu($id, $data);

            if ($query) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Berhasil menghapus data.'
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Gagal menghapus data.'
                );
            }

            echo json_encode($response);
        } else {
            echo 'Forbidden access!';
        }
    }

}
