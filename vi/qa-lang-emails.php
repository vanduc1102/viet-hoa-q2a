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

		'feedback_body' => "Comments:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nPrevious page:\n^previous\n\nUser:\n^url\n\nIP address:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ feedback',

		'flagged_body' => "A post by ^p_handle has received ^flags:\n\n^open^p_context^close\n\nClick below to see the post:\n\n^url\n\n\nClick below to review all flagged posts:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'flagged_subject' => '^site_title has a flagged post',

		'moderate_body' => "A post by ^p_handle requires your approval:\n\n^open^p_context^close\n\nClick below to approve or reject the post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'moderate_subject' => '^site_title moderation',

		'new_password_body' => "Your new password for ^site_title is below.\n\nPassword: ^password\n\nIt is recommended to change this password immediately after logging in.\n\nCảm ơn bạn,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Your New Password',

		'private_message_body' => "You have been sent a private message by ^f_handle on ^site_title:\n\n^open^message^close\n\n^moreCảm ơn bạn,\n\n^site_title\n\n\nTo block private messages, visit your account page:\n^a_url",
		'private_message_info' => "More information about ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Click below to reply to ^f_handle by private message:\n\n^url\n\n",
		'private_message_subject' => 'Message from ^f_handle on ^site_title',

		'q_answered_body' => "Câu hỏi của bạn trên ^site_title đã được trả lời bởi ^a_handle:\n\n^open^a_content^close\n\nCâu hỏi của bạn là:\n\n^open^q_title^close\n\nNếu bạn thích câu trả lời này, hãy đánh dấu nó là trả lời hay nhất:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_answered_subject' => 'Câu hỏi của bạn trên ^site_title đã được trả lời',

		'q_commented_body' => "Câu hỏi của bạn trên ^site_title đã được bình luận bởi ^c_handle:\n\n^open^c_content^close\n\nCâu hỏi của bạn là:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm bình luận:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_commented_subject' => 'Câu hỏi của bạn trên ^site_title đã có một bình luận mới',

		'q_posted_body' => "Một câu hỏi mới được tạo bởi ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nNhấn vào đường dẫn bên dưới để xem nội dung câu hỏi:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_posted_subject' => '^site_title đã có một câu hỏi mới',

		'remoderate_body' => "An edited post by ^p_handle requires your reapproval:\n\n^open^p_context^close\n\nClick below to approve or hide the edited post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'remoderate_subject' => '^site_title moderation',

		'reset_body' => "Hãy nhấn vào đây để cài lại mật khẩu của bạn trên ^site_title.\n\n^url\n\nAlternatively, enter the code below into the field provided.\n\nCode: ^code\n\nIf you did not ask to reset your password, please ignore this message.\n\nCảm ơn bạn,\n^site_title",
		'reset_subject' => '^site_title - Cài lại mật khẩu đã quên',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "Một người dùng mới đã được đăng ký với tên ^u_handle.\n\nHãy nhấn vào đường dẫn để xem hồ sơ người dùng:\n\n^url\n\nCám ơn bạn,\n\n^site_title",
		'u_registered_subject' => '^site_title has a new registered user',
		'u_to_approve_body' => "A new user has registered as ^u_handle.\n\nClick below to approve the user:\n\n^url\n\nClick below to review all users waiting for approval:\n\n^a_url\n\nCảm ơn bạn,\n\n^site_title",

		'u_approved_body' => "Bạn có thể xem hồ sơ của mình ở đây:\n\n^url\n\nThân chào,\n\n^site_title",
		'u_approved_subject' => 'Bạn đã là thành viên của ^site_title',

		'wall_post_body' => "^f_handle has posted on your user wall at ^site_title:\n\n^open^post^close\n\nYou may respond to the post here:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'wall_post_subject' => 'Đăng bài lên tường của bạn trên ^site_title',

		'welcome_body' => "Cám ơn bạn đã đăng ký ^site_title.\n\n^custom^confirmYour login details are as follows:\n\nUsername: ^handle\nEmail: ^email\n\nPlease keep this information safe for future reference.\n\nCảm ơn bạn,\n\n^site_title\n^url",
		'welcome_confirm' => "Hãy nhấn vào đường dẫn bên dưới thể xác thực email của bạn.\n\n^url\n\n",
		'welcome_subject' => 'Chào mừng đến với ^site_title!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
