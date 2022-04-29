<?php

$lng = array(
	'mod_name' => 'Установка',
	'step_1' => 'Шаг #1',
	'step_2' => 'Шаг #2',
	'step_3' => 'Шаг #3',
	'settings' => 'Настройки',
	'finish' => 'Завершение установки',
	'db_settings' => 'Настройки базы',
	'site_settings' => 'Настройки сайта',
	'on' => 'Вкл.',
	'off' => 'Выкл.',
	'yes' => 'Да',
	'no' => 'Нет',
	'update' => 'Обновить',
	'e_msg' => 'Внимание!',
	'e_sql' => 'SQL Error #',
	'copy_pre' => 'Полное или частичное копирование сайта',
	'copy_app' => 'запрещено.',
	'install_prepare' => 'Подготовка к установке',
	'isn_p_msg1' => 'Вас приветствует мастер установки системы WebMCR',
	'isn_p_msg2' => 'Для продолжения вам необходимо сверить результаты проверки. Если есть строки, помеченные красным, вам необходимо настроить сервер так, чтобы значение соответствовало системным требованиям',
	'isn_p_msg3' => 'Необходимы права на чтение и запись на саму папку и входящие в нее файлы и папки',
	'read_write' => 'Чтение и запись',
	'next' => 'Далее »',
	'gd_exist' => 'Наличие библиотеки GD',
	'mysql_support' => 'Поддержка MySQL или MySQLi',
	'buffer_write' => 'Буферизация вывода',
	'access_files' => 'Доступ к файлам и папкам',

	's1_desc1' => 'Теперь вам необходимо указать настройки базы данных к которой будет подключаться WebMCR.',
	's1_desc2' => 'Внимание! Убедитесь, что версия базы данных соответствует версии PHP. Рекомендуется использовать MySQLi.',
	's1_desc3' => 'Если база данных находится на внешнем сервере, убедитесь, что с данного сервера она доступна для подключения и проверьте правильность вводимых данных.',

	'sr_desc1' => 'Внимание! Переустановка приведет к удалению всех, установленных ранее, таблиц с префиксом mcr_. Вы уверены, что хотите выполнить переустановку?',

	's2_desc1' => 'Введите данны для главного пользователя - администратора проекта и выберите шифрование пароля',

	's3_desc1' => 'Заполните информацию о вашем сайте',

	'info' => 'Информация',
	'install_progress' => 'Ход установки',
	'general' => 'Основные',
	'site_name' => 'Название сайта',
	'site_desc' => 'Описание сайта',
	'site_keys' => 'Ключевые слова',
	'mail' => 'Почта',
	'mail_from' => 'От кого (E-Mail)',
	'mail_from_desc' => 'С какого почтового ящика было отправлено сообщение',
	'mail_from_name' => 'От кого (Имя)',
	'mail_from_name_desc' => 'От чьего имени было отправлено сообщение',
	'mail_reply' => 'E-Mail ответа',
	'mail_reply_name' => 'Имя E-Mail ответа',
	'smtp_use' => 'Использовать SMTP',
	'smtp_host' => 'Адрес SMTP сервера',
	'smtp_user' => 'SMTP пользователь',
	'smtp_pass' => 'SMTP пароль',
	'smtp_tls' => 'Использовать TLS',
	'reinstall' => 'Переустановка',
	'type' => 'Тип',
	'recommended' => 'Рекомендуется',
	'db_host' => 'Адрес хоста',
	'db_port' => 'Порт',
	'db_name' => 'Имя базы данных',
	'db_user' => 'Имя пользователя',
	'db_pass' => 'Пароль пользователя',
	'adm_login' => 'Логин администратора',
	'adm_pass' => 'Пароль администратора',
	'adm_repass' => 'Повторите пароль',
	'adm_mail' => 'E-Mail администратора',
	'encrypt_method' => 'Метод шифрования паролей',
	'congrats' => 'Поздравляем!',
	'fs_msg1' => 'Вы успешно установили WebMCR',
	'fs_msg2' => 'Обязательно удалите папку install из главного каталога WebMCR',
	'fs_msg3' => 'WebMCR - это некоммерческий проект с открытым исходным кодом. Вся разработка идет на энтузиазме, а ваши пожертвования дают нам повод для развития своих идей и продолжения разработки.',
	'fs_msg4' => 'Мы рады любым суммам.',
	'fs_msg5' => 'Спасибо!',
	'go_home' => 'На главную сайта',
	'go_cp' => 'В панель управления',
	'useful_links' => 'Полезные ссылки',
	'official_site' => 'Официальный сайт',
	'documentation' => 'Документация',
	'extensions' => 'Дополнения',
	'vk_page' => 'Страница VK',
	'dev_user' => 'Разработчик новых версий',
	'author_user' => 'Автор WebMCR & Разработчик предыдущих версий',
	'theme_user' => 'Автор изначального шаблона',
	'donate' => 'Пожертвования',

	'e_php_version' => 'Версия PHP не соответствует системным требованиям',
	'e_register_globals' => 'Функция Register Globals не соответствует системным требованиям',
	'e_fopen' => 'Функция allow_url_fopen() не соответствует системным требованиям',
	'e_gd' => 'Библиотека GD не найдена',
	'e_mysql_not_found' => 'MySQL не найдена',
	'e_buffer' => 'Функции буферизации данных недоступны',
	'e_perm_configs' => 'Отсутствуют права на чтение и/или запись папки configs и/или ее содержимого',
	'e_perm_modules' => 'Отсутствуют права на чтение и/или запись папки configs/modules и/или ее содержимого',
	'e_perm_cache' => 'Отсутствуют права на чтение или запись папки cache',
	'e_perm_uploads' => 'Отсутствуют права на чтение или запись папки uploads',
	'e_perm_cloaks' => 'Отсутствуют права на чтение или запись папки uploads/cloaks/',
	'e_perm_icons' => 'Отсутствуют права на чтение или запись папки uploads/panel-icons/',
	'e_perm_skins' => 'Отсутствуют права на чтение или запись папки скинов',
	'e_perm_intf' => 'Отсутствуют права на чтение или запись папки скинов-интерфейсов',
	'e_perm_smiles' => 'Отсутствуют права на чтение или запись папки uploads/smiles/',
	'e_settings' => 'Настройки не могут быть сохранены',
	'e_write' => 'Файл недоступен для записи',
	'e_connection' => 'Невозможно соединиться с базой данных. Проверьте ее доступность для подключения правильность вводимых данных.',
	'e_set_base' => 'Неверно указаны данные для подключения к базе',
	'e_login_format' => 'Логин может состоять только из символов a-zA-Z0-9_- и быть не менее 3-х символов',
	'e_pass_len' => 'Пароль должен быть не менее 6-ти символов',
	'e_pass_match' => 'Пароли не совпадают',
	'e_email_format' => 'Неверный формат E-Mail адреса',
	'e_add_admin' => 'Произошла ошибка добавления администратора',
	'e_add_economy' => 'Произошла ошибка добавления поля экономики',
	'e_upd_group' => 'Произошла ошибка обновления групп пользователей',
	'e_method' => 'Неверный метод шифрования паролей',
);

?>