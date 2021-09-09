<p align="center">
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/graphs/contributors"><img src="https://img.shields.io/github/contributors/ahmet-cetinkaya/northwind-project-backend-laravel.svg?style=for-the-badge"></a>
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/network/members"><img src="https://img.shields.io/github/forks/ahmet-cetinkaya/northwind-project-backend-laravel.svg?style=for-the-badge"></a>
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/stargazers"><img src="https://img.shields.io/github/stars/ahmet-cetinkaya/northwind-project-backend-laravel.svg?style=for-the-badge"></a>
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/issues"><img src="https://img.shields.io/github/issues/ahmet-cetinkaya/northwind-project-backend-laravel.svg?style=for-the-badge"></a>
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/blob/master/LICENSE"><img src="https://img.shields.io/github/license/ahmet-cetinkaya/northwind-project-backend-laravel.svg?style=for-the-badge"></a>
  <a href="https://linkedin.com/in/ahmet-cetinkaya"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"></a>
</p>
<br />

<p align="center">
  <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel"><img src="https://user-images.githubusercontent.com/53148314/131480031-a767a623-c066-4064-b47c-0344b9408995.png" height="125"></a>
  <h3 align="center">Northwind Project Backend Laravel</h3>
  <p align="center">
    Northwind Project Backend Laravel with N-Layer Architecture.
    <br />
    <!-- <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel"><strong>Explore the docs »</strong></a> -->
    <br />
    <!-- <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel">View Demo</a>
    · -->
    <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/issues">Report Bug</a>
    ·
    <a href="https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/issues">Request Feature</a>
  </p>
</p>

## 💻 About The Project

### Built With

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

### Layers
#### Routes
Routes Layer that opens the Http layer to the internet.
path: "/routes"
#### HTTP 
HTTP Layer has controllers and middlewares.
path: "/app/Http"
#### Business 
Business Layer created to process or control the incoming information according to the required conditions.
path: "/app/Business"
#### Core 
Core layer containing various particles independent of the project.
path: "/app/Core"
#### DataAccess 
Data Access Layer created to perform database CRUD operations.
path: "/app/DataAccess"
#### Entities 
Entities Layer created for database tables.
path: "/app/Entities"

## ⚙️ Getting Started

### Prerequisites

-   PHP 8.0

### Installation

1. Clone the repo
    ```sh
    git clone https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel.git
    ```
2. Import Dump to MySql
3. 
    ```sh 
    cd /northwind-project-backend-laravel
    ```
4. Copy ```.env.example``` file and rename ```.env```. Edit database configurations on ```.env``` file
5. Download composer: https://getcomposer.org/download/
6. 
    ```sh 
    composer update
    ``` 
7. 
    ```sh 
    composer install
    ``` 
8. Start project
    ```sh
    php artisan serve
    ```

## 🚀 Usage API

