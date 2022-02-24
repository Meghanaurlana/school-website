<?php
$insert = false;
if (isset($_POST['name'])) {
    $server =  "localhost";
    $username = "root";
    $password = "";

    $con  =  mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database  failed due to" .
            mysqli_connect_error());
    }
    //echo "succcesss";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $desc  = $_POST['desc'];

    $sql = "INSERT INTO `schooling`.`schooling` (`name`, `age`,`gender`,`email`, `contact`, `other`) VALUES('$name','$age',
 '$gender', '$email', '$contact','$desc')";


    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR; $sql <br> $con->error";
        $not_insert = true;
    }
    $con->close();
}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>school website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo0.jpg" alt="school" />
            </a>
            <ul class="menu">
                <li><a href="#">home</a></li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">admissions</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">pre schooling</a></li>
                        <li><a class="dropdown-item" href="#">primary</a></li>
                        <li><a class="dropdown-item" href="#">Secondary</a></li>

                    </ul>
                </li>
                <li><a href="#news">news</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contactus">contact us</a></li>
            </ul>
        </nav>
    </section>


    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/22.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/03.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/04.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <section>
        <div class="welcome">

            <div class="left">
                <img src="images/5.jpg" alt="image">
            </div>

            <div class="right">
                <h1>HIGH SCHOOL</h1>
                <h5>Our Vision to Empower your Child to be Creative, Curious, Independent, Resilient and Successful are Stronger than Ever! In the Last 4 years, we gave our Students the required pathway to achieve their Dreams. And We will continue to do so!
                    We give the Inspirational School Education and the School Experience that they will recall with Warmth and Fondness their entire life. We not only try to provide them with World Class Education, we teach them Life Skills to survive on their Own in the stressful times. Come Join Us in the Path of Enlightenment!
                    Our Vision - Inspiring Young Minds Through</h5>

            </div>

        </div>
    </section>

    <section>
        <div class="second">
            <h5>A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. Most countries have systems of formal education, which is sometimes compulsory. In these systems, students progress through a series of schools
                Education is an essential part of our lives. We are nothing without knowledge, and education is what separates us from others. The main step to acquiring education is enrolling oneself in a school. School serves as the first learning place for most of the people. Similarly, it is the first spark in receiving an education. In this essay on my school, I will tell you why I love my school and what my school has taught me.
                We have all been to school and we have loved each and every moment we have spent over there as those were the building blocks of our lives. A school is a place where students are taught the fundamentals of life, as well as how to grow and survive in life. It instils in us values and principles that serve as the foundation for a child’s development.
                My school is my second home where I spend most of my time. Above all, it gives me a platform to do better in life and also builds my personality. I feel blessed to study in one of the most prestigious and esteemed schools in the city. In addition, my school has a lot of assets which makes me feel fortunate to be a part of it. Let us look at the essay on my school written below
            </h5>
        </div>
    </section>


    <section><a name="news">
            <div class="newss">
                <h1>NEWS</h1>
                <h6>The administration and staff are committed to providing a challenging and supportive learning environment where all students can succeed and reach their full potential. Every member participates in cycles of continuous learning and improvement that includes establishing high expectations, goal setting, planning, action and reflection. We develop a culture of excellence that includes a robust instructional program aligned to the Common Core State Standards (CCSS) with a focus on implementing Balanced Literacy through Reading and Writing Workshop, as well as by building language, literacy and competency across all subject areas. This includes the integration of science, technology, engineering and math (STEM) into the curriculum and by establishing a strong culture and climate.
                    To this end, we seek to develop well-rounded students who exemplify health, wellness and character development using our core schoolwide expectations and values (Be Safe, Be Respectful, Be Responsible and Be Mindful).
                </h6>
            </div>
        </a>
    </section>

    <section><a name="about">
            <div class="third">
                <h1>ABOUT</h1>
                <h6>The administration and staff are committed to providing a challenging and supportive learning environment where all students can succeed and reach their full potential. Every member participates in cycles of continuous learning and improvement that includes establishing high expectations, goal setting, planning, action and reflection. We develop a culture of excellence that includes a robust instructional program aligned to the Common Core State Standards (CCSS) with a focus on implementing Balanced Literacy through Reading and Writing Workshop, as well as by building language, literacy and competency across all subject areas. This includes the integration of science, technology, engineering and math (STEM) into the curriculum and by establishing a strong culture and climate.
                    To this end, we seek to develop well-rounded students who exemplify health, wellness and character development using our core schoolwide expectations and values (Be Safe, Be Respectful, Be Responsible and Be Mindful).
                    Through discovery, exploration, innovation, and creative expression through Arts integration and after school enrichment opportunities, students receive rich, extended learning opportunities while building a positive school culture where every member feels valued and respected.
                    Through coaching, collaboration and building professional learning communities, we offer staff professional development training to build teachers capacity to improve instructional practices and to accelerate student achievement.
                    Finally, we support a community schools approach that organizes and maximizes resources from the school and community based partnerships to ensure every student thrives and to support student success in alignment with the school priorities.
                </h6>
            </div>
        </a>
    </section>


    <section>
        <a name="contactus">
            <div>
                <img class="bg" src="images/1.jpg" alt="trip">

                <div class="contactus">
                    <h3>contact us</h3>
                    <?php
                    if ($insert == true) {
                        echo "<p class = 'sub'> thanks for contacting us</p>";
                    }
                    ?>

                    <form action="index.php" method="post">

                        <div class="row">

                            <div class="input">
                                <input type="text" name="name" id="name" placeholder="Enter your name">
                            </div>

                            <div class="input">
                                <input type="text" name="age" id="age" placeholder="Enter your age">
                            </div>

                        </div>

                        <div class="input">
                            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                        </div>

                        <div class="input">
                            <input type="email" name="email" id="name" placeholder="Enter your email">
                        </div>

                        <div class="input">
                            <input type="number" name="contact" id="contact" placeholder="Enter your number">

                        </div>

                        <div class="input">
                            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="enter any other information"></textarea>
                        </div>

                        <button class="btn">submit</button>
                        <p>
                            the school
                            Near Bheemili Y Junction,Towards Bheemili, Vellanki Boddapalem (V), Anandapuram (M), Visakhapatnam- 531 163. AP.
                        </p>
                    </form>
                </div>
            </div>
        </a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>