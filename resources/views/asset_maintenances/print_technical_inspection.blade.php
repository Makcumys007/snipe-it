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
            width: 100px;
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
        <p class="right-align">Утверждаю: Аужанов А.Т.</p>
        <p class="right-align">Начальник отдела информационных технологий</p>
        <p class="right-align">24 августа 2024</p>
        <p>Я, ниже подписавшийся Абылкасов М.А., инженер по промышленной связи, составил настоящий акт о том, что для диагностики представлено следующее оборудование:</p>
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
                <td></td>
                <td>{{ optional($assetMaintenance)->title ?? '' }}</td>
            </tr>
        </table>
        <p>После произведенной диагностики установлено, что: </p>
        <p class="bold-underline">{{ optional($assetMaintenance)->notes ?? ''}}</p>
        <p>Заключение: </p>
        <p class="bold-underline">{{ optional($assetMaintenance)->solution ?? ''}}</p>
    </div>
    <div class="signatures">
        <div><p class="bold-underline">Инженер по промышленной связи: <span class="right-align">___________________ {{ optional($support)->first_name ?? '' }}</span></p></div>
    </div>
</body>
</html>
