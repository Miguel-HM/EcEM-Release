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

/* student/_form.html.twig */
class __TwigTemplate_7f3b6bdfd5ad060980f01f8c2a8fdc30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    
    <div>
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'widget');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'errors');
        echo "
    </div>
    
    <div id=\"avatar-selection\" style=\"display: none;\">
    <div>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "avatar", [], "any", false, false, false, 11), 'label');
        echo "
    </div>
    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "avatar", [], "any", false, false, false, 14), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "avatar", [], "any", false, false, false, 15), 'errors');
        echo "
    </div>
    </div>

    <button type=\"button\" id=\"avatar-button\" class=\"conFlecha\"><i class=\"arrowDown\"></i> &emsp; Select Avatar</button>

    <div>
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "parent", [], "any", false, false, false, 23), 'label');
            echo "
            ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "parent", [], "any", false, false, false, 24), 'widget');
            echo "
            ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "parent", [], "any", false, false, false, 25), 'errors');
            echo "
        ";
        } else {
            // line 27
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "parent", [], "any", false, false, false, 27), 'widget');
            echo "
        ";
        }
        // line 29
        echo "    </div>

    <button type=\"submit\">";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

<script>
document.getElementById('avatar-button').addEventListener('click', function() {
    var avatarSelection = document.getElementById('avatar-selection');
    if (avatarSelection.style.display === 'none') {
        avatarSelection.style.display = 'block';
    } else {
        avatarSelection.style.display = 'none';
    }
});

    var avatarItems = document.querySelectorAll('.avatar-item');

    avatarItems.forEach(function(avatarItem) {
        avatarItem.addEventListener('click', function() {
            // Remove the 'selected' class from all avatar items
            avatarItems.forEach(function(item) {
                item.classList.remove('selected');
            });

            // Add the 'selected' class to the clicked avatar item
            avatarItem.classList.add('selected');

            var radioButton = avatarItem.querySelector('input[type=radio]');
            radioButton.checked = true;
        });
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
        return "student/_form.html.twig";
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
        return array (  116 => 33,  111 => 31,  107 => 29,  101 => 27,  96 => 25,  92 => 24,  87 => 23,  85 => 22,  75 => 15,  71 => 14,  65 => 11,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    
    <div>
        {{ form_label(form.name) }}
        {{ form_widget(form.name) }}
        {{ form_errors(form.name) }}
    </div>
    
    <div id=\"avatar-selection\" style=\"display: none;\">
    <div>
        {{ form_label(form.avatar) }}
    </div>
    <div>
        {{ form_widget(form.avatar) }}
        {{ form_errors(form.avatar) }}
    </div>
    </div>

    <button type=\"button\" id=\"avatar-button\" class=\"conFlecha\"><i class=\"arrowDown\"></i> &emsp; Select Avatar</button>

    <div>
        {% if is_granted('ROLE_ADMIN') %}
            {{ form_label(form.parent) }}
            {{ form_widget(form.parent) }}
            {{ form_errors(form.parent) }}
        {% else %}
            {{ form_widget(form.parent) }}
        {% endif %}
    </div>

    <button type=\"submit\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}

<script>
document.getElementById('avatar-button').addEventListener('click', function() {
    var avatarSelection = document.getElementById('avatar-selection');
    if (avatarSelection.style.display === 'none') {
        avatarSelection.style.display = 'block';
    } else {
        avatarSelection.style.display = 'none';
    }
});

    var avatarItems = document.querySelectorAll('.avatar-item');

    avatarItems.forEach(function(avatarItem) {
        avatarItem.addEventListener('click', function() {
            // Remove the 'selected' class from all avatar items
            avatarItems.forEach(function(item) {
                item.classList.remove('selected');
            });

            // Add the 'selected' class to the clicked avatar item
            avatarItem.classList.add('selected');

            var radioButton = avatarItem.querySelector('input[type=radio]');
            radioButton.checked = true;
        });
    });
</script>", "student/_form.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\student\\_form.html.twig");
    }
}
