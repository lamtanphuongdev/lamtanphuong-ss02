<div>Quản Lý Người dùng</div>
<hr>
<div>Người dùng mới</div>
<div>
    <form name="newuser" id="formreg" method="post" action='./element_LTP/mUser/userAct.php?reqact=addnew'>
        <table>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="hoten" /></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    Nam<input type="radio" name="gioitinh" value="1" checked="true" />
                    Nữ<input type="radio" name="gioitinh" value="0" />
                </td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="ngaysinh" /></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" /></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="tel" name="dienthoai" /></td>
            </tr>
            <tr>
                <td> <input type="submit" id="btnsubmit" value="Tạo mới" /></td>
                <td> <input type="reset" value="Làm lại" /> <b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
    <hr />
    <?php
    require './element_LTP/mod/userCls.php'; // gọi thư viên để sử dụng được lớp userCls
    $userObj = new user();
    $list_user = $userObj->UserGetAll(); // trả về danh sách đối tượng user
    $l = count($list_user);
    ?>
    <div class="title_user">Danh sách người dùng</div>
    <div class="content_user">
        Trong bảng có: <b><?php echo $l; ?></b>

        <table border="solid">
            <thead> <!-- dòng tiêu đề -->
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Ngày đăng ký</th>
                <th>Hoạt động</th>
                <th>Chức năng</th>
            </thead>
            <?php
            //trong danh sách trả về có dữ liệu
            if ($l > 0) {
                foreach ($list_user as $u) {
            ?>
                    <tr>
                        <td><?php echo $u->iduser; ?></td>
                        <td><?php echo $u->username; ?></td>
                        <td><?php echo $u->password; ?></td>
                        <td><?php echo $u->hoten; ?></td>
                        <td align="center">
                            <?php if ($u->gioitinh == 1) {
                            ?>
                                <img src="./img_LTP/boy.png" class="iconimg">
                            <?php
                            } else {
                            ?>
                                <img src="./img_LTP/girl.png" class="iconimg">
                            <?php
                            } ?>

                        </td>
                        <td><?php echo $u->ngaysinh; ?></td>
                        <td><?php echo $u->diachi; ?></td>
                        <td><?php echo $u->dienthoai; ?></td>
                        <td><?php echo $u->ngaydangky; ?></td>
                        <td align="center">
                            <?php if ($u->setlock == 1) {
                            ?>
                                <a href="./element_LTP/mUser/userAct.php?reqact=setlock&iduser=<?php echo $u->iduser; ?>
                                                                                &setlock=<?php echo $u->setlock; ?>">
                                    <!-- click vô hình để xoá -->
                                    <img src="./img_LTP/unlock.png" class="iconimg">
                                </a>

                            <?php
                            } else {
                            ?>
                                <a href="./element_LTP/mUser/userAct.php?reqact=setlock&iduser=<?php echo $u->iduser; ?>
                                                                                &setlock=<?php echo $u->setlock; ?>">
                                    <!-- click vô hình để xoá -->
                                    <img src="./img_LTP/lock.png" class="iconimg">
                                </a>
                            <?php
                            } ?>

                        </td>
                        <td align="center">
                            <a href="./element_LTP/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $u->iduser; ?>">
                                <!-- click vô hình để xoá -->
                                <img src="./img_LTP/idelete.png" class="iconimg">
                            </a>

                            <!-- gọi về trang index.php và yêu cầu trang update user và truyền iduser -->
                            <a href="index.php?req=updateuser&iduser=<?php echo $u->iduser; ?>">
                                <img src="./img_LTP/update.png" class="iconimg">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>



</div>