<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            width: 150px;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .right-align {
            text-align: right;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .signatures {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }
        .signatures div {
            margin-bottom: 20px;
        }

        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header"><img class="navbar-brand-img"
                                             src="{{ Storage::disk('public')->url($snipeSettings->logo) }}"
                                             alt="{{ $snipeSettings->site_name }} logo">
    </div>
    <div class="title">
        Акт технического осмотра
    </div>
    <div class="content">
        <p class="right-align">ТОО «Казминералс Бозшаколь»</p>
        <p class="right-align">ФИО/подпись ________________/___________</p>
        <p class="right-align">Начальник отдела информационных технологий</p>
        <p class="right-align">{{ \App\Helpers\Helper::getFormattedDateObject($assetMaintenance->start_date, 'd.m.Y', false) }}</p>
        <br>
        <br>
        <p>Я, ниже подписавшийся <span class="bold-underline">{{ optional($support)->first_name ?? '' }} {{ optional($support)->last_name ?? '' }}, {{ optional($support)->jobtitle ?? '' }}</span>, составил настоящий акт о том, что для диагностики представлено следующее оборудование:</p>
        <table class="table">
            <tr>
                <th>Наименование</th>
                <th>Инвентарный номер</th>
                <th>Серийный номер</th>
                <th>Дата ввода в эксплуатацию</th>
                <th>Состояние</th>
            </tr>
            <tr>
                <td>{{ optional($asset)->name ?? '' }}</td>
                <td>{{ optional($asset)->asset_tag ?? '' }}</td>
                <td>{{ optional($asset)->serial ?? '' }}</td>
                <td>{{ \App\Helpers\Helper::getFormattedDateObject($asset->date_of_commissioning, 'd.m.Y', false) }}</td>
                <td>{{ optional($assetMaintenance)->title ?? '' }}</td>
            </tr>
        </table>
        <br>
        <br>
        <p class="bold-underline">После произведенной диагностики установлено, что: </p>
        <p >{{ optional($assetMaintenance)->notes ?? ''}}</p>
        <p class="bold-underline">Заключение: </p>
        <p >{{ optional($assetMaintenance)->solution ?? ''}}</p>
    </div>
    <div class="signatures">
        <span class="bold-underline">{{ optional($support)->jobtitle ?? '' }}:</span> <span class="right-align">___________________ {{ optional($support)->first_name ?? '' }} {{ optional($support)->last_name ?? '' }}</span>
    </div>
</body>
</html>
