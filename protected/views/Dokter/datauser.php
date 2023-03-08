<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Yii::app()->request->baseUrl; ?>/users">
                        <i class="fa fa-th"></i>
                        <span>Data User </span>
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id="main-content">
    <section class="wrapper">
        <section class="wrapper">
            <div class="table-agile-info">
                <!---728x90--->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Responsive Table
                    </div>
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                            </select>
                            <button class="btn btn-sm btn-default">Apply</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>Id User</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Akses Token</th>
                                    <th>Role</th>
                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $u) : ?>
                                    <tr>
                                        <td><?= $u['id_user'] ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td><?= $u['password']; ?></span></td>
                                        <td><?= $u['status']; ?></span></td>
                                        <td><?= $u['accessToken']; ?></span></td>
                                        <td><?= $u['role']; ?></span></td>

                                        <td>
                                            <a href="#" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">

                            <div class="col-sm-5 text-center">
                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                            </div>
                            <div class="col-sm-7 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
                <!---728x90--->
            </div>
        </section>
    </section>