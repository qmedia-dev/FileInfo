<?php

$units = array(
    'gb' => array('size' => 1073741824, 'label' => 'ГБ'),
    'mb' => array('size' => 1048576,    'label' => 'МБ'),
    'kb' => array('size' => 1024,       'label' => 'КБ'),
    'b'  => array('size' => 0,          'label' => 'байт')
);

$file_path = MODX_BASE_PATH . $file;
$path_parts = pathinfo($file_path);
$template = isset($tpl) ? $tpl : '[+basename+] ([+size+])';

$dirname    = $path_parts['dirname'] ? $path_parts['dirname'] : '';
$basename   = pathinfo($file)['basename'] ? pathinfo($file)['basename'] : '';
$extension  = $path_parts['extension'] ? $path_parts['extension'] : '';
$filename   = $path_parts['filename'] ? $path_parts['filename'] : '';

$size = is_file($file_path) ? filesize($file_path) : 0;

if ($size > 0) {
    foreach ($units as $key => $properties) {
        if ($size >= $properties['size']) {
            $unit = $key;
            break;
        }
    }
    $size = $unit != 'b' ? $size / $units[$unit]['size'] : $size;
} else {
    $unit = 'b';
}
$size = round($size, 2) . '&nbsp;' . $units[$unit]['label'];

$placeholders = array(
    'file' => $file,
    'dirname' => $dirname,
    'basename' => $basename,
    'filename' => $filename,
    'extension' => $extension,
    'size' => $size
);

return $modx->parseText($template, $placeholders, '[+', '+]');
