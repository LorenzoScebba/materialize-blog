<!DOCTYPE html>
<html>
<head>
    <title>Example Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <div class="flow-text">I am Flow Text</div>

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">
                    This is a collapsible-header
                    <!--<span class="new badge"></span>-->
                </div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <div class="flow-text">This is a carousel</div>
        <div class="carousel">
            <a class="carousel-item" href="#" target=""><img src="img/nature-1.jpeg"></a>
            <a class="carousel-item" href="#" target=""><img src="img/nature-2.jpeg"></a>
            <a class="carousel-item" href="#" target=""><img src="img/nature-3.jpeg "></a>
        </div>

        <div class="row">
            <div class="col s12 m6 l6">
                <!--Card1-->
                <div class="card red darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <!--Card2-->
                <div class="card red darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hide-on-small-only">
            <h4>Just some lorem ipsum</h4>

            <p class="flow-text" style="font-size: 1.2em;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a felis ut nisl commodo fermentum. Aenean
                nec
                enim ut nunc varius sagittis ac nec justo. Morbi vulputate luctus urna sed aliquam. Integer luctus, nibh
                vel
                cursus lacinia, dolor dolor volutpat erat, ac fermentum lorem sapien vitae mi. Cras tempor elit nec
                porta
                vulputate. Maecenas placerat vehicula ligula sit amet consectetur. Nam ultricies magna velit, non mollis
                justo efficitur nec. Sed tempus mauris nunc, ut egestas lorem pretium et.

                Vivamus viverra, tortor et interdum tempor, neque velit malesuada odio, in lobortis lacus velit ut arcu.
                Phasellus arcu enim, suscipit non interdum egestas, ornare ac purus. Nulla facilisi. Praesent sit amet
                libero in ex malesuada ullamcorper vel ac risus. Aenean consequat dapibus magna et volutpat. Nullam sed
                mauris eros. Aliquam eu mi sed erat mattis tincidunt.

                Duis vulputate libero blandit, gravida massa eu, posuere lorem. Etiam vel ex id massa iaculis elementum
                eget
                at purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Praesent aliquam tincidunt blandit. Duis hendrerit laoreet ultricies. Integer volutpat at magna eget
                lacinia. Mauris venenatis, libero eu elementum venenatis, risus ipsum ullamcorper sem, bibendum auctor
                eros
                massa fermentum turpis. Phasellus a eleifend nisi. Quisque suscipit, sem a volutpat porta, est urna
                ullamcorper eros, sed fermentum sem nisi ac nibh. Aliquam viverra massa sed elit maximus, at dapibus
                orci
                tristique. In sit amet facilisis lacus, vel finibus leo. Curabitur ornare accumsan erat, et finibus nunc
                malesuada a. Etiam tempus nec tortor mattis auctor.

                Fusce sed nisl vitae metus pellentesque egestas. Duis quis cursus lectus, sit amet efficitur ipsum.
                Mauris
                at sem non dolor posuere dapibus. Etiam elementum leo ligula, eu viverra metus porta et. Nulla volutpat
                pulvinar interdum. Aenean nec imperdiet diam. Maecenas venenatis nisi sit amet justo laoreet imperdiet.
                Aenean ac nisl sagittis, mattis leo aliquam, auctor purus. Cras at lacinia dolor. Praesent nisl tellus,
                tincidunt ut lacus eu, ullamcorper elementum dolor. Mauris quis arcu quis velit sollicitudin mattis.
                Suspendisse accumsan dapibus semper. Sed tempor, ipsum eu vestibulum dignissim, leo urna pharetra erat,
                ac
                dignissim ante velit a erat. Fusce hendrerit dolor mollis turpis dapibus sollicitudin. Vestibulum
                egestas
                rutrum tempor.

                Mauris pulvinar, tellus eget finibus elementum, nunc mi rhoncus arcu, vel ultricies elit sapien quis
                massa.
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur
                euismod,
                lacus at elementum tincidunt, ante leo aliquam nisl, feugiat ullamcorper ligula erat eget nulla. Cras eu
                lacus dolor. Phasellus mattis, diam eget cursus luctus, est erat vestibulum mauris, a aliquet sem ante
                non
                purus. Nulla et eros sit amet erat commodo ultrices. Phasellus sed leo mauris. Quisque condimentum
                suscipit
                fringilla. Curabitur ante leo, maximus in dignissim sit amet, tempor id eros. Nunc molestie velit non
                vulputate aliquam.
            </p>
        </div>
    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        