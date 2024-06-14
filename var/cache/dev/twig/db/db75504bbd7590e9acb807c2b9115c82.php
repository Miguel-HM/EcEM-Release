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

/* landing/index.html.twig */
class __TwigTemplate_71373b0bf59ab7b567eccbb115b3091b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing/index.html.twig", 1);
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

        echo "Español con EvaMol";
        
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
        echo "<div>
    <div>
        <!-- Intro Section -->
        <div class=\"intro\">
            <section class=\"primera\">
                <div class=\"col-container\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/EcEM2.png"), "html", null, true);
        echo "\" alt=\"Big logo\" style=\"margin:2rem;\">
                        </div>
                        <div class=\"text row\">
                            <h2 class=\"plain\">A <span class=\"extra\">unique</span> approach to learning Spanish</h2>
                            <p>Customize your learning experience based on your goals, interests and level</p>
                        </div>
                        <div>
                            <button onclick=\"location.href='";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "';\">Get Started</button>                        </div>
                    </div>
                    <div class=\"col\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/manoBCN.png"), "html", null, true);
        echo "\" alt=\"HolaMano\" style=\"min-width:350px; max-width:800px;\">
                    </div>
                </div>
            </section>
        </div>

        <!-- Why choose us? Section -->
        <div class=\"why-choose-us\">
            <section>
                <h2 class=\"extra\">Why choose me?</h2>
                <div class=\"col-container\">
                    <div class=\"col\">
                        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/objetivo.png"), "html", null, true);
        echo "\" alt=\"Image description\">
                        <h3>You set the goals, we get you there</h3>
                        <p>Customize your learning experience based on what you want to achieve and at your own pace.</p>
                    </div>
                    <div class=\"col\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gracioso.png"), "html", null, true);
        echo "\" alt=\"Image description\">
                        <h3>Fun engaging lessons</h3>
                        <p>Every class is tailored to your interests to make learning fun and engaging.</p>
                    </div>
                    <div class=\"col\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/certificado.png"), "html", null, true);
        echo "\" alt=\"Image description\">
                        <h3>Prepare for official qualifications</h3>
                        <p>Get a coach certified in exam preparation for DELE, A levels, Baccalauréat and International Baccalaureate.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Testimonials Section -->
        <div>
            <section class=\"testimonials\">
                ";
        // line 57
        $this->loadTemplate("landing/_testimonials.html.twig", "landing/index.html.twig", 57)->display($context);
        // line 58
        echo "            </section>
        </div>

        <!-- About me Section -->
        <div class=\"about\">
            <section>
                <div class=\"col-container\">
                    <div class=\"col\">
                        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/intro2.png"), "html", null, true);
        echo "\" alt=\"Coach Eva\" style=\"max-width: 600px;\">
                    </div>
                    <div class=\"contenido text col\">
                        <div style=\"margin-bottom: 1.5rem;\"><h2>About me</h2></div>
                        <div>
                            <p>I've been <b>teaching languages for a decade</b>, but i still keep learning how to be a better teacher every day!</p>
                            <p>My classes are aimed at fulfilling <b>your</b> language goals while keeping you <b>entertained and engaged</b>.</p>
                        </div>
                    </div>
                </div>
                <div class=\"stats-container\">
                    <div class=\"stat\">
                        <div class=\"lessons-odometer odometer plus\">0</div>
                        <div class=\"type\">Spanish lessons taught</div>
                    </div>
                    <div class=\"stat\">
                        <div class=\"students-odometer odometer plus\">0</div>
                        <div class=\"type\">Happy students</div>
                    </div>
                    <script>
                /* Stats */
                document.addEventListener('DOMContentLoaded', function() {
                    const createOdometer = (el, value) => {
                        const odometer = new Odometer({
                        el: el,
                        value: 0,
                        });
                    
                        let hasRun = false;
                    
                        const options = {
                        threshold: [0, 0.9],
                        };
                    
                        const callback = (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                            if (!hasRun) {
                                odometer.update(value);
                                hasRun = true;
                            }
                            }
                        });
                        };
                        const observer = new IntersectionObserver(callback, options);
                        observer.observe(el);
                    };
                    
                    const lessonsOdometer = document.querySelector(\".lessons-odometer\");
                    createOdometer(lessonsOdometer, 5000);
                    
                    const studentsOdometer = document.querySelector(\".students-odometer\");
                    createOdometer(studentsOdometer, 100);
                });

                /* End Stats */
            </script>
                </div>
                <div style=\"text-align: center;\">
                    <button onclick=\"location.href='";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "';\">Learn more about me</button>                </div>
            </section>
        </div>

        <!-- FAQ Section -->
        <div class=\"faq\">
            <section>
                <h2>Frequently Asked Questions</h2>
                <br />
                <div>
                    <button>Do you offer individual and group lessons?</button>
                    <button>Can siblings take lessons together?</button>
                    <button>How do I start learning with you?</button>
                    <button>Can I get the learning materials after the lesson?</button>
                    <button>I'm going on a trip to a Spanish speaking country...</button>
                </div>
            </section>
        </div>
    </div>
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
        return "landing/index.html.twig";
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
        return array (  233 => 125,  171 => 66,  161 => 58,  159 => 57,  145 => 46,  137 => 41,  129 => 36,  114 => 24,  108 => 21,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Español con EvaMol{% endblock %}

{% block body %}
<div>
    <div>
        <!-- Intro Section -->
        <div class=\"intro\">
            <section class=\"primera\">
                <div class=\"col-container\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <img src=\"{{ asset('/img/EcEM2.png') }}\" alt=\"Big logo\" style=\"margin:2rem;\">
                        </div>
                        <div class=\"text row\">
                            <h2 class=\"plain\">A <span class=\"extra\">unique</span> approach to learning Spanish</h2>
                            <p>Customize your learning experience based on your goals, interests and level</p>
                        </div>
                        <div>
                            <button onclick=\"location.href='{{ path('app_register') }}';\">Get Started</button>                        </div>
                    </div>
                    <div class=\"col\">
                        <img src=\"{{ asset('/img/manoBCN.png') }}\" alt=\"HolaMano\" style=\"min-width:350px; max-width:800px;\">
                    </div>
                </div>
            </section>
        </div>

        <!-- Why choose us? Section -->
        <div class=\"why-choose-us\">
            <section>
                <h2 class=\"extra\">Why choose me?</h2>
                <div class=\"col-container\">
                    <div class=\"col\">
                        <img src=\"{{ asset('/img/objetivo.png') }}\" alt=\"Image description\">
                        <h3>You set the goals, we get you there</h3>
                        <p>Customize your learning experience based on what you want to achieve and at your own pace.</p>
                    </div>
                    <div class=\"col\">
                        <img src=\"{{ asset('/img/gracioso.png') }}\" alt=\"Image description\">
                        <h3>Fun engaging lessons</h3>
                        <p>Every class is tailored to your interests to make learning fun and engaging.</p>
                    </div>
                    <div class=\"col\">
                        <img src=\"{{ asset('/img/certificado.png') }}\" alt=\"Image description\">
                        <h3>Prepare for official qualifications</h3>
                        <p>Get a coach certified in exam preparation for DELE, A levels, Baccalauréat and International Baccalaureate.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Testimonials Section -->
        <div>
            <section class=\"testimonials\">
                {% include 'landing/_testimonials.html.twig' %}
            </section>
        </div>

        <!-- About me Section -->
        <div class=\"about\">
            <section>
                <div class=\"col-container\">
                    <div class=\"col\">
                        <img src=\"{{ asset('/img/intro2.png') }}\" alt=\"Coach Eva\" style=\"max-width: 600px;\">
                    </div>
                    <div class=\"contenido text col\">
                        <div style=\"margin-bottom: 1.5rem;\"><h2>About me</h2></div>
                        <div>
                            <p>I've been <b>teaching languages for a decade</b>, but i still keep learning how to be a better teacher every day!</p>
                            <p>My classes are aimed at fulfilling <b>your</b> language goals while keeping you <b>entertained and engaged</b>.</p>
                        </div>
                    </div>
                </div>
                <div class=\"stats-container\">
                    <div class=\"stat\">
                        <div class=\"lessons-odometer odometer plus\">0</div>
                        <div class=\"type\">Spanish lessons taught</div>
                    </div>
                    <div class=\"stat\">
                        <div class=\"students-odometer odometer plus\">0</div>
                        <div class=\"type\">Happy students</div>
                    </div>
                    <script>
                /* Stats */
                document.addEventListener('DOMContentLoaded', function() {
                    const createOdometer = (el, value) => {
                        const odometer = new Odometer({
                        el: el,
                        value: 0,
                        });
                    
                        let hasRun = false;
                    
                        const options = {
                        threshold: [0, 0.9],
                        };
                    
                        const callback = (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                            if (!hasRun) {
                                odometer.update(value);
                                hasRun = true;
                            }
                            }
                        });
                        };
                        const observer = new IntersectionObserver(callback, options);
                        observer.observe(el);
                    };
                    
                    const lessonsOdometer = document.querySelector(\".lessons-odometer\");
                    createOdometer(lessonsOdometer, 5000);
                    
                    const studentsOdometer = document.querySelector(\".students-odometer\");
                    createOdometer(studentsOdometer, 100);
                });

                /* End Stats */
            </script>
                </div>
                <div style=\"text-align: center;\">
                    <button onclick=\"location.href='{{ path('app_about') }}';\">Learn more about me</button>                </div>
            </section>
        </div>

        <!-- FAQ Section -->
        <div class=\"faq\">
            <section>
                <h2>Frequently Asked Questions</h2>
                <br />
                <div>
                    <button>Do you offer individual and group lessons?</button>
                    <button>Can siblings take lessons together?</button>
                    <button>How do I start learning with you?</button>
                    <button>Can I get the learning materials after the lesson?</button>
                    <button>I'm going on a trip to a Spanish speaking country...</button>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}", "landing/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\landing\\index.html.twig");
    }
}
