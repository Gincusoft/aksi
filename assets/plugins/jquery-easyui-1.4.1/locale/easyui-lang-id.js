if ($.fn.pagination){
	$.fn.pagination.defaults.beforePageText = 'Halaman';
	$.fn.pagination.defaults.afterPageText = 'dari {pages}';
	$.fn.pagination.defaults.displayMsg = 'Menampilkan {from} - {to} dari {total} data';
}
if ($.fn.datagrid){
	$.fn.datagrid.defaults.loadMsg = 'Memproses, mohon tunggu ...';
}
if ($.fn.treegrid && $.fn.datagrid){
	$.fn.treegrid.defaults.loadMsg = $.fn.datagrid.defaults.loadMsg;
}
if ($.messager){
	$.messager.defaults.ok = 'Ya';
	$.messager.defaults.cancel = 'Batal';
}
$.map(['validatebox','textbox','filebox','searchbox',
		'combo','combobox','combogrid','combotree',
		'datebox','datetimebox','numberbox',
		'spinner','numberspinner','timespinner','datetimespinner'], function(plugin){
	if ($.fn[plugin]){
		$.fn[plugin].defaults.missingMessage = 'Wajib diisi.';
	}
});
if ($.fn.validatebox){
	$.fn.validatebox.defaults.rules.email.message = 'Masukkan email yang benar.';
	$.fn.validatebox.defaults.rules.url.message = 'Masukkan URL yang benar.';
	$.fn.validatebox.defaults.rules.length.message = 'Masukkan nilai antara {0} dan {1}.';
	$.fn.validatebox.defaults.rules.remote.message = 'Perbaiki ini.';
}
if ($.fn.calendar){
	$.fn.calendar.defaults.weeks = ['M','S','S','R','K','J','S'];
	$.fn.calendar.defaults.months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
}
if ($.fn.datebox){
	$.fn.datebox.defaults.currentText = 'Hari Ini';
	$.fn.datebox.defaults.closeText = 'Tutup';
	$.fn.datebox.defaults.okText = 'Ya';
}
if ($.fn.datetimebox && $.fn.datebox){
	$.extend($.fn.datetimebox.defaults,{
		currentText: $.fn.datebox.defaults.currentText,
		closeText: $.fn.datebox.defaults.closeText,
		okText: $.fn.datebox.defaults.okText
	});
}
