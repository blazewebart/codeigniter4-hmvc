# CodeIgniter 4 HMVC Modular

Get start to simple steps below

# First - installation

clone project
```sh
git clone https://github.com/blazewebart/codeigniter4-hmvc.git
``` 

go to project
```sh
cd codeigniter4-hmvc
``` 

get relatives 
```sh
composer update --no-dev
``` 

run local server
```sh
php spark serve
``` 

# Second - description

replace in this file '/codeigniter4-hmvc/app/Config/Autoload.php' code below, with connecting your new module 

```sh
    public $psr4 = [
        APP_NAMESPACE => APPPATH, // For custom app namespace
        'Config'      => APPPATH . 'Config',
        'Modules\Blog' => ROOTPATH. 'Modules/Blog', // add new module.
    ];
``` 


that is all, add in module folder '/codeigniter4-hmvc/modules/' your new modules

Thanks a lot, Konstantin)

