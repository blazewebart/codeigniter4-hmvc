# CodeIgniter 4 HMVC Modular

Get start, simple steps

#First - installation

- clone project
```sh
git clone https://github.com/blazewebart/codeigniter4-hmvc.git
``` 

- go to project
```sh
cd codeigniter4-hmvc
``` 

- get relatives 
```sh
composer update --no-dev
``` 

- run local server
```sh
php spark serve
``` 

#Second - description

- add to this file in project '/codeigniter4-hmvc/app/Config/Autoload.php'

```sh
    public $psr4 = [
        APP_NAMESPACE => APPPATH, // For custom app namespace
        'Config'      => APPPATH . 'Config',
        'Modules\Blog' => ROOTPATH. 'Modules/Blog', // add new module.
    ];
``` 

- and that is all, add in module folder your code '/codeigniter4-hmvc/modules/' 

