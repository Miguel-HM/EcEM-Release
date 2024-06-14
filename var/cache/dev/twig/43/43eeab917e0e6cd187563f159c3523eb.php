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

/* contact/index.html.twig */
class __TwigTemplate_8ab645cbc2ab8149029360e3a6c8364b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact me";
        
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
        echo "     <div class=\"contact-me\">
        <section>
            <h2 class=\"extra\">Get in touch!</h2>
                <h3>Send me a message</h3>
                <p>If you have any questions or would like to book a lesson, feel free to send me a message using the form below. I will get back to you as soon as possible.</p>
                <br>
                <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" method=\"post\">
                    <div>
                        <label for=\"name\">Name</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
                    </div>
                    <div>    
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                    </div>
                    <div>
                        <label for=\"message\">Message</label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
                    </div>    
                    <button type=\"submit\">Send</button>
                </form>
                <br>
                <h3>Find me on social media and other platforms</h3>
                ";
        // line 29
        $this->loadTemplate("common/_social-media.html.twig", "contact/index.html.twig", 29)->display($context);
        echo "    
                <br><br>
                <h3>Email me</h3>
                <p>If you prefer to send me an email directly, you can reach me at <a href=\"mailto:molpeva.ele@gmail.com\">molpeva.ele@gmail.com</a></p>
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
        return "contact/index.html.twig";
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
        return array (  116 => 29,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact me{% endblock %}

{% block body %}
     <div class=\"contact-me\">
        <section>
            <h2 class=\"extra\">Get in touch!</h2>
                <h3>Send me a message</h3>
                <p>If you have any questions or would like to book a lesson, feel free to send me a message using the form below. I will get back to you as soon as possible.</p>
                <br>
                <form action=\"{{ path('app_contact') }}\" method=\"post\">
                    <div>
                        <label for=\"name\">Name</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
                    </div>
                    <div>    
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                    </div>
                    <div>
                        <label for=\"message\">Message</label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
                    </div>    
                    <button type=\"submit\">Send</button>
                </form>
                <br>
                <h3>Find me on social media and other platforms</h3>
                {% include 'common/_social-media.html.twig' %}    
                <br><br>
                <h3>Email me</h3>
                <p>If you prefer to send me an email directly, you can reach me at <a href=\"mailto:molpeva.ele@gmail.com\">molpeva.ele@gmail.com</a></p>
        </section>  
    </div>
{% endblock %}", "contact/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\contact\\index.html.twig");
    }
}
