<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <?php
            $user_name = 'N/A';
            $user_id = 'id';
            $user_avatar = 'http://infyom.com/images/logo/blue_logo_150x150.jpg';
        ?>

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! $user_avatar !!}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>{{ $user_name . "(" .$user_id . ")" }}</p>
                <!-- Status -->
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
