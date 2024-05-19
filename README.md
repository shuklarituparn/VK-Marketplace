<div align="center">

---

# VK MARKETPLACE

---
</div>

![Image](docs/welcome.png)

---

### Login Screen

![Image](docs/login.png)

---

### Register Screen

![Image](docs/register.png)

--- 

### Схема базы данных: 

- Использовал postgreSQL, потому что был знаком,но да, мы можем использовать документально-ориентированную базу данных для этого проетка


- Плюсы :   
  - Соответствие требованиям ACID
  - Быстрый
  - Поддержка типа данных json

- Минусы :
    - Сложный запрос на чтение
    - JOINS
    - Нормализация влияет на скорость чтения
  

- Чтобы увеличить скорость, я бы использовал memcached для кэширования, и использовал принцип "ahead in time caching"


- Также я бы использовал "predictive analysis" для кэширования страниц заранее и предоставления пользовательского контента из кэша с использованием CDN для разных городов, вместо того, чтобы каждый раз делать новый запрос

![DB](docs/vk_marketplace.png)
https://dbdiagram.io/d/ecommerce_site-663bf2ef9e85a46d555b6cee

---

### System Design Diagram


![system](docs/Ecommerce.jpg)

How would I design 

- Использование балансировщика нагрузки для направления запроса пользователя в один из CDN

- Используя kafka для создания сообщений по различным темам и позволяя кластерам elasticsearch использовать это сообщение

- заранее чтение базы данных и запись только в случае необходимости
--- 

### Description


- Файл:  [Description](Description.txt)

---

### Endpoints

    Маршруты для пользователей:
        /api/v1/login: Экран входа в систему и обработка запроса на вход.
        /api/v1/register: Экран регистрации нового пользователя и обработка запроса на регистрацию.
        /api/v1/user/cart: Просмотр содержимого корзины покупок, редактирование и удаление товаров.
        /api/v1/user/order: Оформление заказа на товары.
        /api/v1/user/orders: Просмотр списка заказов пользователя.
        /api/v1/user/orders/deliveries: Просмотр информации о доставке заказов.

    Маршруты для администраторов:
        /api/v1/products: Создание нового продукта, редактирование и удаление существующих.
        /api/v1/cities: Создание нового города, редактирование и удаление существующих.
        /api/v1/warehouse: Просмотр списка складов.
        /api/v1/warehouse/{warehouseID}: Редактирование информации о складе и его запасах.

    Дополнительные маршруты:
        /api/v1/cities/{cityID}: Просмотр информации о конкретном городе.
        /api/v1/products/{productId}: Просмотр информации о конкретном продукте.
        /api/v1/category/{categoryId}: Получение информации о категории товаров.
        /api/v1/subcategory/: Поиск подкатегорий товаров.
        /api/v1/subcategory/{subcategoryId}: Получение информации о конкретной подкатегории товаров.




Вы можете проверить конечные точки здесь: [Endpoints](routes/web.php)

