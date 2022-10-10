<?php  include('..//php/header.php') ?>



<div class="container">

<h4 class="center-align section">Formulario de contacto</h4>
<h5 class="center-align section">Nos sentimos emocionados por aclarar cualquier duda que tengas en el menor tiempo posible.</h5>

<div class="row">
    <form class="col s12 ">

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Tu nombre</label>
            </div>



            <div class="row">
                <div class="input-field col s6">
                    <i class="large material-icons prefix">contact_mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>



            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="large material-icons prefix">comment</i>
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Mensaje</label>
                        </div>
                    </div>
                </form>
            </div>
            <button class="btn waves-effect waves-light center-align" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
        <!--Row-->
       
    </form>
    <!--Form-->

</div><!--Row-->
</div><!--Main container-->















<?php  include('..//php/footer.php') ?>