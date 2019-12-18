<?php
/**
 * Đoạn trên nghĩa là mình sẽ sử dụng hàm is_activate_sidebar() để kiểm tra xem cái main-sidebar đã có widget nào chưa,
 * nếu nó đã được thêm widget vào thì nó sẽ hiển thị sidebar lên bằng hàm dynamic_sidebar().
 * Trường hợp nếu sidebar chưa có widget nào thì sẽ hiển thị một đoạn nội dung kêu hãy thêm widget vào.
 */


if (is_active_sidebar('main-sidebar')):

    dynamic_sidebar('main-sidebar');

else :

    _e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'lotus');

endif;
