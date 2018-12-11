<!doctype html>
<html lang="fr">
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <div id="carousel-main" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-main" data-slide-to="1"></li>
            <li data-target="#carousel-main" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/img1.jpg" alt="YES">
            </div>
            <div class="carousel-item">
                <img src="assets/images/img2.jpg" alt="YESS">
            </div>
            <div class="carousel-item">
                <img src="assets/images/img3.png" alt="YESSS">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-main" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carousel-main" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <h1 class="titles-home">Les News</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mr-5" style="width: 33rem;">
                <img class="card-img-top" src="https://picsum.photos/300/200" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias aut cum cumque est eum, iste mollitia, nesciunt non optio qui ratione rerum saepe sed sunt temporibus ullam, velit.</p>
                </div>
            </div>
            <div class="card" style="width: 33rem;">
                <img class="card-img-top" src="https://picsum.photos/300/200" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloribus eaque esse eveniet voluptatem? Aliquam dolorum, tenetur. Corporis cupiditate doloremque, ducimus eaque eius excepturi id, laudantium numquam quia sapiente vel.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="titles-home"> Le monstre de la semaine</h2>
    <div class="container">
        <div class="row">
            <h2 class="ml-5 mt-4" style="width: 100%;">La Bête</h2>
            <div class="card ml-5" style="width: 22rem;">
                <img class="card-img-top" src="https://picsum.photos/200/200" alt="Card image cap" >
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, asperiores atque culpa enim harum ipsa provident quaerat repudiandae! Suscipit?</p>
                </div>
            </div>
            <div class="col-md-6 ml-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum excepturi officiis quae. Facilis laborum odio quidem reprehenderit sapiente sint, soluta tenetur vel veniam voluptatibus. Aliquam, animi culpa delectus earum eligendi ex facere itaque laborum magni, maiores nulla odit perferendis perspiciatis possimus quae quia quod quos reprehenderit, soluta totam? Animi aspernatur aut autem debitis dignissimos doloribus enim est id illo in incidunt maiores modi nesciunt nostrum optio porro quaerat quas rem, saepe sit suscipit tempore, unde veniam vitae voluptatem. Ad atque deserunt ea expedita id labore quod quos voluptatibus. A aliquid animi deleniti eligendi fugit nam placeat porro quo rem velit. Consectetur corporis dolorem id nesciunt recusandae sit voluptatem! A aliquam aperiam architecto beatae consequatur corporis, cupiditate doloribus ea earum eos expedita hic ipsum iusto magni maxime minima necessitatibus nobis placeat possimus provident quae quasi qui quo ratione sapiente sequi similique sint sit vel veniam vero vitae voluptas voluptatem? Alias assumenda cum deleniti deserunt dolor enim et facilis fugit harum in incidunt laborum minus, repellat sapiente sequi tempore, veniam? Debitis enim facere natus.</p>
                <button type="button" class="btn btn-primary float-right">Parcourir la Flocopedie</button>
            </div>
        </div>
    </div>


    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
