<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акт технического осмотра</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header, .footer {
            text-align: right;
        }
        .header img {
            float: left;
            width: 150px;
        }
        .section {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .signatures {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }
        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header"><img class="navbar-brand-img"
                                             src="{{ Storage::disk('public')->url($snipeSettings->logo) }}"
                                             alt="{{ $snipeSettings->site_name }} logo">
        <p>Приложение №4</p>
    </div>

    <div class="section">
        <p class="header">ТОО «Казминерале Бозшаколь»</p>
        <p class="header">Начальник отдела информационных технологий<br>ФИО/подпись ________________/___________</p>
        <p class="header">{{ \App\Helpers\Helper::getFormattedDateObject($assetMaintenance->start_date, 'd.m.Y', false) }}</p>
    </div>

    <div class="section">
    <div class="title">
        Акт технического осмотра
    </div>
        <p>Я, ниже подписавшийся <span class="bold-underline">{{ optional($support)->first_name ?? '' }} {{ optional($support)->last_name ?? '' }}, {{ optional($support)->jobtitle ?? '' }}</span></p>
        <p>Составил настоящий акт о том, что для диагностики представлено следующее оборудование:</p>
        <table>
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
        <p class="bold-underline">После произведенной диагностики установлено, что: </p>
        <p >{{ optional($assetMaintenance)->notes ?? ''}}</p>
        <p class="bold-underline">Заключение: </p>
        <p >{{ optional($assetMaintenance)->solution ?? ''}}</p>
    </div>

    <div class="signature">
        <span class="bold-underline">{{ optional($support)->jobtitle ?? '' }}:</span> <span class="right-align">           ___________________            {{ optional($support)->first_name ?? '' }} {{ optional($support)->last_name ?? '' }}</span>
    </div>
</body>
</html>
