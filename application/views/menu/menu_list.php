<?php
/*
 * COba yaaa.php, Mar 31, 2015 9:44:29 PM    
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
?>
<div id="tb">
    <button id="btn_add" class="easyui-linkbutton" iconCls="icon-add"></button>
    <button id="btn_edit" class="easyui-linkbutton" iconCls="icon-edit"></button>
    <button id="btn_remove" class="easyui-linkbutton" iconCls="icon-remove"></button>
<!--    <input id="input_search" class="easyui-searchbox" data-options="prompt:'Ketik di sini ...', searcher:searchData">
    <button id="btn_search" class="easyui-linkbutton">&nbsp; Cari &nbsp;</button>-->
</div>

<table id="dg" style="width: 100%"></table>

<script>
    $(document).ready(function () {
        $('#dg').treegrid({
            url: '<?php echo base_url('menu/get_menu_list'); ?>',
            rownumbers : true,
            idField:'menu_id',
            treeField:'menu_name',
            toolbar : '#tb',
            columns: [[
                    {field: 'menu_name', title: 'Nama Menu', width: '25%'},
                    {field: 'menu_url', title: 'URL', width: '25%'},
                    {field: 'menu_icon', title: 'Ikon', width: '25%'},
                ]],
        });

        $('#btn_search').click(function (e) {
            searchData();
        });

        $('#btn_add').click(function () {
            showWindow('Tambah Menu', '<?php echo base_url('menu/add_menu'); ?>', 600, 400, null);
        });

        $('#btn_edit').click(function () {
            var row = $('#dg').treegrid('getSelected');

            if (row != null) {
                showWindow('Edit Menu', '<?php echo base_url('menu/edit_menu'); ?>', 600, 400, row);
            } else {
                showNotif('Peringatan', 'Pilih data terlebih dahulu.', 'warning');
            }

        });

        $('#btn_remove').click(function () {
            var row = $('#dg').treegrid('getSelected');

            if (row != null) {
                showConfirm('Konfirmasi', 'Lanjutkan menghapus "' + row.menu_name + '"?', function () {
                    $.ajax({
                        url: '<?php echo base_url('menu/delete_menu'); ?>',
                        type: 'post',
                        data: row,
                        dataType: 'json',
                        success: function (data, textStatus, jqXHR) {
                            console.log(textStatus);
                            var title;
                            if (data.status == 'success')
                                title = 'Sukses';
                            else
                                title = 'Gagal';
                            showNotif(title, data.message, data.status);
                        },
                        complete: function (jqXHR, textStatus) {
                            reloadTreeData('dg');
                        }
                    });
                });
            } else {
                showNotif('Peringatan', 'Pilih data terlebih dahulu.', 'warning');
            }
        });
        
    });

    function searchData(value, name) {
        $('#dg').treegrid('load', {
            'search': $('#input_search').val(),
        });
    }
</script>