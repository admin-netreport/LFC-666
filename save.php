<?php
$data = file_get_contents('php://input');
if (!empty($data)) {
    $file = 'shots/' . date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.jpg';
    file_put_contents($file, $data);
    echo 'ok';
} else {
    echo 'empty';
}
?>