


Route::get('', [App\Http\Controllers\ClientController::class, 'index'])->name('');

# usar o vue 

composer require laravel/ui
php artisan ui vue
npm i
npm run dev

# videos uteis 
INERTIA 
https://www.youtube.com/watch?v=wJN_7YJkzRw router view
https://www.youtube.com/watch?v=JZDmBWRPWlw Single Page Apps
https://www.youtube.com/watch?v=Oim4NZECwTY&list=PLB5SYDBi8M3FBx5Ff-1fGug4iHMDiq5uo
https://www.youtube.com/watch?v=hOF2NQkkyYk completo 
https://www.youtube.com/watch?v=9nugQoIjTHk

JETSTREAM 

https://jetstream.laravel.com/2.x/installation.html
compartilhar classe com todas as viewa
https://www.youtube.com/watch?v=PnDiUAix27I

Quntidade de acessos aos posts
https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG Batist

coments 
https://www.youtube.com/watch?v=V66VbP4p0Wc&list=PLVSNL1PHDWvSOFpHtRi1-oZjBll69lehn&index=4
https://pt.stackoverflow.com/questions/136163/deploy-de-projeto-laravel-pelo-git
https://www.youtube.com/watch?v=gFAB9GKtxEs
https://www.google.com/search?q=ux+login&tbm=isch&ved=2ahUKEwjbqdLS-Y73AhUyL7kGHee5AjIQ2-cCegQIABAA&oq=ux+login&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQCBAeOgcIIxDvAxAnOgQIABBDOgsIABCABBCxAxCDAToICAAQgAQQsQM6BwgAELEDEENQyQlY7xtgxx5oAHAAeACAAewBiAHHCpIBBTAuOC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=jKlVYtszst7k5Q_n84qQAw&bih=752&biw=1432#imgrc=ABY2udvR-pYW6M

helpers 
https://www.youtube.com/watch?v=5KfpuDNTlaA
ondas com translate 

sistema financeiro
https://www.youtube.com/watch?v=2BdAIrbWSH4&list=PL7_3IDIE2Fy7RLs5He867a4J2IOcnrCeI - ordem de serviço 
https://www.youtube.com/watch?v=WCYKKBtxfrc&list=PLw6ZnC_OJcva1PZgT_cdURU2pX0Eh6_nt&index=48

curso grande 
https://www.youtube.com/watch?v=efM4oGnIM4w&list=PLxNM4ef1BpxhBRa1TlRrS1TZ0bUo-1r_r

interessante
https://www.youtube.com/watch?v=6-QeM4THJ0c
https://www.youtube.com/watch?v=uJu2QcK8Nmk&list=PLVSNL1PHDWvS1e1aeoJV7VvaDZ9m67YPU&index=28
https://www.youtube.com/watch?v=62w9n83YvOc
https://www.youtube.com/watch?v=_yzDcSCECUk&list=PL0_f8nzxZ-FksYjJ8Oj4WwD13OVE2tNiH&index=2

# deploy laravel 
git clone git@github.com:seuprojeto
cd seuprojeto
composer install --no-scripts
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
bower install
gulp
npm run watch
php artisan serve 
http://127.0.0.1:8000/

 <p>Artigos Cadastrados: {{$posts->comments->count()}}</p>

# autenticação  jetstream

composer require laravel/jetstream
php artisan jetstream:install livewire ou php artisan jetstream:install inertia
php artisan migrate:status
npm install
npm run dev

# banco de dados 
DB_CONNECTION=mysql
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=123456

# migrations 
php artisan make:model Nome -mc
php artisan make:migration add_user_id_to_posts_table

# Banco de dados 

INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('João Azevedo', 'joaoazevedo@gmail.com', '6233221100', '11111111111');

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('Maria do Carmo', 'mariadocarmo.com', '623333445566', '22222222222');

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('Marcos Silva', 'marcossilva.com', '6233556677', '33333333333');

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('Pedro Mackenzie', 'pedromackenzie', '6233667788', '44444444444');

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('Felipe Jonson', 'felipejonson@gmail.com', '6233778899', '55555555555');

INSERT INTO clients (name_client, email, phone, cpf ) VALUES ('Amanda Pereira', 'amandapereira@gmail.com', '6233889911', '66666666666');

# codigos 


# soluções de problemas 

Error: Cannot find module 'webpack/lib/rules/DescriptionDataMatcherRulePlugin'
## erro apresentado ao roda :npm run dev
RESOLVE: 
npm update vue-loader

https://stackoverflow.com/questions/63021856/cannot-find-module-webpack-lib-rules-basiceffectruleplugin
