<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceptance-Transfer Act</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .date {
            font-size: 16px;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .signature-block {
            width: 45%;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">KAZ Minerals</div>
            <div class="date"><?php echo date('d.m.Y'); ?></div>
        </header>
        <h1>ACCEPTANCE-TRANSFER ACT №</h1>
        <h2>АКТ приема-передачи №</h2>
        <p>KAZ Minerals Boashakol employee accepts the IT assets / equipment and signs this ACT confirming that the IT assets / equipment listed below have been transferred in full and were operational at the time of transfer.</p>
        <p>Сотрудник KAZ Minerals Borshakol принимает ИТ - активы / оборудование и подписывает настоящий Акт о том, что нижеследующие ИТ -активы / оборудование были переданы полностью и на момент передачи находились в исправном состоянии:</p>
        
        <table>
            <thead>
                <tr>
                    <th>Inventory No. / № инв.</th>
                    <th>Description / Наименование</th>
                    <th>Serial No. / Серийный номер</th>
                    <th>Location / Местоположение</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assets as $asset)
                <tr>
                    <td>{{ $asset->asset_tag }}</td>
                    <td>{{ $asset->name }}</td>
                    <td>{{ $asset->serial }}</td>
                    <td>{{ $asset->location }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <p>1. IT assets / equipment are accepted in operational condition and in full compliance with the above specification.</p>
        <p>1. ИТ-активы / оборудование принимается в исправном состоянии и в полном соответствии с вышеуказанной спецификацией.</p>
        <p>2. This Act is executed in two copies having equal legal effect.</p>
        <p>2. Настоящий Акт составлен в двух экземплярах и имеет одинаковую юридическую силу.</p>
        <p>3. In case of damage / loss of the equipment transferred to me, or in case of improper / inappropriate operation of the equipment, I shall reimburse the caused financial damage in full according to subpar. 2 of par. 8 of Article 123 of the Labour Code of the Republic of Kazakhstan by means of the appropriate amount deduction from the salary. The fact of damage / loss shall be specified in the Act of Faulty Equipment Return or any other similar document. In case of a loss / damage to the equipment transferred to me, the rejection to sign the abovementioned documents shall not exempt me from financial liability.</p>
        <p>3. В случае порчи / утраты переданного мне оборудования, при неправильной / ненадлежащей его эксплуатации, обязуюсь возместить причиненный материальный ущерб в полном объеме в соответствии с пп. 2 пункта 8 статьи 123 Трудового Кодекса Республики Казахстан путем удержания с заработной платы соответствующей суммы. Факт порчи / утраты должен быть зафиксирован в Акте возврата неисправного оборудования или любом другом аналогичном документе. В случае утраты / порчи переданного мне оборудования отказ от подписания вышеуказанных документов не освобождает меня от материальной ответственности.</p>
        
        <div class="signatures">
            <div class="signature-block">
                <p>Equipment transferred by:</p>
                <p>Position: IT Assets Accounting Specialist</p>
                <p>Full name: [Имя]</p>
                <p>Signature: __________________</p>
            </div>
            <div class="signature-block">
                <p>Equipment accepted by:</p>
                <p>Position:  {{ $asset->assignedTo->present()->name()}}</p>
                <p>Full name:  {{ $asset->assignedTo->present()->name()}}</p>
                <p>Signature: __________________</p>
            </div>
        </div>
    </div>
</body>
</html>
