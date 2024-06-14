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

/* about/index.html.twig */
class __TwigTemplate_32ed619e9176c84c3fd0c87cdeeb1ed5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About me";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <div class=\"about-me\">
            <section>
                <h2 class=\"extra\">¡Hola, soy Eva Mol!</h2>
                <div class=\"col-container\">
                    <div class=\"col about-me-img\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/intro2.png"), "html", null, true);
        echo "\" alt=\"Eva Mol\" style=\"margin:2rem;\">
                    </div>
                    <div class=\"col row-container\">
                        <div class=\"row\">
                            <h3>My Story</h3>
                            <p>After studying a degree in Translation and Interpreting, I decided to move to Barcelona to learn Spanish. I fell in love with the city and the language and decided to stay. I have been teaching Spanish for over 10 years and I am passionate about helping my students achieve their goals.</p>
                        </div>
                        <div class=\"row\">
                            <h3>My Approach</h3>
                            <p>My approach to teaching is based on the communicative method. I believe that the best way to learn a language is by using it in real-life situations. I tailor my lessons to the interests and goals of my students to make learning fun and engaging.</p>
                        </div>
                    </div>
                    <div class=\"row row-container\">
                        <div class=\"row\">
                            <h3>My Qualifications</h3>
                            <p>I am a certified Spanish teacher with a degree in Translation and Interpreting and a master's degree in Teaching Spanish as a Foreign Language. I am also a certified examiner for the DELE exams.</p>
                        </div>
                        <div class=\"row\">
                            <h3>Get in Touch</h3>
                            <p>If you are interested in learning Spanish with me, feel free to get in touch. I offer personalized lessons tailored to your goals and interests.</p>
                        </div>
                    </div>
                    <div style=\"text-align: center; margin: auto;\">
                        <button onclick=\"location.href='";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "';\">Contact me</button>
                    </div>
                <div style=\"text-align: center; margin: auto; padding-top: 2em;\">
                    ";
        // line 37
        $this->loadTemplate("common/_social-media.html.twig", "about/index.html.twig", 37)->display($context);
        // line 38
        echo "                </div>
            </section>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about/index.html.twig";
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
        return array (  129 => 38,  127 => 37,  121 => 34,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About me{% endblock %}

{% block body %}
     <div class=\"about-me\">
            <section>
                <h2 class=\"extra\">¡Hola, soy Eva Mol!</h2>
                <div class=\"col-container\">
                    <div class=\"col about-me-img\">
                        <img src=\"{{ asset('/img/intro2.png') }}\" alt=\"Eva Mol\" style=\"margin:2rem;\">
                    </div>
                    <div class=\"col row-container\">
                        <div class=\"row\">
                            <h3>My Story</h3>
                            <p>After studying a degree in Translation and Interpreting, I decided to move to Barcelona to learn Spanish. I fell in love with the city and the language and decided to stay. I have been teaching Spanish for over 10 years and I am passionate about helping my students achieve their goals.</p>
                        </div>
                        <div class=\"row\">
                            <h3>My Approach</h3>
                            <p>My approach to teaching is based on the communicative method. I believe that the best way to learn a language is by using it in real-life situations. I tailor my lessons to the interests and goals of my students to make learning fun and engaging.</p>
                        </div>
                    </div>
                    <div class=\"row row-container\">
                        <div class=\"row\">
                            <h3>My Qualifications</h3>
                            <p>I am a certified Spanish teacher with a degree in Translation and Interpreting and a master's degree in Teaching Spanish as a Foreign Language. I am also a certified examiner for the DELE exams.</p>
                        </div>
                        <div class=\"row\">
                            <h3>Get in Touch</h3>
                            <p>If you are interested in learning Spanish with me, feel free to get in touch. I offer personalized lessons tailored to your goals and interests.</p>
                        </div>
                    </div>
                    <div style=\"text-align: center; margin: auto;\">
                        <button onclick=\"location.href='{{ path('app_contact') }}';\">Contact me</button>
                    </div>
                <div style=\"text-align: center; margin: auto; padding-top: 2em;\">
                    {% include 'common/_social-media.html.twig' %}
                </div>
            </section>
        </div>
{% endblock %}", "about/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\about\\index.html.twig");
    }
}
