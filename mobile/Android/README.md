*Тестовое задание Сима-ленд для Android разработчиков.*

**Приложение Каталог.**

Сделайте клиент-серверное приложение "Каталог" с таббаром. 

[Иконки](assets/icons) для таббара.

***1 экран - каталог.***
 
Без заголовка. Сделайте список категорий плитками картинка + название.
Данные для отображения получите по запросу:
```
GET https://www.sima-land.ru/api/v3/category/?is_not_empty=1&with_adult=1&page=1&level=1&sort=priority_home&expand-root=1&expand=name_alias
```
Экран должен обладать функцией pull-to-refresh (потянуть, чтобы обновить).

![catalog][catalog]

***2 экран - подкатегории.***

В заголовке название открытой категории и стрелка "назад", при нажатии на которую экран очищается.
Клик по категории должен открыть список подкатегорий в этом же экране (в таком случае кнопка "назад" возвращает в родительскую категорию). *path* для запроса возьмите из родительской категории

```
GET https://www.sima-land.ru/api/v3/category/?is_not_empty=1&with_adult=1&sort=priority&expand-root=1&expand=name_alias&level=2&path=3003
``` 

![categories][categories]

***3 экран - корзина.***

В заголовке надпись "корзина". 
Фоном сделайте [градиент](assets/background/gradient.png), поверх него [картинка](assets/background/emptyCart.png) и надпись "В корзине пусто!"

***4 экран - профиль.***
 
Пустой экран с заголовком без какого либо функционала.

Готовое решение сделайте на Kotlin или Java, предпочтительно с использованием архитектуры MVP или MVVM.
 
Плюсом будет, если добавите сохранение данных в БД и отображение закешированных категорий при отсутствии связи.

Решение добавьте пулл-реквестом в этот проект (в папке mobile/Android/solution)

Пример реализации можно посмотреть в приложении [Сима-ленд](https://play.google.com/store/apps/details?id=ru.sima_land.spb.market&hl=ru)

[catalog]: images/catalog.png "catalog"
[categories]: images/categories.png "categories"