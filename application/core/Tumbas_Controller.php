<?php

/*
 * Tumbas_Controller.php, Mar 31, 2015 10:28:21 PM    
 * 
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Tumbas_Controller extends CI_Controller {

  protected $_user_id;
  protected $_user_name;
  protected $_date_now;

  const DEBIT = 1;
  const CREDIT = 2;

  public function __construct() {
    parent::__construct();

    if ($this->session->userdata('is_login') != 1) {
      redirect('');
    }
    $this->_date_now = date('Y-m-d H:i:s');
    $this->_validation_error_message();
  }

  protected function _generate_view($data = array(), $template = 'template') {
//    $data['menu'] = $this->_generate_menu();
    $data['menu'] = $this->global_model->get_menu2();
    $data['page_header'] = humanize($this->uri->segment(1));
    $data['page_header_desc'] = 'List';
    $data['loading_text'] = "<i class='fa fa-refresh fa-spin'></i> Menyimpan...";
    $data['segment1'] =  $this->uri->segment(1);
    $data['segment2'] =  $this->uri->segment(2);
    $data['csrf_token'] = $this->security->get_csrf_token_name();
    $data['csrf_hash'] = $this->security->get_csrf_hash();

    $this->load->view($template, $data);
  }

//  protected function _generate_menu() {
//    $html_menu = '';
//    $menu_list = $this->global_model->get_menu();
//
//    foreach ($menu_list as $menu) {
//      $menu_url = base_url($menu->menu_url);
//      $parent_menu = "<li>
//          <a href='{$menu_url}'><i class='fa {$menu->menu_icon}'></i><span>$menu->menu_name</span><i class='fa fa-angle-left pull-right'></i></a>";
//
//      $menu_item_list = $menu_list = $this->global_model->get_menu_item($menu->menu_id);
//
//      if ($menu_item_list != NULL) {
//        $parent_menu .= "<ul class='treeview-menu'>";
//        $child_menu = '';
//        foreach ($menu_item_list as $menu_item) {
//          $menu_item_url = base_url($menu_item->menu_url);
//
//          $active = '';
//          if ("{$this->uri->segment(1)}" == $menu_item->menu_url) {
//            $active = "active";
//            $parent_menu = "<li class='treeview {$active}'>
//          <a href='#'><i class='fa {$menu->menu_icon}'></i><span>$menu->menu_name<span><i class='fa fa-angle-left pull-right'></i></a>
//            <ul class='treeview-menu'>";
//          }
//
//          $child_menu .= "<li class='{$active}'><a href='{$menu_item_url}'><i class='fa {$menu_item->menu_icon}'></i><span>$menu_item->menu_name</span></a></li>";
//        }
//
//        $html_menu .= $parent_menu . $child_menu . '</ul></li>';
//      } else {
//        if ("/{$this->uri->segment(1)}" == $menu->menu_url) {
//          $active = "active";
//          $parent_menu = "<li class='{$active}'>
//          <a href='$menu_url'><i class='fa {$menu->menu_icon}'></i><span>$menu->menu_name<span><i class='fa fa-angle-left pull-right'></i></a>";
//        }
//        $html_menu .= $parent_menu . '</li>';
//      }
//    }
//
//    return $html_menu;
//  }

  protected function _generate_menu() {
    $items = $this->global_model->get_menu2();
    $id = '';
    echo "<ul class='sidebar-menu'>";
    foreach ($items as $item) {
      if ($item['parent_id'] == 0) {
        echo "<li class='treeview'><a href='#'>" . $item['menu_name'] . "</a>";
        $id = $item['menu_id'];
        $this->sub($items, $id);
        echo "</li>";
      }
    }
    echo "</ul>";
  }

  function sub($items, $id) {
    echo "<ul class='treeview-menu'>";
    foreach ($items as $item) {
      if ($item['parent_id'] == $id) {
        echo "<li class='treeview'><a href='{$item['menu_url']}'>" . $item['menu_name'] . "</a>";
        $this->sub($items, $item['menu_id']);
        echo "</li>";
      }
    }
    echo "</ul>";
  }

  protected function _validation_error_message() {
    $this->form_validation->set_message('required', '{field} harus diisi.');
  }

  protected function _get_company_name() {
    $theme = $this->global_model->get_config('company_name');

    return $theme;
  }

  protected function _get_company_address() {
    $theme = $this->global_model->get_config('company_address');

    return $theme;
  }

}
