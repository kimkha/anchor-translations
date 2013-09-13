<?php

return array(

	'extend' => 'Mở Rộng',

	'fields' => 'Các Trường Tuỳ Chọn',
	'fields_desc' => 'Tạo các trường tuỳ chọn',

	'variables' => 'Các Biến Trên Trang',
	'variables_desc' => 'Tạo các biến trên trang',

	'create_field' => 'Tạo mới một trường',
	'editing_custom_field' => 'Sửa đổi trường &ldquo;%s&rdquo;',
	'nofields_desc' => 'Chưa có trường nào',

	'create_variable' => 'Tạo mới một biến',
	'editing_variable' => 'Sửa đổi biến &ldquo;%s&rdquo;',
	'novars_desc' => 'Chưa có biến nào',

	// form fields
	'type' => 'Kiểu',
	'type_explain' => 'Kiểu của nội dung bạn muốn thêm vào trường này.',

	'field' => 'Trường',
	'field_explain' => 'Kiểu nhập dạng html',

	'key' => 'Từ Khoá Đơn Nhất',
	'key_explain' => 'Từ khoá đơn nhất cho trường của bạn',
	'key_missing' => 'Vui lòng nhập một từ khoá đơn nhất',
	'key_exists' => 'Từ khoá đã được sử dụng',

	'label' => 'Nhãn',
	'label_explain' => 'Tên dễ đọc cho trường của bạn',
	'label_missing' => 'Vui lòng nhập một nhãn',

	'attribute_type' => 'Kiểu tập tin',
	'attribute_type_explain' => 'Danh sách phân cách bởi dấu phẩy các kiểu tập tin được phép, bỏ trống để cho phép tất cả.',

	// images
	'attributes_size_width' => 'Chiều rộng hình tối đa',
	'attributes_size_width_explain' => 'Hình ảnh sẽ được thu nhỏ nếu lớn hơn chiều rộng tối đa',

	'attributes_size_height' => 'Chiều cao hình tối đa',
	'attributes_size_height_explain' => 'Hình ảnh sẽ được thu nhỏ nếu lớn hơn chiều cao tối đa',

	// custom vars
	'name' => 'Tên',
	'name_explain' => 'Một tên đơn nhất',
	'name_missing' => 'Vui lòng nhập tên đơn nhất',
	'name_exists' => 'Tên đã được sử dụng',

	'value' => 'Giá trị',
	'value_explain' => 'Dữ liệu mà bạn muốn lưu trữ (lên tới 64kb)',
	'value_code_snipet' => 'Mẩu code để chèn vào mẫu trang của bạn:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Biến của bạn đã được tạo',
	'variable_updated' => 'Biến của bạn đã được cập nhật',
	'variable_deleted' => 'Biến của bạn đã bị xoá',

	'field_created' => 'Trường của bạn đã được tạo',
	'field_updated' => 'Trường của bạn đã được cập nhật',
	'field_deleted' => 'Trường của bạn đã bị xoá'

);