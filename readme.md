PHP test 

How to use:

- Clone this repository. (https://github.com/thesuperinkavn/sblog.git)
- Run composer install
- Rename .env.example to .env
- Open .env file and setup your database
- Run php artisan key:generate
- Run php artisan migrate
- Use tinker to set Admin email and password : 
    //
    php artisan tinker
    $admin = App\Admin
    $admin->email = 'admin@admin.com'
    $admin->password = Hash::make('123456')
    $admin->save()
    //

- Run php artisan serve and go to localhost
See demo at : http://inkavn.tk