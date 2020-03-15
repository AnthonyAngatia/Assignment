<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .top_div {
        color: salmon;
    }
    </style>
</head>

<body>
    <?php 
    
    $name = "Anthony";
    session_start();
    
    ?>
    <div class="top_div">
        <h1>My first heading <?php echo $name; ?> with H1.You can have from h1 to h6</h1>
        <p>Paragraph</p>
        <a href="#faq"><b>Linf to frequently asket questions</b></a>
        <a href=""></a>
        <hr>
    </div>
    <div class="mid_div">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quo error delectus hic doloremque vitae eum
            voluptate
            impedit eligendi eveniet nemo blanditiis sint distinctio magnam, rem ut vel porro harum?Dolorum hic
            necessitatibus reiciendis, nobis eligendi illo veniam ipsum ipsa saepe, praesentium at nesciunt esse eos
            deleniti facere rerum amet fugit quasi? Rem accusamus ratione at voluptate. Molestias, quasi nam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quidem cupiditate minima placeat modi ratione
            laudantium nesciunt tempore optio commodi doloremque doloribus quibusdam natus eveniet fugiat blanditiis
            suscipit eligendi magnam!</p>
        <h3>Images</h3>
        <img src="data:image/jpeg;base64,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"
            alt="img">
        <p><b>Show them how a float left will affect the text below</b></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloremque blanditiis eveniet velit culpa quis
            eaque
            impedit vel eum assumenda. At aliquam eum accusamus iure cumque unde officiis laboriosam tenetur?</p>
    </div>
    <h3>Links</h3>
    <h4>You will be redirected by a link to the below paragraph</h4>
    <p id="faq">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos impedit repellat recusandae
        necessitatibus
        qui officiis delectus, sint saepe doloremque blanditiis illo dolor similique optio asperiores earum corrupti
        placeat dolorum praesentium?Accusamus ipsam cumque consectetur saepe laboriosam. Labore aspernatur magni dicta
        maxime hic dignissimos ullam quis nisi perspiciatis possimus quod incidunt consequuntur quidem exercitationem
        culpa obcaecati, voluptate est recusandae inventore asperiores.</p>
    <img src="Assets/Photo1.jfif" alt="img"> <!-- A grave mistake is to put a / before Assets -->
    <hr>


    <ol type="i">
        <li>First item</li>
        <li>Second item</li>
        <li>Third item</li>
    </ol>
    <p>Here is a list of unordered items:</p>
    <ul style="list-style-type: square">
        <li>First item</li>
        <li>Second item</li>
        <li>Third item</li>
    </ul>
    <hr>
    <h1>Php</h1>
    <h3>Arrays</h3>
    <?php 
    $arr = [1,2,3,4,"mkkm"];
    print_r ($arr);
    ?>
    <h3>Sessions</h3>
    <?php 
    
    $_SESSION['username'] = "Anthony";
    $_SESSION["pas"] = 1234;
    print_r($_SESSION);
    $_SESSION_destroy();
    ?>
    <h1>Bootstrap</h1>
    <button type="button" class="btn btn-primary">Primary</button>



</body>

</html>