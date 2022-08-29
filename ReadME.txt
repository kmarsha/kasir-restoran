Please run command below
1. composer install
2. cp .env.example .env || copy env.example to .env  && config database
3. php artisan key:generate
4. php artisan migrate --seed (also seeding all row)
5. open vendor\laravel\ui\auth-backend\AuthenticatesUsers.php 
  1) change public function username() to return 'username' not 'email'
  2) add sintaks below to protected function authenticated()
        if (Auth::user()->role == 'admin') {
            return redirect('/admin/registration');
        } elseif (Auth::user()->role == 'kasir') {
            return redirect('/kasir/transaction');
        } elseif (Auth::user()->role == 'manajer') {
            return redirect('/manajer/dashboard');
        }
  The Reason cause file under vendor not able to pushed
6. open app\Http\Kernel.php add sintaks below in last lined of protected $routeMiddleware array
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'kasir' => \App\Http\Middleware\KasirMiddleware::class,
        'manajer' => \App\Http\Middleware\ManajerMiddleware::class,
        'customer' => \App\Http\Middleware\CustomerMiddleware::class,
  idk but kernel.php with config Middleware after clone is gone maybe cause composer install? idk 
7. Please notice that pdf print is not available just with php artisan serve / 127.0.0.1: but i use valet and it works

tq.