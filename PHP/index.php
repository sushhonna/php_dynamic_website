<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php include 'menu.php'; ?>

    <!-- carousel section -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/nature1.jpg" class="d-block w-100 h-50" alt="nature_1">
            </div>
            <div class="carousel-item">
                <img src="../images/nature2.jpg" class="d-block w-100" alt="nature_2">
            </div>
            <div class="carousel-item">
                <img src="../images/nature3.jpg" class="d-block w-100" alt="nature_3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about us section -->

    <section class="my-3">
        <div class="py-3">
            <h3 class="text-center">About Us</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="../images/sush.jpeg" alt="sushma" class="img-fluid aboutImg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Sushma Honna</h2>
                    <p class="py-2">I am a software developer with ahving 7 years of rich experiance in frond end
                        development skills
                        like html, css, js,ts, php, angular bootstrap etc..
                        I am Angular developer with 7+ years of experience in front end. I worked on Angular 2/4/5/6.
                        Since last 2
                        years I am working on Angular 6, Javascript, Typescript, HTML, CSS, Bootstrap and Highcharts
                        library, I have
                        good experience in bug tracking tools such as JIRA, Version Control tools such as GIT. My area
                        of interest is UI
                        developer with different Javascript framework.
                    </p>
                    <a href="about.php" class="btn btn-success">More details</a>
                </div>
            </div>
        </div>

    </section>

    <section class="my-3">
        <div class="py-3">
            <h3 class="text-center">Our Services</h3>
        </div>

        <div class="container-fluid">
            <div class="row m-auto">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/home1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">First home</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://unsplash.com/s/photos/home" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/home4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">First home</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://unsplash.com/s/photos/home" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/home3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://unsplash.com/s/photos/home" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/home4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://unsplash.com/s/photos/home" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-3">
        <div class="py-3">
            <h2 class="text-center">Our Gallary</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home5.jpg" alt="home5" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home5.jpg" alt="home5" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home5.jpg" alt="home5" class="img-fluid pb-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home6.jpg" alt="home5" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home6.jpg" alt="home5" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="../images/home6.jpg" alt="home5" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>

    <section class="my-3">
        <div class="py-3">
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="connect.php" method="post">
                <div class="form-group my-3">
                    <label>Username</label>
                    <input type="text" name="name" plzceholder="Enter your name." class="form-control">
                </div>
                <div class="form-group my-3">
                    <label>Email ID</label>
                    <input type="text" name="email" plzceholder="Enter your email." class="form-control">
                </div>
                <div class="form-group my-3">
                    <label>Mobile</label>
                    <input type="text" name="mobile" plzceholder="Enter your mobile." class="form-control">
                </div>
                <div class="form-group my-3">
                    <label>Comment</label>
                    <textarea type="text" name="comment" plzceholder="Enter your comments."
                        class="form-control"></textarea>
                </div>
                <div class="my-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>