| Domain | Method   | URI                           | Name | Action                                                     | Middleware                                 |
| ------ | -------- | ----------------------------- | ---- | ---------------------------------------------------------- | ------------------------------------------ |
|        | GET|HEAD | /                             |      | Closure                                                    | web                                        |
|        | POST     | api/auth/login                |      | App\Http\Controllers\AuthController@login                  | api                                        |
|        | GET|HEAD | api/auth/refresh              |      | App\Http\Controllers\AuthController@refresh                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\Authenticate:api       |
|        | POST     | api/auth/register             |      | App\Http\Controllers\AuthController@register               | api                                        |
|        | GET|HEAD | api/categories                |      | App\Http\Controllers\CategoryController@GetAll             | api                                        |
|        | POST     | api/categories                |      | App\Http\Controllers\CategoryController@Add                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/categories/{id}           |      | App\Http\Controllers\CategoryController@GetById            | api                                        |
|        | PUT      | api/categories/{id}           |      | App\Http\Controllers\CategoryController@Update             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/categories/{id}           |      | App\Http\Controllers\CategoryController@Delete             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/customers                 |      | App\Http\Controllers\CustomerController@GetAll             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/customers                 |      | App\Http\Controllers\CustomerController@Add                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/customers/{id}            |      | App\Http\Controllers\CustomerController@GetById            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/customers/{id}            |      | App\Http\Controllers\CustomerController@Update             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/customers/{id}            |      | App\Http\Controllers\CustomerController@Delete             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/employees                 |      | App\Http\Controllers\EmployeeController@GetAll             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/employees                 |      | App\Http\Controllers\EmployeeController@Add                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/employees/{id}            |      | App\Http\Controllers\EmployeeController@GetById            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/employees/{id}            |      | App\Http\Controllers\EmployeeController@Update             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/employees/{id}            |      | App\Http\Controllers\EmployeeController@Delete             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/employeesterritories      |      | App\Http\Controllers\EmployeeTerritoryController@GetAll    | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/employeesterritories      |      | App\Http\Controllers\EmployeeTerritoryController@Add       | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/employeesterritories/{id} |      | App\Http\Controllers\EmployeeTerritoryController@GetById   | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/employeesterritories/{id} |      | App\Http\Controllers\EmployeeTerritoryController@Update    | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/employeesterritories/{id} |      | App\Http\Controllers\EmployeeTerritoryController@Delete    | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/orderdetails              |      | App\Http\Controllers\OrderDetailController@GetAll          | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/orderdetails              |      | App\Http\Controllers\OrderDetailController@Add             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/orderdetails/{id}         |      | App\Http\Controllers\OrderDetailController@GetById         | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/orderdetails/{id}         |      | App\Http\Controllers\OrderDetailController@Update          | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/orderdetails/{id}         |      | App\Http\Controllers\OrderDetailController@Delete          | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/orders                    |      | App\Http\Controllers\OrderController@GetAll                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/orders                    |      | App\Http\Controllers\OrderController@Add                   | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/orders/{id}               |      | App\Http\Controllers\OrderController@GetById               | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/orders/{id}               |      | App\Http\Controllers\OrderController@Update                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/orders/{id}               |      | App\Http\Controllers\OrderController@Delete                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/products                  |      | App\Http\Controllers\ProductController@GetAll              | api                                        |
|        | POST     | api/products                  |      | App\Http\Controllers\ProductController@Add                 | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/products/{id}             |      | App\Http\Controllers\ProductController@GetById             | api                                        |
|        | PUT      | api/products/{id}             |      | App\Http\Controllers\ProductController@Update              | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/products/{id}             |      | App\Http\Controllers\ProductController@Delete              | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/regions                   |      | App\Http\Controllers\RegionController@GetAll               | api                                        |
|        | POST     | api/regions                   |      | App\Http\Controllers\RegionController@Add                  | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/regions/{id}              |      | App\Http\Controllers\RegionController@GetById              | api                                        |
|        | PUT      | api/regions/{id}              |      | App\Http\Controllers\RegionController@Update               | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/regions/{id}              |      | App\Http\Controllers\RegionController@Delete               | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/shippers                  |      | App\Http\Controllers\ShipperController@GetAll              | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/shippers                  |      | App\Http\Controllers\ShipperController@Add                 | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/shippers/{id}             |      | App\Http\Controllers\ShipperController@GetById             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/shippers/{id}             |      | App\Http\Controllers\ShipperController@Update              | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/shippers/{id}             |      | App\Http\Controllers\ShipperController@Delete              | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/suppliers                 |      | App\Http\Controllers\SupplierController@GetAll             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/suppliers                 |      | App\Http\Controllers\SupplierController@Add                | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/suppliers/{id}            |      | App\Http\Controllers\SupplierController@GetById            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/suppliers/{id}            |      | App\Http\Controllers\SupplierController@Update             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/suppliers/{id}            |      | App\Http\Controllers\SupplierController@Delete             | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/territories               |      | App\Http\Controllers\TerritoryController@GetAll            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | POST     | api/territories               |      | App\Http\Controllers\TerritoryController@Add               | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | api/territories/{id}          |      | App\Http\Controllers\TerritoryController@GetById           | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | PUT      | api/territories/{id}          |      | App\Http\Controllers\TerritoryController@Update            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | DELETE   | api/territories/{id}          |      | App\Http\Controllers\TerritoryController@Delete            | api                                        |
|        |          |                               |      |                                                            | App\Http\Middleware\SecuredOperation:admin |
|        | GET|HEAD | sanctum/csrf-cookie           |      | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show | web                                        |

<!-- ## 🚧 Roadmap

See the [open issues](https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel/issues) for a list of proposed features (and known issues). -->

## 🤝 Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## ⚖️ License

Distributed under the MIT License. See `LICENSE` for more information.

## 📧 Contact

Ahmet ÇETİNKAYA - [ahmetcetinkaya.info](https://ahmetcetinkaya.info/)

Project Link: [https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel](https://github.com/ahmet-cetinkaya/northwind-project-backend-laravel)

<!-- ## 🙏 Acknowledgements

-   []() -->
