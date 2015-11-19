<form id="ff"  method="post" style="padding: 10px;">
    <input name="menu_id" type="hidden" value='<?php echo $menu_id; ?>'>
    <input name="order_no_old" type="hidden" value='<?php echo $order_no ?>'>
    <table style="width: 95%; margin: 10px auto;">
        <tr class="table_data">
            <td style="width: 30%;">Nama Menu</td>
            <td> : <input class="easyui-textbox" type="text" name="menu_name" data-options="required:true" value='<?php echo $menu_name ?>'></td>
        </tr>

        <tr class="table_data">
            <td style="width: 30%;">URL</td>
            <td> : <input class="easyui-textbox" type="text" name="menu_url" data-options="" value='<?php echo $menu_url ?>'></td>
        </tr>

        <tr class="table_data">
            <td style="width: 30%;">Ikon</td>
            <td> : <input class="easyui-textbox" type="text" name="menu_icon" data-options="" value='<?php echo $menu_icon ?>'></td>
        </tr>
        <tr class="table_data">
            <td style="width: 30%;">Menu Induk</td>
            <td> : <input id="cb_parent" name="parent_id"> </td>
        </tr>
        <tr class="table_data">
            <td style="width: 30%;">Urutan</td>
            <td> : <input id="cb_order" name="order_no" class="easyui-combobox" data-options="valueField:'id',textField:'text'"></td>
        </tr>
        <tr class="table_data">
            <td colspan="2" style="text-align: right"><button type="submit" class="easyui-linkbutton" id="btn_save">Simpan</button></td>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function () {
        $('#cb_parent').combotree({
            required: true,
            url: '<?php echo base_url('menu/get_tree_menu'); ?>',
            onSelect : function (node) {
                $('#cb_order').combobox('reload', '<?php echo base_url('menu/get_order_no'); ?>/'+node.id);
                $('#cb_order').combobox('setValue', '1');
            },
            onLoadSuccess : function (node, data) {
                $('#cb_parent').combotree('setValue', '<?php echo $parent_id;?>');
                $('#cb_order').combobox('reload', '<?php echo base_url("menu/get_order_no/{$parent_id}/edit"); ?>');
                $('#cb_order').combobox('setValue', '<?php echo $order_no;?>');
            }
        });
        
        $('#ff').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url('menu/edit_menu'); ?>',
                type: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    return $('#ff').form('enableValidation').form('validate');
                    $('#btn_save').linkbutton('disable');
                },
                success: function (data) {
                    if (data.status == 'success') {
                        $('#win').window('close');
                        showNotif('Sukses', data.message, data.status);
                    }
                },
                complete: function () {
                    reloadTreeData('dg')
                    $('#btn_save').linkbutton('enable');
                }
            });
        });

    });

</script>