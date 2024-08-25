<?php

return [
    'create_a_technical_inspection_report' => 'Создать акт технического осмотра',
    'about_assets_title'           => 'Об активах',
    'about_assets_text'            => 'Активы - вещи, которые отслеживаются по серийному номеру или инвентарному номеру. Они, как правило, являются ценными.',
    'archived'  				=> 'Архивированные',
    'asset'  					=> 'Актив',
    'bulk_checkout'             => 'Выдать актив пользователю',
    'bulk_checkin'              => 'Проверка активов',
    'checkin'  					=> 'Вернуть актив на склад',
    'checkout'  				=> 'Выдать актив пользователю',
    'clone'  					=> 'Клонировать актив',
    'deployable'  				=> 'Доступные',
    'deleted'  					=> 'Этот актив был удален.',
    'delete_confirm'            => 'Вы уверены, что хотите удалить этот актив?',
    'edit'  					=> 'Редактировать актив',
    'model_deleted'  			=> 'Эта модель была удалена. Вы должны восстановить модель прежде, чем сможете восстановить актив.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Готов к выдаче',
    'requested'				    => 'Запрошенное',
    'not_requestable'           => 'Не подлежит запросу',
    'requestable_status_warning' => 'Не изменять запрашиваемый статус',
    'restore'  					=> 'Восстановить актив',
    'pending'  					=> 'Ожидание',
    'undeployable'  			=> 'Выданные',
    'undeployable_tooltip'  	=> 'Статус этого актива помечен как "не готов к выдаче". Поэтому он не может быть выдан в данный момент.',
    'view'  					=> 'Показать актив',
    'csv_error' => 'У вас ошибка в вашем CSV-файле:',
    'import_text' => '<p>Загрузите CSV, который содержит историю активов. Ресурсы и пользователи ДОЛЖНЫ уже существуют в системе, или они будут пропущены. Сопоставление ресурсов импорта истории происходит с тегом активов. Мы постараемся найти подходящего пользователя по указанному вами имени и выбранным ниже критериям. Если вы не выбрали критерии ниже, он просто попытается сопоставить формат имени пользователя, который вы настроили в <code>Администратор &gt; Общие настройки</code>.</p><p>Поля, включенные в CSV должны совпадать с заголовками: <strong>Тег активов, имя, дата выписки, Дата выписки</strong>. Любые дополнительные поля будут игнорироваться. </p><p>Дата подтверждения: даты оформления чеков или пустые (пустые или будущие даты) будут выдавать элементы соответствующему пользователю. За исключением столбца Дата возврата создается дата чека с днями даты.</p>
    ',
    'csv_import_match_f-l' => 'Попробуйте сопоставить пользователей с форматом <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Попробуйте сопоставить пользователей с форматом <strong>первого первоначального имени</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Попробуйте сопоставить пользователей с форматом <strong>имени</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Попробуйте сопоставить пользователей по <strong>электронной почте</strong> в качестве имени пользователя',
    'csv_import_match_username' => 'Попытаться сопоставить пользователей с помощью <strong>имени пользователя</strong>',
    'error_messages' => 'Сообщения об ошибках:',
    'success_messages' => 'Сообщения об успехе:',
    'alert_details' => 'Подробности смотрите ниже.',
    'custom_export' => 'Пользовательский экспорт',
    'mfg_warranty_lookup' => ':manufacturer статус гарантии',
    'user_department' => 'Отдел пользователя',
];
