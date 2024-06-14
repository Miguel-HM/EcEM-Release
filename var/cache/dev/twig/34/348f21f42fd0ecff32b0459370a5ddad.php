<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* landing/_testimonials.html copycat.twig */
class __TwigTemplate_d412a4ccba121381e5a4b5ba802ecf4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/_testimonials.html copycat.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/_testimonials.html copycat.twig"));

        // line 1
        echo "<div class=\"testimonials\">
  <h2>Testimonials Carousel - Cards Comments</h2>
  <div class=\"swiper mySwiper\">
      <div class=\"swiper-wrapper\">
          <!-- Slides -->
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Uno<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Dos<br />
                          <span> Engineer </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Tres<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Númelo Cuatlo<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
<script>
  var swiper = new Swiper(\".mySwiper\", {
  effect: \"cards\",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: \"3\",
  cardsEffect: {
    rotate: 0,
    stretch: 25,
    depth: 50,
    modifier: 4,
    slideShadows: false
  },
  keyboard: {
    enabled: true
  },
  mousewheel: {
    thresholdDelta: 70
  },
  initialSlide: 0,
  on: {
    click(event) {
      swiper.slideTo(this.clickedIndex);
    }
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    }
  },
  /*autoplay: {
    delay: 5000,
    disableOnInteraction: false
  }*/
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "landing/_testimonials.html copycat.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testimonials\">
  <h2>Testimonials Carousel - Cards Comments</h2>
  <div class=\"swiper mySwiper\">
      <div class=\"swiper-wrapper\">
          <!-- Slides -->
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Uno<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Dos<br />
                          <span> Engineer </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Número Tres<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Númelo Cuatlo<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
<script>
  var swiper = new Swiper(\".mySwiper\", {
  effect: \"cards\",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: \"3\",
  cardsEffect: {
    rotate: 0,
    stretch: 25,
    depth: 50,
    modifier: 4,
    slideShadows: false
  },
  keyboard: {
    enabled: true
  },
  mousewheel: {
    thresholdDelta: 70
  },
  initialSlide: 0,
  on: {
    click(event) {
      swiper.slideTo(this.clickedIndex);
    }
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    }
  },
  /*autoplay: {
    delay: 5000,
    disableOnInteraction: false
  }*/
});
</script>", "landing/_testimonials.html copycat.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\landing\\_testimonials.html copycat.twig");
    }
}
