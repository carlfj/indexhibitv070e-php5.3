<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Russian
* 
* @version 1.0
* @author Andrej Goncharov
*/

// RU

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Настройки',
	'help' => 'Помощь',
	'logout' => 'Выход',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Содержание',
	'admin' => 'Администрирование',
	'pages' => 'Страницы',
	'settings' => 'Установки',
	'section' => 'Раздел',
	'exhibits' => 'Экспозиции',
	'stats' => 'Статистика',
	'settings' => 'Установки',
	'system' => 'Система',
	'user' => 'Пользователь',
	
	// error messages
	'login err' => 'Неправильный логин или пароль. Попробуйте снова.',
	'router err 1' => 'Этот модуль/страница не существует.',
	'class not found' => 'Класс не найден',
	'database is unavailable' => 'База данных недоступна.',
	'error finding settings' => 'Ошибка поиска настроек.',
	'no menu created' => 'Меню не было создано.',
	'no results' => 'Нет результатов, произошла ошибка.',
		
	// Location descriptors
	'main' => 'Главная',
	'edit' => 'Редактировать',
	'preview' => 'Просмотр',
	'search' => 'Поиск',
	'new' => 'Новая',
	
	// some tabs
	'text' => 'Текст',
	'images' => 'Изображения',
	
	// meed tp tranlsate the default sections
	'project' => 'проект',
	'on-going' => 'текущие',
	
	// generic forms parts & labels
	'page title' => 'Название экспозиции',
	'add page' => 'Добавить экспозицию',
	'submit' => 'Отправить',
	'update' => 'Обновить',
	'required' => 'Обязательно',
	'optional' => 'Опционально',
	'hidden' => 'Скрыта',
	'delete' => 'Удалить',
	'publish' => 'Опубликовать',
	'unpublish' => 'Снять с публикации',
	'choose file' => 'Выбрать файл',
	
	'exhibition name' => 'Название экспозиции',
	'advanced mode' => 'Расширенный режим',
	'theme' => 'Тема',
	'api key' => 'API Ключ',
	'image max' => 'Максимальный размер изображения',
	'thumb max' => 'Максимальный размер миниатюры',
	'image quality' => 'Качество изображения',
	'freelancer' => 'Фриланс статус',
	'pre nav text' => 'Текст перед навигацией',
	'post nav text' => 'Текст после навигации',
	'html allowed' => '(HTML разрешен)',
	'update order' => 'Обновить порядок',
	'view' => 'Просмотр',
	'no images' => 'Нет изображений',
	'add images' => 'Добавить изображения',
	'image title' => 'Заголовок изображения',
	'image caption' => 'Подпись изображения',
	'attach more files' => 'Присоединить еще файлы',
	'page process' => 'Обработать страницу',
	'page hide' => 'Скрыть страницу',
	'background image' => 'Картинка фона',
	'background color' => 'Цвет фона',
	'edit color' => 'Щелкните на цветовом квадрате, чтобы редактировать выбор.',
	'uploaded' => 'Загружено',
	'updated' => 'Обновлено',
	'width' => 'Ширина',
	'height' => 'Высота',
	'kb' => 'KБ',
	'saving' => 'Сохраняется...',
	
	// editor buttons & such
	'bold' => 'Жирный',
	'italic' => 'Курсив',
	'underline' => 'Подчеркнуть',
	'links manager' => 'Менеджер ссылок',
	'files manager' => 'Менеджер файлов',
	'save preview' => 'Сохранить/Посмотреть',
	'upload' => 'Загрузить',
	'make selection' => 'Сделать выделение',
	'on' => 'Вкл',
	'off' => 'Выкл',
	
	// popup editor parts
	"create link" => "Создать ссылку",
	"hyperlink" => "Гиперссылка",
	"urlemail" => "URL / Email",
	"none found" => "Не найдено",
	"allowed filetypes" => "Допустимые типы файлов",
	"upload files" => "Загрузить файлы",
	"attach more" => "Прикрепить еще файлы",
	"title" => "Заголовок",
	"edit file info" => "Редактировать информацию файла",
	"description" => "описание",
	"if applicable" => "(если применимо)",
	
	// statistics related things
	'referrers' => 'Источники',
	'page visits' => 'Посещений страниц',
	
	'total' => 'Всего',
	'unique' => 'Уникальных',
	'refers' => 'Источники',
	
	'since' => 'Начиная с',
	'ip' => 'IP',
	'country' => 'Страна',
	'date' => 'Дата',
	'keyword' => 'Ключевое слово',
	'total pages' => 'всего страниц',
	'next' => 'Следующая',
	'previous' => 'Предыдущая',
	'visits' => 'Посещений',
	'page' => 'Страница',
	
	'this week' => 'На этой неделе',
	'today' => 'Сегодня',
	'yesterday' => 'Вчера',
	'this month' => 'В этом месяце',
	'last week' => 'На прошлой неделе',
	'year' => 'За год',
	'last month' => 'За прошлый месяц',
	'top 10 referrers' => 'Топ 10 источников',
	'top 10 keywords' => 'Топ 10 ключевых слов',
	'top 10 countries' => 'Топ 10 стран',
	'past 30' => 'прошлые 30 дней',
	
	'2 weeks ago' => '2 недели назад',
	'3 weeks ago' => '3 недели назад',
	'4 weeks ago' => '4 недели назад',
	'2 days ago' => '2 дня назад',
	'3 days ago' => '3 дня назад',
	'4 days ago' => '4 дня назад',
	'5 days ago' => '5 дней назад',
	'6 days ago' => '6 дней назад',
	'2 months ago' => '2 месяца назад',
	'3 months ago' => '3 месяца назад',
	'4 months ago' => '4 месяца назад',
	'5 months ago' => '5 месяцев назад',
	'6 months ago' => '6 месяцев назад',
	'7 months ago' => '7 месяцев назад',
	'8 months ago' => '8 месяцев назад',
	'9 months ago' => '9 месяцев назад',
	'10 months ago' => '10 месяцев назад',
	'11 months ago' => '11 месяцев назад',
	
	// system strings
	'name' => 'Имя',
	'last name' => 'Фамилия',
	'email' => 'Email',
	'login' => 'Логин',
	'password' => 'Пароль',
	'confirm password' => 'Подтвердите пароль',
	'number chars' => '6-12 символов',
	'if change' => 'если меняется',
	'time now' => 'Сколько сейчас времени?',
	'time format' => 'Формат времени',
	'your language' => 'Язык',
	
	// installation
	'htaccess ok' => 'файл .htaccess готов...',
	'htaccess not ok' => "Установите значение 'MODREWRITE' на 'false' в config.php...",
	'files ok' => "папка /files доступна для записи...",
	'files not ok' => "папка /files недоступна для записи...",
	'filesgimgs ok' => "папка /files/gimgs доступна для записи...",
	'filesgimgs not ok' => "папка /files/gimgs недоступна для записи...",
	'try db setup now' => "Теперь попробуем установить базу данных.",
	'continue' => "Продолжить",
	'please correct errors' => "Пожалуйста исправьте ошибки выше.",
	'refresh page' => "Затем обновите эту страницу.",
	'goto forum' => "Посетите <a href='http://www.indexhibit.org/forum/'>справочный форум</a> для получения помощи.",
	'edit config' => "Вам необходимо отредактировать файл config.php с надлежащими настройками базы данных.",
	'refresh this page' => "Обновите эту страницу после выполнения этого шага.",
	'contact webhost' => "Если вы их не знаете, свяжитесь со своим провайдером для получения помощи.",
	'database is ready' => "Похоже, что база данных готова.",
	'tried installing' => "Мы попытались установить таблицы.",
	'cannot install' => "Не получается соединиться или установить базу данных.",
	'check config' => "Пожалуйста проверьте свои настройки конфигурации снова.",
	'default login' => "Логин/пароль по умолчанию — index1 / exhibit.",
	'change settings' => "Измените их и настройки сайта, когда окажетесь внутри.",
	'lets login' => "Давайте войдем!",
	'freak out' => "Какая-то ужасная ошибка — с ума сойти!",
	
	// javascript confirm pops
	'are you sure' => 'Вы уверены?',
	
	
	// additions 17.03.2007
	'change password' => 'Сменить пароль',
	'project year' => 'Год проекта',
	'report' => 'Отображается',
	'email address' => 'адрес электронной почты',
	'below required' => 'Перечисленное ниже необходимо для отображения в Indexhibit',
	'from registration' => 'из регистрации Indexhibit',
	'register at' => 'Зарегистрируйтесь на',
	'background tiling' => 'Фон мозаикой',
	'page process' => 'Только чистый HTML',
	'hide page' => 'Скрыть страницу из индекса',
	'allowed formats' => 'только jpg, png и gif.',
	'filetypes' => 'Типы файлов',
	'updating' => 'Обновляется...',
	
	// additions 18.03.2007
	'max file size' => 'Максимальный размер файла',
	'exhibition format' => 'Формат выставки',
	'view full size' => 'Посмотреть в полный размер',
	'cancel' => 'Отменить',
	'view site' => 'Посмотреть на сайт',
	'store' => 'Магазин',
	
	// additions 19.03.2007
	'config ok' => "папка /ndxz-studio/config доступна для записи...",
	'config not ok' => "папка /ndxz-studio/config folder недоступна для записи...",
	'database server' => "Сервер базы данных",
	'database username' => "Имя пользователя базы данных",
	'database name' => "Имя базы данных",
	'database password' => "Пароль базы данных",
	
	// additions 10.04.2007
	'create new section' => "Создать новый раздел",
	'section name' => "Имя раздела",
	'folder name' => "Имя папки",
	'chronological' => "Хронологически",
	'sectional' => "По разделам",
	'use editor' => "WYSIWYG Редактор",
	'organize' => "Упорядочить",
	'sections' => "Разделы",
	'path' => "Путь",
	'section order' => "Порядок разделов",
	'reporting' => "Отображается",
	'sure delete section' => "Вы уверены? Это также удалит все страницы в данном разделе.",
	'projects section' => "Раздел проектов",
	'about this site' => "О сайте",
	'additional options' => "Дополнительные настройки",
	'add section' => "Добавить раздел",
	
	// additions 21.04.2007
	'section display' => "Display Section Title",
	
	'the_end' => 'конец'
	//'' => '',
);


?>