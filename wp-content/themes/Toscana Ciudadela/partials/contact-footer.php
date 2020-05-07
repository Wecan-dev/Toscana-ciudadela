<section class='main-form' id='contacto'>
  <div class='main-form__address'>
    <h1 class='title'>
      Nuestra
      <span>Ciudadela</span>
    </h1>
    <dl>
      <dt>Dirección</dt>
      <dd>
        <a href='https://www.google.com/maps/place/Toscana+Ciudadela+Residencial/@6.1390098,-75.620371,18z/data=!3m1!4b1!4m5!3m4!1s0x8e46830c1ec24059:0xdd3aab6ba48bd17e!8m2!3d6.1390071!4d-75.6192767?hl=en' target='blank'>Calle 77 Sur Nro 34-35</a>
      </dd>
      <dt>Teléfono</dt>
      <dd>
        <a href='tel:+575202714'>+ 57 520 27 14</a>
      </dd>
      <dt>Celular</dt>
      <dd>
        <a href='https://api.whatsapp.com/send?phone=573148775701'>+ 57 314 877 57 01</a>
      </dd>
    </dl>
  </div>
  <div class='main-form__form'>
    <form method="POST" action="https://nivel.activehosted.com/proc.php" id="_form_9_" class="_form _form_9 _inline-form  _dark" novalidate>
     <h3>
      <span>contáctanos</span>
      ahora
    </h3>

    <div class='row _form-content'>
     <input type="hidden" name="u" value="9" />
     <input type="hidden" name="f" value="9" />
     <input type="hidden" name="s" />
     <input type="hidden" name="c" value="0" />
     <input type="hidden" name="m" value="0" />
     <input type="hidden" name="act" value="sub" />
     <input type="hidden" name="v" value="2" />


     <!-- utm source -->
     <input type="hidden" name="field[10]" value="<?php echo $_GET['utm_source']; ?>"/>
     <!-- utm medium -->
     <input type="hidden" name="field[11]" value="<?php echo $_GET['utm_medium']; ?>"/>
     <!-- utm campaign -->
     <input type="hidden" name="field[12]" value="<?php echo $_GET['utm_campaign']; ?>"/>
     <!-- utm term -->
     <input type="hidden" name="field[13]" value="<?php echo $_GET['utm_term']; ?>"/>
     <!-- referrer url -->
     <input type="hidden" name="field[14]" value="<?php echo $_SERVER['HTTP_REFERER']; ?>"/>

     <div class="_form_element _x86821064 _full_width col-lg-12 col-md-12 col-xs-12" >
      <label class="_form-label">

      </label>
      <div class="_field-wrapper form-group ">
        <input class='form-control' type="text" name="fullname" placeholder="Nombre y Apellido" />
      </div>
    </div>
    <div class="_form_element _x48647240 _full_width col-lg-6 col-md-6 col-xs-12" >
      <label class="_form-label">

      </label>
      <div class="_field-wrapper form-group">
        <input class='form-control' type="text" name="email" placeholder="Correo electrónico" required/>
      </div>
    </div>
    <div class="_form_element _x80842056 _full_width col-lg-6 col-md-6 col-xs-12" >
      <label class="_form-label">

      </label>
      <div class="_field-wrapper form-group">
        <input class='form-control' type="text" name="phone" placeholder="Teléfono" />
      </div>
    </div>
    <div class="_form_element _field1 _full_width col-lg-12 col-md-12 col-xs-12" >
      <label class="_form-label">

      </label>
      <div class="_field-wrapper form-group">
        <input class='form-control' type="text" name="field[1]" value="" placeholder=" Ciudad" />
      </div>
    </div>
    <div class="_form_element _field2 _full_width col-lg-12 col-md-12 col-xs-12" >
      <label class="_form-label form-group">

      </label>
      <div class="_field-wrapper form-group">
        <textarea class='form-control' name="field[2]" placeholder="Mensaje"  ></textarea>
      </div>
    </div>
    <div class="_form_element _field4 _full_width " >
      <div class="_row">
        <label class="_form-label">

        </label>
      </div>
      <input data-autofill="false" type="hidden" name="field[4][]" value="~|">
      <div class="_row _checkbox-radio col-lg-12 col-md-12 col-xs-12">
        <input id="field_4Acepto2" type="checkbox" name="field[4][]" value="Acepto"   >
        <span>
          <label for="field_4Acepto2">
            Acepto  <a style="color: white; border-bottom: 1px solid;" href='<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf' target='blank'>Politicas y Privacidad</a>
          </label>
        </span>
      </div>
    </div>
    <div class="_button-wrapper _full_width col-lg-12 col-md-12 col-xs-12">
      <button id="_form_9_submit" class="_submit btn btn-submit btn-submit-white" type="submit">
        Enviar
      </button>
    </div>
    <div class="_clear-element">
    </div>

    <div class="_form-thank-you" style="display:none;">
    </div>
    <div class="_form-branding" style="display: none;">
      <div class="_marketing-by">
        Marketing por
      </div>
      <a href="http://www.activecampaign.com" class="_logo"></a>
    </div>
  </div>
</form>

<!-- 
    <form>

      <div class='row'>
        <div class='col-lg-12 col-md-12 col-xs-12'>
          <div class='form-group'>
            <input class='form-control' placeholder='Nombre'>
          </div>
        </div>

        <div class='col-lg-6 col-md-6 col-xs-12'>
          <div class='form-group'>
            <input class='form-control' placeholder='Teléfono'>
          </div>
        </div>
        <div class='col-lg-6 col-md-6 col-xs-12'>
          <div class='form-group'>
            <input class='form-control' placeholder='Ciudad'>
          </div>
        </div>
        <div class='col-lg-12 col-md-12 col-xs-12'>
          <div class='form-group'>
            <input class='form-control' placeholder='Correo' type='email'>
          </div>
        </div>
        <div class='col-lg-12 col-md-12 col-xs-12'>
          <div class='form-group mb-0'>
            <textarea class='form-control' placeholder='Mensaje'></textarea>
          </div>
        </div>
        <div class='col-lg-12 col-md-12 col-xs-12'>
          <div class='form-group form-check mb-1'>
            <input class='form-check-input' type='checkbox'>
            <label class='form-check-label'>
              Acepto
              <a href='assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf' target='blank'>Politicas y Privacidad</a>
            </label>
          </div>
        </div>
        <div class='col-lg-12 col-md-12 col-xs-12'>
          <div class='form-group mt-3'>
            <input class='btn btn-submit btn-submit-white' type='submit'>
          </div>
        </div>
      </div>
    </form> --> 
  </div>
</section>