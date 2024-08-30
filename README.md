# Laravel Repository Pattern Implementation

Dự án này triển khai Repository Pattern trong Laravel, giúp tách biệt logic truy cập dữ liệu khỏi controllers và tăng tính module hóa của ứng dụng.

## Cấu trúc


app/
├── Repositories/
│ ├── Interfaces/
│ │ ├── BaseRepositoryInterface.php
│ │ └── UserRepositoryInterface.php
│ ├── BaseRepository.php
│ └── UserRepository.php
├── Providers/
│ └── AppServiceProvider.php
└── Http/
└── Controllers/
└── Api/
└── UserController.php

## Cách sử dụng

1. Tạo repository cho model của bạn bằng cách tạo một interface và một class repository mới.
2. Đăng ký repository trong `RepositoryServiceProvider`.
3. Sử dụng repository trong controller.

