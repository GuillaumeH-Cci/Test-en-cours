<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pokemon_type/index.html.twig */
class __TwigTemplate_ec65f5df87f37466156a6f994b0c2cd8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon_type/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon_type/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Gestion des types de Pokémon";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"container-sm\">

    <div class=\"card mb-5 pt-2\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "

            <div>
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 13, $this->source); })()), 'errors');
        yield "
            </div>

            <div class=\"row align-items-end justify-content-center\">
                <div class=\"col-4\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'row');
        yield "
                </div>
                <div class=\"col-1\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 21, $this->source); })()), "color", [], "any", false, false, false, 21), 'row');
        yield "
                </div>
                <div class=\"col-1\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 24, $this->source); })()), "submit", [], "any", false, false, false, 24), 'row');
        yield "
                </div>
            </div>

        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createForm"]) || array_key_exists("createForm", $context) ? $context["createForm"] : (function () { throw new RuntimeError('Variable "createForm" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<div class=\"row g-4\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemonTypes"]) || array_key_exists("pokemonTypes", $context) ? $context["pokemonTypes"] : (function () { throw new RuntimeError('Variable "pokemonTypes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 34
            yield "    <div class=\"col-2\">
        <div class=\"card\" 
            style=\"background-color: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "color", [], "any", false, false, false, 36), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "textColor", [], "any", false, false, false, 36), "html", null, true);
            yield ";\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</h5>
                <h6 class=\"card-subtitle mb-2 text-body-secondary\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "color", [], "any", false, false, false, 40), "html", null, true);
            yield "</h6>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pokemon_type/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  178 => 45,  167 => 40,  163 => 39,  155 => 36,  151 => 34,  147 => 33,  139 => 28,  132 => 24,  126 => 21,  120 => 18,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des types de Pokémon{% endblock %}

{% block body %}

<div class=\"container-sm\">

    <div class=\"card mb-5 pt-2\">
        {{ form_start(createForm) }}

            <div>
                {{ form_errors(createForm) }}
            </div>

            <div class=\"row align-items-end justify-content-center\">
                <div class=\"col-4\">
                    {{ form_row(createForm.name) }}
                </div>
                <div class=\"col-1\">
                    {{ form_row(createForm.color) }}
                </div>
                <div class=\"col-1\">
                    {{ form_row(createForm.submit) }}
                </div>
            </div>

        {{ form_end(createForm) }}
    </div>
</div>

<div class=\"row g-4\">
    {% for type in pokemonTypes %}
    <div class=\"col-2\">
        <div class=\"card\" 
            style=\"background-color: {{ type.color }}; color: {{ type.textColor }};\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ type.name }}</h5>
                <h6 class=\"card-subtitle mb-2 text-body-secondary\">{{ type.color }}</h6>
            </div>
        </div>
    </div>
    {% endfor %}
</div>

{% endblock %}
", "pokemon_type/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\pokemon_type\\index.html.twig");
    }
}
