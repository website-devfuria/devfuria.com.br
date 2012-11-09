<?php
defined('DF') or die;
$_SESSION['id'] = uniqid("", true);
?>
<div class="furia-feedback ">
    <form  id="form-feedback" action="#">
        <h6>Feedback</h6>
        <p>Deixe seu feedback, ele é muito importante.</p>
        <p>
            <input type="text" name="contato" id="contato" placeholder="você" class="span6"/>
        </p>
        <p>
            <input type="text" name="email" id="email" placeholder="email" class="span6"/>
        </p>
        <p>
            <textarea name="feedback" id="feedback"  rows="10" cols="10" placeholder="Seu feedback!" class="span6"></textarea>
        </p>
        <p>
            <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'] ?>" name="url" />
            <input type="hidden" value="<?php echo $_SESSION['id']?>" name="id" />
            <input type="submit" value="Enviar" class="btn btn-primary"/>
        </p>
    </form>
</div>