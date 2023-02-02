"Illuminate" là một framework cho PHP, được sử dụng để xây dựng các ứng dụng web với PHP. Nó cung cấp một tập hợp các
công cụ, thư viện và kiến trúc mã nguồn mở cho việc phát triển ứng dụng web dễ dàng hơn. Illuminate là một phần của
Laravel, một framework web PHP phổ biến.


Illuminate/Events là một thành phần của Illuminate framework trong Laravel, cho phép bạn xử lý sự kiện trong ứng dụng
web của bạn. Nó cho phép bạn đăng ký các sự kiện và gọi các phản hồi từ các lớp hoặc đối tượng khác khi sự kiện đó xảy
ra.

Cách sử dụng:

Tạo một lớp sự kiện: Tạo một lớp mới để xác định sự kiện và các hành động sẽ được thực hiện khi sự kiện đó xảy ra.

Đăng ký sự kiện: Sử dụng Event facade để đăng ký sự kiện và gán nó cho một lớp xử lý.

Gọi sự kiện: Sử dụng Event facade để gọi sự kiện và kích hoạt các hành động được đăng ký cho sự kiện đó.

Ví dụ:

<?php

//Tạo một lớp sự kiện UserRegistered
class UserRegistered
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}

//Đăng ký sự kiện
Event::listen('user.registered', function ($event) {
    Log::info("User {$event->user->name} đã đăng ký");
});

//Gọi sự kiện
Event::fire(new UserRegistered($user));
?>
Illuminate/Database là một thành phần của Illuminate framework trong Laravel, cho phép bạn tương tác với cơ sở dữ liệu
trong ứng dụng web của bạn. Nó cung cấp một tập hợp các lớp và tiện ích để truy vấn cơ sở dữ liệu và thực hiện các thao
tác CRUD (tạo, đọc, cập nhật, xóa) trên dữ liệu.

Cách sử dụng:

Cấu hình kết nối CSDL: Cấu hình kết nối tới cơ sở dữ liệu trong tập tin config/database.php hoặc bằng cách sử dụng câu
lệnh Artisan.

Tạo một model: Tạo một model để quản lý tương tác với bảng dữ liệu tương ứng.

Truy vấn dữ liệu: Sử dụng các phương thức của model hoặc query builder để truy vấn dữ liệu.