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

/* common/_menu.html.twig */
class __TwigTemplate_54e39ba3f199e62f50357781f54dc816 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_menu.html.twig"));

        // line 1
        echo "  <nav class=\"navbar navbar-expand-lg navbar-light sticky-top d-flex justify-content-between\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"L\" style=\"width: 30px; height: 30px;\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/EvaMol.png"), "html", null, true);
        echo "\" alt=\"E\" style=\"height: 20px;\">
    </a>
    <button class=\"navbar-toggler custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon custom-toggler\"></span>
    </button>
    <div id=\"navbarNavDropdown\" class=\"collapse navbar-collapse justify-content-between\">
      <div>
      <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        echo "\">Pricing</a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About me</a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact me</a>
          </li>
      </ul>
      </div>
    <div>
    ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "    <div class=\"navbar-collapse\">
        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\">
                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/avatar/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "students", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), "avatar", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"A\" style=\"width: 24px; height: 24px;\">
                ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo "
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Account</a>
                <a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
            echo "\">Lessons</a>
                <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 39
            echo "        <div class=\"navbar-collapse justify-content-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">Login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/register\">Register</a>
                </li>
            </ul>
        </div>
    ";
        }
        // line 50
        echo "    </div>
    </div>
  
</nav>

<script>
document.querySelector('.dropdown').addEventListener('click', function (event) {
    event.stopPropagation();
    this.classList.toggle('show');
    var dropdownMenu = this.querySelector('.dropdown-menu');
    if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
    } else {
        dropdownMenu.classList.add('show');
    }
});

window.addEventListener('click', function (e) {
    var dropdown = document.querySelector('.dropdown');
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
    }
});
</script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/_menu.html.twig";
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
        return array (  132 => 50,  119 => 39,  111 => 34,  107 => 33,  103 => 32,  97 => 29,  93 => 28,  88 => 25,  86 => 24,  78 => 19,  72 => 16,  66 => 13,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <nav class=\"navbar navbar-expand-lg navbar-light sticky-top d-flex justify-content-between\">
    <a class=\"navbar-brand\" href=\"{{ path('app_landing') }}\">
        <img src=\"{{ asset('/img/logo.png') }}\" alt=\"L\" style=\"width: 30px; height: 30px;\">
        <img src=\"{{ asset('/img/EvaMol.png') }}\" alt=\"E\" style=\"height: 20px;\">
    </a>
    <button class=\"navbar-toggler custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon custom-toggler\"></span>
    </button>
    <div id=\"navbarNavDropdown\" class=\"collapse navbar-collapse justify-content-between\">
      <div>
      <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_pricing') }}\">Pricing</a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_about') }}\">About me</a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact me</a>
          </li>
      </ul>
      </div>
    <div>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <div class=\"navbar-collapse\">
        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\">
                <img src=\"{{ asset('/img/avatar/' ~ app.user.students.first.avatar) }}\" alt=\"A\" style=\"width: 24px; height: 24px;\">
                {{ app.user.username }}
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"{{ path('app_account') }}\">Account</a>
                <a class=\"dropdown-item\" href=\"{{ path('app_calendar') }}\">Lessons</a>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        </div>
    </div>
    {% else %}
        <div class=\"navbar-collapse justify-content-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">Login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/register\">Register</a>
                </li>
            </ul>
        </div>
    {% endif %}
    </div>
    </div>
  
</nav>

<script>
document.querySelector('.dropdown').addEventListener('click', function (event) {
    event.stopPropagation();
    this.classList.toggle('show');
    var dropdownMenu = this.querySelector('.dropdown-menu');
    if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
    } else {
        dropdownMenu.classList.add('show');
    }
});

window.addEventListener('click', function (e) {
    var dropdown = document.querySelector('.dropdown');
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
    }
});
</script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
", "common/_menu.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\common\\_menu.html.twig");
    }
}
