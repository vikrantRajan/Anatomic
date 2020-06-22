
    <h1 class="h2-subhead pb-5 new-padding ">Welcome to the Anatomic <?php echo ($_SESSION['user_role']); ?> Portal, <?php echo ($_SESSION['first_name']); ?></h1>

    <div class="row mx-auto">
        <div class="col-sm-12 col-xl-4 px-0 background-color">
            <a class="header-btn" href="index.php?controller=pages&action=viewAllLabCourses">
                <h1 class="h1-size-3">2</h1>
                <h2 class="h2-size-2">Lab</h2>
                <h2 class="h2-size-2">Courses</h2>
            </a>
        </div>
        <div class="col-sm-12 col-xl-4 px-0 background-color">
            <a class="header-btn" href="index.php?controller=pages&action=createLab">
                <h1 class="h1-size-2">Create</h1>
                <h2 class="h2-size-1">New Lab</h2>
            </a>
        </div>
        <div class="col-sm-12 col-xl-4 px-0 background-color">
            <a class="header-btn" href="index.php?controller=pages&action=viewAllSpecimens">
                <h1 class="h1-size-2">4</h1>
                <h2 class="h2-size-1">Specimens</h2>
            </a>    
        </div>
        </div>
