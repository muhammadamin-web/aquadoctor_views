<form action="{{ route('home.lead', ['locale' => app()->getLocale()]) }}" method="POST" id="leadForm" class="form">
  <div class="container">
    <h2 class="title2 lang">{{ __('app.form_title') }}</h2>
    <p class="subtitle2 lang">{{ __('app.form_subtitle') }}</p>
    <div class="form_box">
      <div class="form_input">
        <div class="form_text_card">
          <p class="form_text lang">{{ __('app.form_name') }}</p> <span>*</span>
        </div>
        <input class="input" type="text" id="name" name="name" required>
      </div>
      <div class="form_input">
        <div class="form_text_card">
          <p class="form_text lang">{{ __('app.form_phone') }}</p> <span>*</span>
        </div>
        <input class="input" type="text" id="phone" name="phone" placeholder="+998 (99) 123-45-67" required>
        <script>
          document.getElementById('phone').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,2})(\d{0,3})(\d{0,2})(\d{0,2})/);
            e.target.value = '+' + (x[1] ? x[1] + ' ' : '') + (x[2] ? '(' + x[2] + ')' : '') + (x[3] ? ' ' + x[3] : '') + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
          });
        </script>
      </div>
      <div class="form_textarea">
        <div class="form_text_card">
          <p class="form_text lang">{{ __('app.form_sms') }}</p> <span>*</span>
        </div>
        <textarea class="textarea" type="text" id="description" name="description" required></textarea>
      </div>
    </div>
    <button type="submit" class="form_link lang">{{ __('app.form_link') }}</button>
  </div>
</form>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('leadForm');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      var formData = new FormData(this);
      fetch("{{ route('home.lead', ['locale' => app()->getLocale()]) }}", {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.message) {
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';

            setTimeout(function() {
              modal.style.display = 'none';
            }, 1500);

            // Formani tozalash
            form.reset();
          }
        })
        .catch(error => console.error('Xatolik:', error));
    });
  });
</script>
<section class="map">
  <h2 class="map_title2 lang">{{ __('app.map_title') }}</h2>
  <p class="map_subtitle2 lang">{{ __('app.map_subtitle') }}</p>
  <div class="googlemap-container">
    <iframe className="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d47999.89348249762!2d69.24749647904332!3d41.36155681294216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8dd40c3075bb%3A0xd08771fc11507c93!2zQXF1YURvY3RvciAtINCl0LjQvNC40Y8g0LTQu9GPINCx0LDRgdGB0LXQudC90L7Qsg!5e0!3m2!1sru!2s!4v1720695673248!5m2!1sru!2s" width="100%" height="450" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
</main>
<footer class="footer" id="footer">
  <div class="container">
    <div class="footer_box">
      <a href="#home" id="home">
        <img src="{{ asset('images/static_img/logo.png') }}" alt="" class="logo" />
      </a>
      <div class="footer_card">
        <h2 class="footer_title lang">{{ __('app.footer_text1') }}</h2>
        <p class="footer_text lang">{{ __('app.footer_text2') }}</p>
      </div>
      <div class="footer_card">
        <h2 class="footer_title lang">{{ __('app.footer_text3') }}</h2>
        <a href="tel:+998880100333" class="footer_text lang">{{ __('app.footer_text4') }}</a>
        <a href="#!" class="footer_text lang">{{ __('app.footer_text5') }}</a>
      </div>
      <div class="footer_card">
        <h2 class="footer_title lang">{{ __('app.footer_text6') }}</h2>
        <a href="#!" class="footer_link lang">{{ __('app.telegram') }}</a>
        <a href="https://www.instagram.com/aquadoctor_uz/" class="footer_link lang">{{ __('app.instagram') }}</a>
        <a href="#!" class="footer_link lang">{{ __('app.facebook') }}</a>
      </div>
    </div>
  </div>
</footer>
<div class="footer_end">
  <p>© 2024 Powered by</p>
  <a href="https://cmdtech.uz"><img src="{{ asset('images/static_img/logo5.png') }}" alt="" /></a>
</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="lang">{{ __('app.modal') }}</p>
  </div>
</div>

<script src="{{ asset('js/slider.js') }}" defer></script>
<script src="{{ asset('js/navbar.js') }}" type="text/javascript" defer></script>
<script src="{{ asset('js/modal.js') }}" defer></script>
<!-- <script src="{{ asset('js/send_telegram.js') }}" ></script> -->