<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Câu trả lời của bạn trên ^site_title đã có một bình luận mới bởi ^c_handle:\n\n^open^c_content^close\n\nCâu trả lời của bạn l:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm bình luận vào:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_commented_subject' => 'Câu trả lời của bạn trên ^site_title có một bình luận mới',

		'a_followed_body' => "Câu trả lời của bạn trên ^site_title có một câu hỏi liên quan bởi ^q_handle:\n\n^open^q_title^close\n\nCâu trả lời của bạn là:\n\n^open^a_content^close\n\nHãy nhấn vào đường dẫn bên dưới để trả lời câu hỏi:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_followed_subject' => 'Câu trả lời của bạn trên ^site_title có một câu hỏi liên',

		'a_selected_body' => "Xin chúc mừng! Câu trả lời của bạn trên ^site_title đã được chọn là câu trả lời hay nhất bởi ^s_handle:\n\n^open^a_content^close\n\nCâu hỏi đó là:\n\n^open^q_title^close\n\nHãy nhấn vào đường dẫn bên dưới để xem câu trả lời của bạn:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_selected_subject' => 'Câu trả lời của bạn trên ^site_title đã được chọn!',

		'c_commented_body' => "Một bình luận mới bởi ^c_handle đã được thêm vào sau bình luận của bạn trên ^site_title:\n\n^open^c_content^close\n\nĐang bình luận theo chủ đề:\n\n^open^c_context^close\n\nBạn có thể thêm bình luận mới vào:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'c_commented_subject' => 'Bình luận của bạn trên ^site_title đã có người trả lời',

		'confirm_body' => "Hãy nhấn vào đường dẫn bên dưới để xác thực địa chỉ email của bạn trên ^site_title.\n\n^url\n\nCảm ơn bạn,\n^site_title",
		'confirm_subject' => '^site_title - Xác thực địa chỉ email',

		'feedback_body' => "Bình luận:\n^message\n\nTên:\n^name\n\nEmail:\n^email\n\nTrang trước:\n^previous\n\nThành viên:\n^url\n\nĐịa chỉ IP:\n^ip\n\nTrình duyệt:\n^browser",
		'feedback_subject' => '^ phản hồi',

		'flagged_body' => "Một bài viết bởi ^p_handle đã nhận được ^flags:\n\n^open^p_context^close\n\nNhấn vào bên dưới để xem bài viết:\n\n^url\n\n\nNhấn vào bên dưới để xem tất cả bài viết bị báo cáo vi phạm:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'flagged_subject' => 'Một báo cao vi phạm cho bài viết trên ^site_title',

		'moderate_body' => "Một bài viết bởi ^p_handle cần sự đồng ý của bạn:\n\n^open^p_context^close\n\nNhấn vào bên dưới để đồng ý hoặc từ chối bài viết:\n\n^url\n\n\nNhấn vào bên dưới để xem lại tất cả bài viết liên quan:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'moderate_subject' => 'Kiểm duyệt bài viết trên  ^site_title',

		'new_password_body' => "Mật khẩu mới của bạn trên ^site_title ở bên dưới.\n\nMật khẩu: ^password\n\nVì lý do bảo mật, bạn nên thay đổi mật khẩu càng sớm càng tốt.\n\nCảm ơn bạn,\n^site_title\n^url",
		'new_password_subject' => 'Mật khẩu mới của bạn trên - ^site_title',

		'private_message_body' => "Bạn đã nhận được một tin nhắn riêng tư bởi ^f_handle trên ^site_title:\n\n^open^message^close\n\n^moreCảm ơn bạn,\n\n^site_title\n\n\nĐể chặn tin nhắn riêng tư, hãy thay đổi cài đạt ở tài khoản của bạn:\n^a_url",
		'private_message_info' => "Thêm thông tin về ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Nhấn vào bên dưới để trả lời ^f_handle bằng một tin nhắn riêng tư:\n\n^url\n\n",
		'private_message_subject' => 'Tin nhắn từ ^f_handle trên ^site_title',

		'q_answered_body' => "Câu hỏi của bạn trên ^site_title đã được trả lời bởi ^a_handle:\n\n^open^a_content^close\n\nCâu hỏi của bạn là:\n\n^open^q_title^close\n\nNếu bạn thích câu trả lời này, hãy đánh dấu nó là trả lời hay nhất:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_answered_subject' => 'Câu hỏi của bạn trên ^site_title đã được trả lời',

		'q_commented_body' => "Câu hỏi của bạn trên ^site_title đã được bình luận bởi ^c_handle:\n\n^open^c_content^close\n\nCâu hỏi của bạn là:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm bình luận:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_commented_subject' => 'Câu hỏi của bạn trên ^site_title đã có một bình luận mới',

		'q_posted_body' => "Một câu hỏi mới được tạo bởi ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nNhấn vào đường dẫn bên dưới để xem nội dung câu hỏi:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_posted_subject' => '^site_title đã có một câu hỏi mới',

		'remoderate_body' => "Một bài viết đã bị chỉnh sửa bởi ^p_handle cần sự đồng ý của bạn:\n\n^open^p_context^close\n\nNhấn vào đường dẫn bên dưới để đồng ý hoặc ẩn bài viết:\n\n^url\n\n\nNhấn vào đường dẫn bên dưới để xem lại tất cả bài viết liên quan:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'remoderate_subject' => 'Kiểm duyệt bài viết trên ^site_title',

		'reset_body' => "Hãy nhấn vào đây để cài lại mật khẩu của bạn trên ^site_title.\n\n^url\n\nHoặc, nhập đoạn mã bên dưới vào ô mã.\n\nCode: ^code\n\nNếu bạn không yêu cầu lấy lại mật khẩu, hãy bỏ qua thông báo này.\n\nCảm ơn bạn,\n^site_title",
		'reset_subject' => '^site_title - Đặt lại mật khẩu đã quên',

		'to_handle_prefix' => "Xin chào ^,\n\n",

		'u_registered_body' => "Một thành viên mới đã được đăng ký với tên ^u_handle.\n\nHãy nhấn vào đường dẫn để xem hồ sơ thành viên:\n\n^url\n\nCám ơn bạn,\n\n^site_title",
		'u_registered_subject' => 'Một thành viên mới đăng ký trên ^site_title',
		'u_to_approve_body' => "Một thành viên mới đã đăng ký với tên ^u_handle.\n\nNhấn vào đên dưới để chấp nhận thành viên:\n\n^url\n\nNhấn vào bên dưới để xem tất cả những thành viên đang chờ được chấp nhận:\n\n^a_url\n\nCảm ơn bạn,\n\n^site_title",

		'u_approved_body' => "Bạn có thể xem hồ sơ của mình ở đây:\n\n^url\n\nThân chào,\n\n^site_title",
		'u_approved_subject' => 'Bạn đã là thành viên của ^site_title',

		'wall_post_body' => "^f_handle đã đăng một bài viết lên tường của bạn trên ^site_title:\n\n^open^post^close\n\nBạn có thể trả lời bài viết tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'wall_post_subject' => 'Đăng bài lên tường của bạn trên ^site_title',

		'welcome_body' => "Cám ơn bạn đã đăng ký thành viên ^site_title.\n\n^custom^confirmThông tin đăng nhập của bạn như sau:\n\nTài khoản: ^handle\nEmail: ^email\n\nHãy giữ thông tin này an toàn để tham khảo trong tương lai.\n\nCảm ơn bạn,\n\n^site_title\n^url",
		'welcome_confirm' => "Hãy nhấn vào đường dẫn bên dưới thể xác thực email của bạn.\n\n^url\n\n",
		'welcome_subject' => 'Chào mừng đến với ^site_title!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
