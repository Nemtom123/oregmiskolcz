<?php
/**
 * Created by PhpStorm.
 * User: dobia
 * Date: 2018.08.02.
 * Time: 21:29
 */
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #FFFFFF;
        font-family: Arial;
    }
    div.polaroid {
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 25px;
    }

    div.container {
        text-align: center;
        padding: 10px 20px;
    }

    /* Center website */
    .main {
        max-width: 1000px;
        margin: auto;
    }

    h1 {
        font-size: 50px;
        word-break: break-all;
    }

    .row {
        margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row > .column {
        padding: 8px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;

        display: none; /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Content */
    .content {
        background-color: white;
        padding: 10px;
    }

    /* The "show" class is added to the filtered elements */
    .show {
        display: block;
    }

    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #ddd;
    }

    .btn.active {
        background-color: #666;
        color: white;
    }

    .container {
        position: relative;
        width: 100%;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: hidden;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: .3s ease;
        transition: .3s ease;
    }

    .container:hover .overlay {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .text {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>

<br><br><br>
<div id="section3">

    <!--======== box2 ========-->

<div class='container'>
    <div class='animatedParent'>
        <br><br><br>
        <h2 class='animated growIn slowest' style="color: darkgoldenrod">Éttermünk</h2>
    </div>


    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/bg9.JPG" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/best-ideas-for-backyard-wedding-reception-food-photo-design-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/gabf-paired-2016-46-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>Öreg Miskolcz Hotel & Étterem<br>

                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/424A0969-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Ebéd</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/10252007_yang_ming_053_web-1-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem/p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color:darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reggeli</h4>

                </div>
                <div class="modal-body">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/cheap-wedding-buffet-menu-ideasception-for-people-food-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/winter_04-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/Ristorante_bardelli__pavia_location-16-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/bg9.JPG" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/best-ideas-for-backyard-wedding-reception-food-photo-design-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/gabf-paired-2016-46-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>Öreg Miskolcz Hotel & Étterem<br></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/424A0969-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Ebéd</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/10252007_yang_ming_053_web-1-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reggeli</h4>

                </div>
                <div class="modal-body">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/cheap-wedding-buffet-menu-ideasception-for-people-food-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/winter_04-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/Ristorante_bardelli__pavia_location-16-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/bg9.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/best-ideas-for-backyard-wedding-reception-food-photo-design-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/gabf-paired-2016-46-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>Öreg Miskolcz Hotel & Étterem<br>

                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod;color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal8" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/424A0969-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Ebéd</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/10252007_yang_ming_053_web-1-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal9" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reggeli</h4>

                </div>
                <div class="modal-body">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/cheap-wedding-buffet-menu-ideasception-for-people-food-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/winter_04-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/Ristorante_bardelli__pavia_location-16-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem/p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod;color: #FFFFFF" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal10" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/bg9.JPG" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/best-ideas-for-backyard-wedding-reception-food-photo-design-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/gabf-paired-2016-46-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>Öreg Miskolcz Hotel & Étterem<br>

                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: darkgoldenrod; color: white" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal11" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Öreg Miskolcz Hotel & Étterem</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/424A0969-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Ebéd</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/10252007_yang_ming_053_web-1-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Felkészülés</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->

                    </div>
                    <h6>- Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color: darkgoldenrod; color: white">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal12" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reggeli</h4>

                </div>
                <div class="modal-body">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/940x647/cheap-wedding-buffet-menu-ideasception-for-people-food-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/winter_04-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                            <div class="item">
                                <img src="img/940x647/Ristorante_bardelli__pavia_location-16-970x647.jpg" title="Öreg Miskolcz Hotel & Étterem" alt="Smiley face">
                                <div class="carousel-caption"><p>Öreg Miskolcz Hotel & Étterem</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                    </div>
                    <h6>Öreg Miskolcz Hotel & Étterem</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color: red; color: white">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>




    <div class='greyBackground' style="background: white; color: #5f5f5f;">
        <div class='container' >
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery"
                     class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*"
                         class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">
                        Ételeink
                    </div>
                    <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')">Izelítő</button>
                        <button class="btn" onclick="filterSelection('nature')">Egytál ételek</button>
                        <button class="btn" onclick="filterSelection('cars')">Ebéd</button>
                        <button class="btn" onclick="filterSelection('people')">Vacsora</button>
                    </div>
                </div>
            </div>

            <div class='animatedParent'>
                <hr style="color: darkgoldenrod" class='animated fadeInDown slow' />
            </div>
            <div class='animatedParent row article'>
                <h3 class='animated bounceInDown'>Ételeink</h3>

                <div class='col-md-4 column people'>
                    <p class='animated bounceInDown slow'>
                        <div class="thumbnail animated bounceInDown slow">
                            <img src="img/940x647/MG_0001-970x647.jpg" alt="Smiley face" height='940' width="647">
                    <p style="text-align: center"><strong >Csirke falatok</strong></p>
                    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal1"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>
                </p>
            </div>

            <div class='col-md-4 column nature'>
                <p class='animated bounceInUp slow'>
                    <div class="thumbnail animated bounceInUp slow">
                        <img src="img/940x647/best-ideas-for-backyard-wedding-reception-food-photo-design-970x647.jpg" alt="Smiley face" height="940" width="647">
                <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
                <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal2"
                            style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>
            </p>
        </div>
        <div class='col-md-4 column cars'>
            <p class='animated bounceInDown slow'>
                <div class="thumbnail animated bounceInDown slow">
                    <img src="img/940x647/IMG_8904-970x647.jpg" alt="Smiley face" height="940" width="647">
            <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
            <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
            <div class="buttonHolder">
                <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
            </div>
        </div>
        </p>
    </div>
<!--- col-md-4-->
    <div class='col-md-4 column nature'>
        <p class='animated bounceInDown slow'>
            <div class="thumbnail animated bounceInDown slow">
                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
                    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
                        <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
                            <div class="buttonHolder">
                                <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
                            </div>
    </div>
    </p>
</div>
    <!---end-col-md4-->
    <!--- col-md-4-->
    <div class='col-md-4 column people'>
        <p class='animated bounceInDown slow'>
            <div class="thumbnail animated bounceInDown slow">
                <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
        <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
        <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
        <div class="buttonHolder">
            <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
        </div>
    </div>
    </p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column cars'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/424A0969-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column nature'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column people'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column cars'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/424A0969-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column nature'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column people'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Gipszkartonozás</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column cars'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/424A0969-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column nature'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column people'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/041816_SMF_TalentvdToekomst_©FlorisHeuer_009_6M9A8217-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->
<!--- col-md-4-->
<div class='col-md-4 column cars'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="img/940x647/424A0969-970x647.jpg" alt="Smiley face" height="940" width="647">
    <p style="text-align: center"><strong >Öreg Miskolcz Hotel & Étterem</strong></p>
    <p style="text-align: center">Öreg Miskolcz Hotel & Étterem</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal3" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>
<!---end-col-md4-->

</div>

</div>
<script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
<div class="clearfix">
<!-- End Portfolio -->

</div>
