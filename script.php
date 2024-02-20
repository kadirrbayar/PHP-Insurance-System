  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
      function showForm(formType) {
          $(".php-email-form").hide();
          $("." + formType + "-forms").show();
      }
  </script>
  <script>
      $(document).ready(function() {
          $("#trafikFormBtn").click(function (event) {
              event.preventDefault();
              var formData = $("#trafikForm").serialize();
              $.ajax({
                  type: "POST",
                  url: "traffic_post.php",
                  data: formData,
                  success: function (response) {
                      alert(response);
                      $("#trafikForm")[0].reset();
                  },
                  error: function (error) {
                      alert("Hata oluştu: " + error);
                  }
              });
          });
          $("#kaskoFormBtn").click(function (event) {
              event.preventDefault();
              var formData = $("#kaskoForm").serialize();
              $.ajax({
                  type: "POST",
                  url: "kask_post.php",
                  data: formData,
                  success: function (response) {
                      alert(response);
                      $("#kaskoForm")[0].reset();
                  },
                  error: function (error) {
                      alert("Hata oluştu: " + error);
                  }
              });
          });
          $("#depremFormBtn").click(function (event) {
              event.preventDefault();
              var formData = $("#depremForm").serialize();
              $.ajax({
                  type: "POST",
                  url: "earthquake_post.php",
                  data: formData,
                  success: function (response) {
                      alert(response);
                      $("#depremForm")[0].reset();
                  },
                  error: function (error) {
                      alert("Hata oluştu: " + error);
                  }
              });
          });
          $("#contactFormBtn").click(function (event) {
              event.preventDefault();
              var formData = $("#contactForm").serialize();
              $.ajax({
                  type: "POST",
                  url: "contact_post.php",
                  data: formData,
                  success: function (response) {
                      alert(response);
                      $("#contactForm")[0].reset();
                  },
                  error: function (error) {
                      alert("Hata oluştu: " + error);
                  }
              });
          });
      });

  </script>