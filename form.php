<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="utf-8"/>
    <title>n3</title>
      <link href="style.css" rel="stylesheet" />
  </head>
  
<body>
  <div class="navform">
            <h2>Form<a id=“down”></a></h2>
            <form action=""
                  method="GET">
                <label>
                    Name:<br />
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
                    Birthday:<br />
                    <input name="field-date"
                           value="2019-08-13"
                           type="text" />
                </label><br />
                <div>
                    Number of limbs: <br />
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
                   	Superpowers:<br />
                    <select name="Sverxsposobnosti" multiple="multiple">
                        <option value="One">Multidimensionality</option>
                        <option value="Two">Bending time</option>
                        <option value="Three">Fundamental immortality </option>
                    </select>
                </div>
                <div>
                    Biography:<br />
                    <textarea name="Biografy"></textarea>
                </div>
                <div>
                    <input type="checkbox" checked="checked">Acquainted with the contract<br />
                </div>
                <p>
                    <input type="submit" value="OK">
                </p>
            </form>
        </div>
</body>
