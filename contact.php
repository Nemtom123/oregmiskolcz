<?php
/**
 * Created by PhpStorm.
 * User: dobia
 * Date: 2018.12.28.
 * Time: 0:26
 */
?>
<div id="get-touch">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="get-touch-heading">
                    <h2>Küldjön nekünk üzenetet!</h2>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div id="sendmessage"></div>
                <div id="errormessage"></div>

                <form action="" method="post" role="form" class="form contactForm">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Név" data-rule="minlen:4"
                                   data-msg="Minimum 4 karaktert kell beírni" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email"
                                   data-msg="Rossz E-mail cím" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tárgy" data-rule="minlen:4"
                                   data-msg="Kérem minimum 8 karaktert adjon meg" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Kérem írjon üzenetet"
                          placeholder="Üzenet"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="submit">
                        <button class="btn btn-default" type="submit">Küldés</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
