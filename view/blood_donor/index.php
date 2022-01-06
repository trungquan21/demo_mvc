<?php
//file hiển thị thông báo lỗi
require_once 'view/commons/message.php';
?>

<a href="index.php?controller=blood_donor&action=add">
    Thêm mới nguoi hien mau
</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Sex</th>
        <th>Age</th>
    </tr>
    <?php if (!empty($books)): ?>
        <?php foreach ($books AS $book) : ?>
            <tr>
                <td><?php echo $book['bd_id'] ?></td>
                <td><?php echo $book['bd_name'] ?></td>
                <td><?php echo $book['bd_sex'] ?></td>
                <td><?php echo $book['bd_age'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=blood_donor&action=detail&id=" . $book['bd_id'];
                    $urlEdit =
                        "index.php?controller=blood_donor&action=edit&id=" . $book['bd_id'];
                    $urlDelete =
                        "index.php?controller=blood_donor&action=delete&id=" . $book['bd_id'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>