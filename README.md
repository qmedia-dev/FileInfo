# FileInfo

_Сниппет для Evolution CMS_

Выводит информацию о файле.

Пример вызова:

```
[[FileInfo?
&file=`assets/files/test-file.pdf`
&tpl=`<a href="[+file.path+]" download>[+file.basename+] ([+file.size+])</a>`]]
```

## Параметры

### file

Путь к файлу<br>
_указывается от корня сайта_

### tpl

Формат вывода информации о файле

**Плейсхолдеры:**

- `[+file.path+]` -- **путь к файлу** : assets/files/test-file.pdf
- `[+file.basename+]` -- **имя файла** (с расширением) : test-file.pdf
- `[+file.name+]` -- **имя файла** (без расширения) : test-file
- `[+file.extension+]` -- **расширение файла** : pdf
- `[+file.size+]` -- **размер файла**<br>

**Единицы измерения:**

- **1 - 1024 байт** : 999 байт
- **1 - 1024 килобайт** : 999.99 КБ
- **1 - 1024 мегабайт** : 999.99 МБ
- **1 - 1024 гигабайт** : 999.99 ГБ
