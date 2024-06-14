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

/* landing/_testimonials.html.twig */
class __TwigTemplate_fde915c1f675759464362ef0ef9b2295 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/_testimonials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/_testimonials.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "<!--<div class=\"testimonials\">
  <h2>My students say...</h2>
  <div class=\"swiper mySwiper\">
      <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/47.png"), "html", null, true);
        echo "\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/21"), "html", null, true);
        echo "\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/3.png"), "html", null, true);
        echo "\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/38.png"), "html", null, true);
        echo "\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Númelo Cuatlo<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/48.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Cinco<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/50.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Seis<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/10.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Siete<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/45.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Ocho<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
      </div>
  </div>
</div> -->
<h2>What my students say about me</h2>
<div class=\"swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden\">
    <div class=\"swiper-wrapper\" id=\"swiper-wrapper-61097471010e2b3f25d\" aria-live=\"off\" style=\"transition-duration: 0ms; transform: translate3d(-7615px, 0px, 0px); transition-delay: 0ms;\">
      <div class=\"swiper-slide swiper-slide-prev\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"1 / 9\">
        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/45.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Uno<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide swiper-slide-active\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"2 / 9\">
        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/40.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Dos<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque niasfrshbdfFASJ  HAGSRFDFGHG asdfREasdjhatgsfawsdrfs asd fasdf asdf asdf asdfasdf asdfasdasdf af sdf asdhil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide swiper-slide-next\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"3 / 9\">
        <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/35.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Tres<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"4 / 9\">
        <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/30.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Cuatro<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"5 / 9\">
        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/25.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Cinco<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"6 / 9\">
        <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/50.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Seis<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"7 / 9\">
        <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/5.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Siete<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"8 / 9\">
        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/52.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Ocho<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"9 / 9\">
        <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\">
        <h5>Número Nueve<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
    </div>
    <!--
    <div class=\"swiper-button-next\" tabindex=\"0\" role=\"button\" aria-label=\"Next slide\" aria-controls=\"swiper-wrapper-61097471010e2b3f25d\" aria-disabled=\"false\"></div>
    <div class=\"swiper-button-prev\" tabindex=\"0\" role=\"button\" aria-label=\"Previous slide\" aria-controls=\"swiper-wrapper-61097471010e2b3f25d\" aria-disabled=\"false\"></div>
    <div class=\"swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal\"><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 1\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 2\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 3\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 4\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 5\"></span><span class=\"swiper-pagination-bullet swiper-pagination-bullet-active\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 6\" aria-current=\"true\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 7\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 8\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 9\"></span></div>
    -->
    <div class=\"autoplay-progress\">
      <svg viewBox=\"0 0 48 48\" style=\"--progress: 0.9319999999999999;\">
        <circle cx=\"24\" cy=\"24\" r=\"20\"></circle>
      </svg>
      <span>1s</span>
    </div>
  <span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
<script>
    const progressCircle = document.querySelector(\".autoplay-progress svg\");
    const progressContent = document.querySelector(\".autoplay-progress span\");
    var swiper = new Swiper(\".mySwiper\", {
      spaceBetween: 30,
      centeredSlides: false,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        reverseDirection: true
      },
      pagination: {
        el: \".swiper-pagination\",
        clickable: true
      },
      navigation: {
        nextEl: \".swiper-button-next\",
        prevEl: \".swiper-button-prev\"
      },
      mousewheel: {
        thresholdDelta: 70,
        invert: true
      },
      initialSlide: 3,
      slidesPerView: 3,
      loop: true,
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty(\"--progress\", 1 - progress);
          progressContent.textContent = `\${Math.ceil(time / 1000)}s`;
        }
      }
    });
</script>

<!--  
<script>
  var swiper = new Swiper(\".mySwiper\", {
  effect: \"coverflow\",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: \"auto\",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 8,
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
</script>-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/swiper.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "landing/_testimonials.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  374 => 2,  364 => 1,  259 => 167,  249 => 160,  239 => 153,  229 => 146,  219 => 139,  209 => 132,  199 => 125,  189 => 118,  179 => 111,  159 => 94,  144 => 82,  129 => 70,  114 => 58,  99 => 46,  84 => 34,  69 => 22,  54 => 10,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/swiper.css') }}\">
{% endblock %}
<!--<div class=\"testimonials\">
  <h2>My students say...</h2>
  <div class=\"swiper mySwiper\">
      <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
              <div class=\"card text-center\">
                  <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/47.png') }}\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/21') }}\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/3.png') }}\" alt=\"\">
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
                  <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/38.png') }}\" alt=\"\">
                  <div class=\"card-body\">
                      <h5>Númelo Cuatlo<br />
                          <span> Project Manager </span>
                      </h5>
                      <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                  </div>
              </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/48.png') }}\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Cinco<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/50.png') }}\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Seis<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/10.png') }}\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Siete<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"card text-center\">
                <img class=\"card-img-top\" src=\"{{ asset('/img/avatar/45.png') }}\" alt=\"\">
                <div class=\"card-body\">
                    <h5>Número Ocho<br />
                        <span> Project Manager </span>
                    </h5>
                    <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                        impedit quo minus id quod maxime placeat ” </p>
                </div>
            </div>
          </div>
      </div>
  </div>
