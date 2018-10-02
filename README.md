# PHP-библиотека контентного API Яндекс.Маркета

С помощью [контентного API Яндекс.Маркета](https://tech.yandex.ru/market/content-data/doc/dg-v2/concepts/about-docpage/) внешние приложения могут получать сведения о моделях товаров, предложениях на них и магазинах, размещающихся на Яндекс.Маркете. Библиотека реализует работу с контентным API на языке PHP. 

* [Требования](#Требования)
* [Лицензия и условия использования](#Лицензия-и-условия-использования)
* [Установка](#Установка)
* [Использование](#Использование)

## Требования

* PHP 5.6 или выше.
* Зарегистрированное приложение с авторизационным ключом. 
  
Подробнее см. раздел [С чего начать](https://github.com/yandex-market/yandex-market-php-content/wiki/С-чего-начать) в Wiki.

## Лицензия и условия использования

Библиотека распространяется по [лицензии MIT](LICENSE).

Использование контентного API регулируется [пользовательским соглашением](https://yandex.ru/legal/market_api_content/).

## Установка

Библиотека устанавливается с помощью пакетного менеджера [Composer](https://getcomposer.org).

1. Добавьте библиотеку в файл `composer.json` вашего проекта:

   ```json
   {
       "require": {
           "yandex-market/yandex-market-php-content": "dev-master"
       }
   }
   ```

2. Включите автозагрузчик Composer в код проекта:

   ```php
   require __DIR__ . '/vendor/autoload.php';
   ```   

## Использование

Например, получим обзоры на Apple iPhone 8 Plus 64GB:
```php
// Указываем авторизационный токен
$token = '01234567-89ab-cdef-fedc-ba9876543210';

// Создаем экземпляр клиента для работы с моделями
$modelClient = new \Yandex\Market\Content\Clients\ModelClient($token);

$modelReviews = [];

// Обзоры возвращаются постранично
$pageNumber = 0;
do {
    $pageNumber++;

    // Получаем страницу обзоров на Apple iPhone 8 Plus 64GB с номером pageNumber
    $modelReviewsObject = $modelClient->getReviews(1732171530, ['page' => $pageNumber,]);
    // Получаем итератор по обзорам
    $modelReviewsPage = $modelReviewsObject->getReviews();

    // Получаем количество обзоров на странице
    $modelReviewsPageCount = $modelReviewsPage->count();

    // Получаем первый обзор
    $modelReview = $modelReviewsPage->current();
    // Добавляем объект с URL и заголовком обзора в массив modelReviews,
    // затем переходим к следующему    
    for ($i = 0; $i < $modelReviewsPageCount; $i++) {
        $reviewObject = [
            'url' => $modelReview->getUrl(),
            'title' => $modelReview->getTitle(),
        ]            
        $modelReviews[] = $reviewObject;        
        $modelReview = $modelReviewsPage->next();
    }
    
    // Узнаем, является ли полученная страница последней   
    $modelReviewsIsLastPage = $modelReviewsObject->getPager()->getLast();
} while (! $modelReviewsIsLastPage);    
```

Подробнее см. [Wiki](https://github.com/yandex-market/yandex-market-php-content/wiki) и [документацию партнерского API](https://tech.yandex.ru/market/content-data/doc/dg-v2/concepts/about-docpage/).   
