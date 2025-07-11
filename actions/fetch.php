<?php
include '../db.php';

$res = $conn->query("SELECT * FROM people ORDER BY id DESC");
$data = [];
while ($r = $res->fetch_assoc()) {
    $img = $r['photo'] ? "<img src='uploads/{$r['photo']}' width='40' class='rounded-circle'/>" : '';
    $status = "<span class='status-pill'>{$r['status']}</span><br><small>{$r['created_at']}</small>";
    $actions = "
        <button class='btn btn-link p-0 editBtn' data-id='{$r['id']}' title='Edit'><i class='bi bi-pencil-square btn-edit'></i></button>
        <button class='btn btn-link p-0 deleteBtn' data-id='{$r['id']}' title='Delete'><i class='bi bi-trash btn-delete'></i></button>";
    $data[] = [
        'name'        => strtoupper($r['name']),
        'mobile'      => $r['mobile'],
        'email'       => strtoupper($r['email']),
        'role'        => strtoupper($r['role']),
        'designation' => strtoupper($r['designation']),
        'photo'       => $img,
        'status'      => $status,
        'action'      => $actions
    ];
}
echo json_encode(['data'=>$data]);
