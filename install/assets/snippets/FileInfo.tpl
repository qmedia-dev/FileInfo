<?php
/**
 * FileInfo
 *
 * Выводит информацию о файле
 *
 * @category        snippet
 * @version         1.0.0
 * @author          igor <igor@qmedia.by>
 * @reportissues    https://github.com/qmedia-dev/FileInfo

 * @internal    @properties
 * @internal    @modx_category Qmedia
 * @internal    @installset base, sample
 
 */
 
/**
 * FileInfo
 *
 * Выводит информацию о файле
 *
 * @category        snippet
 * @version         1.0.0
 * @author          igor <igor@qmedia.by>
 * @reportissues    https://github.com/qmedia-dev/FileInfo

 */

/* Usage -------------------------------
[[Fileinfo?
&file=`assets/files/test-file.pdf`
&tpl=`<a href="[+file+]" download>[+basename+] ([+size+])</a>`
]]
---------------------------------------- */
return require MODX_BASE_PATH . 'assets/snippets/FileInfo/snippet.FileInfo.php';