</div> -->
<h2>What my students say about me</h2>
<div class=\"swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden\">
    <div class=\"swiper-wrapper\" id=\"swiper-wrapper-61097471010e2b3f25d\" aria-live=\"off\" style=\"transition-duration: 0ms; transform: translate3d(-7615px, 0px, 0px); transition-delay: 0ms;\">
      <div class=\"swiper-slide swiper-slide-prev\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"1 / 9\">
        <img src=\"{{ asset('/img/avatar/45.png') }}\" alt=\"\">
        <h5>Número Uno<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide swiper-slide-active\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"2 / 9\">
        <img src=\"{{ asset('/img/avatar/40.png') }}\" alt=\"\">
        <h5>Número Dos<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque niasfrshbdfFASJ  HAGSRFDFGHG asdfREasdjhatgsfawsdrfs asd fasdf asdf asdf asdfasdf asdfasdasdf af sdf asdhil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide swiper-slide-next\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"3 / 9\">
        <img src=\"{{ asset('/img/avatar/35.png') }}\" alt=\"\">
        <h5>Número Tres<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"4 / 9\">
        <img src=\"{{ asset('/img/avatar/30.png') }}\" alt=\"\">
        <h5>Número Cuatro<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"5 / 9\">
        <img src=\"{{ asset('/img/avatar/25.png') }}\" alt=\"\">
        <h5>Número Cinco<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"6 / 9\">
        <img src=\"{{ asset('/img/avatar/50.png') }}\" alt=\"\">
        <h5>Número Seis<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"7 / 9\">
        <img src=\"{{ asset('/img/avatar/5.png') }}\" alt=\"\">
        <h5>Número Siete<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"8 / 9\">
        <img src=\"{{ asset('/img/avatar/52.png') }}\" alt=\"\">
        <h5>Número Ocho<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
      <div class=\"swiper-slide\" style=\"width: 2405px; margin-right: 30px;\" role=\"group\" aria-label=\"9 / 9\">
        <img src=\"{{ asset('/img/avatar/1.png') }}\" alt=\"\">
        <h5>Número Nueve<br />
        <span> Project Manager </span>
        </h5>
        <p class=\"card-text\">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat ”</p>
      </div>
    </div>
    <!--
    <div class=\"swiper-button-next\" tabindex=\"0\" role=\"button\" aria-label=\"Next slide\" aria-controls=\"swiper-wrapper-61097471010e2b3f25d\" aria-disabled=\"false\"></div>
    <div class=\"swiper-button-prev\" tabindex=\"0\" role=\"button\" aria-label=\"Previous slide\" aria-controls=\"swiper-wrapper-61097471010e2b3f25d\" aria-disabled=\"false\"></div>
    <div class=\"swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal\"><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 1\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 2\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 3\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 4\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 5\"></span><span class=\"swiper-pagination-bullet swiper-pagination-bullet-active\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 6\" aria-current=\"true\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 7\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 8\"></span><span class=\"swiper-pagination-bullet\" tabindex=\"0\" role=\"button\" aria-label=\"Go to slide 9\"></span></div>
    -->
    <div class=\"autoplay-progress\">
      <svg viewBox=\"0 0 48 48\" style=\"--progress: 0.9319999999999999;\">
        <circle cx=\"24\" cy=\"24\" r=\"20\"></circle>
      </svg>
      <span>1s</span>
    </div>
  <span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
<script>
    const progressCircle = document.querySelector(\".autoplay-progress svg\");
    const progressContent = document.querySelector(\".autoplay-progress span\");
    var swiper = new Swiper(\".mySwiper\", {
      spaceBetween: 30,
      centeredSlides: false,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        reverseDirection: true
      },
      pagination: {
        el: \".swiper-pagination\",
        clickable: true
      },
      navigation: {
        nextEl: \".swiper-button-next\",
        prevEl: \".swiper-button-prev\"
      },
      mousewheel: {
        thresholdDelta: 70,
        invert: true
      },
      initialSlide: 3,
      slidesPerView: 3,
      loop: true,
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty(\"--progress\", 1 - progress);
          progressContent.textContent = `\${Math.ceil(time / 1000)}s`;
        }
      }
    });
</script>

<!--  
<script>
  var swiper = new Swiper(\".mySwiper\", {
  effect: \"coverflow\",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: \"auto\",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 8,
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
</script>-->", "landing/_testimonials.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\landing\\_testimonials.html.twig");
    }
}
