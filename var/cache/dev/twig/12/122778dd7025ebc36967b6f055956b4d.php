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

/* common/_footer.html.twig */
class __TwigTemplate_0e9622ff3619532ebc98aa6ebef86410 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer mt-auto py-3 text-center\">
    <div class=\"container d-flex justify-content-between\">
        <div style=\"text-align: left\">
            <a class=\"footer-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 30px; height: 30px;\" class=\"d-inline-block align-top\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/EvaMol.png"), "html", null, true);
        echo "\" alt=\"E\" style=\"height: 20px;\">
            </a>
            <p class=\"mb-0\" style=\"font-family: 'Metropolis Thin';\">© 2024 Miguel Hernández Madrigal</p>
            <p class=\"mb-0\"><a style=\"font-family: 'Metropolis Thin'; text-decoration: none; color: white;\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attribution");
        echo "\">ℹ️ Attributions</a></p>
        </div>
        <div>
            ";
        // line 12
        $this->loadTemplate("common/_social-media.html.twig", "common/_footer.html.twig", 12)->display($context);
        // line 13
        echo "        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/_footer.html.twig";
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
        return array (  70 => 13,  68 => 12,  62 => 9,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer mt-auto py-3 text-center\">
    <div class=\"container d-flex justify-content-between\">
        <div style=\"text-align: left\">
            <a class=\"footer-brand\" href=\"{{ path('app_landing') }}\">
                <img src=\"{{ asset('/img/logo.png') }}\" alt=\"Logo\" style=\"width: 30px; height: 30px;\" class=\"d-inline-block align-top\">
                <img src=\"{{ asset('/img/EvaMol.png') }}\" alt=\"E\" style=\"height: 20px;\">
            </a>
            <p class=\"mb-0\" style=\"font-family: 'Metropolis Thin';\">© 2024 Miguel Hernández Madrigal</p>
            <p class=\"mb-0\"><a style=\"font-family: 'Metropolis Thin'; text-decoration: none; color: white;\" href=\"{{ path('app_attribution') }}\">ℹ️ Attributions</a></p>
        </div>
        <div>
            {% include 'common/_social-media.html.twig' %}
        </div>
    </div>
</footer>", "common/_footer.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\common\\_footer.html.twig");
    }
}
