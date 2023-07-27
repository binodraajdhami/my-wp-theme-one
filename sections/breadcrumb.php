<section class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <?php if (get_the_title()) {
                    the_title();
                } else {
                    echo "404";
                } ?>
            </li>
        </ul>
    </div>
</section>