# Generate From Table

php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME

VD: Generate từ bảng User

php artisan infyom:scaffold User --fromTable --tableName=users

# Skip File Generation

Chúng ta có thể chọn generate hoặc bỏ chúng đi khi generation


php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME --skip=routes,migration,model

Danh sách những file được phép bỏ:

migration
model
controllers
api_controller
scaffold_controller
scaffold_requests
routes
api_routes
scaffold_routes
views
tests
menu
dump-autoload

# Paginate Records

Tự động đặt phân trang cho trang index.

--paginate=$PAGINATE

-- make Critreria -------
php artisan make:criteria OrderItemRevenue
