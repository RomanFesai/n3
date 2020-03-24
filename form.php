<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="utf-8"/>
    <title>n3</title>
      <link href="style.css" rel="stylesheet" />
  </head>

<body>
  <div class="navform">
            <h2>Форма<a id=“down”></a></h2>

            <form action="http://example.com"
                  method="GET">
                <label>
                    Имя:<br />
                    <input name="Name"
                           value="" />
                </label><br />
                <label>
                    e-mail:<br />
                    <input name="field-email"
                           value=""
                           type="email" />
                </label><br />

                <label>
                    Дата Рождения:<br />
                    <input name="field-date"
                           value="2019-08-13"
                           type="text" />
                </label><br />
                <div>
                    Кол-во конечностей: <br />
                    <input type="radio"
                           name="Konechnosti"
                           checked="checked"
                           value="2-4"> 2-4 <br />
                    <input type="radio"
                           name="Konechnosti"
                           value="4-8"> 4-8 <br />
                    <input type="radio"
                           name="Konechnosti"
                           value="8 and more"> 8+ <br />
                </div>
                <div>
                    Сверхспособности:<br />
                    <select name="Sverxsposobnosti" multiple="multiple">
                        <option value="One">Многопространственость</option>
                        <option value="Two">Изгибание времени</option>
                        <option value="Three">Фундаментальное бессмертие </option>
                    </select>
                </div>
                <div>
                    Биография:<br />
                    <textarea name="Biografy">Желательно в подробностях</textarea>
                </div>
                <div>
                    <input type="checkbox" checked="checked">C контрактом ознакомлен<br />
                </div>
                <p>
                    <input type="submit" value="Отправить">
                </p>
            </form>
        </div>
</body>
