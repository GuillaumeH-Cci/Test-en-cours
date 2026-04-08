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

/* pokemon/index.html.twig */
class __TwigTemplate_f496706aa77f15fc02d6b69c92f10880 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

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

        yield "Liste des Pokémons";
        
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
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "d-inline-block", "text" => "Précédent", "type" => "info", "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_index")]);
        yield "

    ";
        // line 9
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "d-inline-block", "text" => "Suivant", "type" => "info", "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_index")]);
        yield "

    <div class=\"row mt-2\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemonList"]) || array_key_exists("pokemonList", $context) ? $context["pokemonList"] : (function () { throw new RuntimeError('Variable "pokemonList" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 13
            yield "
        ";
            // line 14
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("BootstrapCard", Twig\Extension\CoreExtension::toArray(["class" => "col-3", "title" => CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 14), "img" => (("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "number", [], "any", false, false, false, 14)) . ".png")]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("BootstrapCard", Twig\Extension\CoreExtension::toArray(["class" => "col-3", "title" => CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 14), "img" => (("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "number", [], "any", false, false, false, 14)) . ".png")]), $context, "pokemon/index.html.twig", 21122723001);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 21122723001);
                $this->load("pokemon/index.html.twig", 14, "21122723001")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 38
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pokemon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    </div>

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
        return "pokemon/index.html.twig";
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
        return array (  142 => 40,  135 => 38,  121 => 14,  118 => 13,  114 => 12,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Pokémons{% endblock %}

{% block body %}

    {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Précédent', type: 'info', link: (path('app_pokemon_index')) }) }}

    {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Suivant', type: 'info', link: (path('app_pokemon_index')) }) }}

    <div class=\"row mt-2\">
    {% for pokemon in pokemonList %}

        {% component 'BootstrapCard' with { class: 'col-3', title: (pokemon.name), img: 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'~(pokemon.number)~'.png' } %}
        
            {% block content %}<span class=\"badge text-bg-info rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>

            {% for type in pokemon.types %}

            <span class=\"badge rounded-pill\"
                    style=\"background-color: {{ type.color }}; color: {{ type.textColor }};\">
                {{ type.name }}
            </span>
            {% endfor %}

            <div class=\"mt-2\">

                {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Détails', type: 'info', link: (path('app_pokemon_show', { id: pokemon.id })) }) }}

                {# Si droit d'édition, on affiche le bouton #}
                {% if is_granted('POKEMON_EDIT', pokemon) %}
                {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Modifier', type: 'warning', link: (path('app_pokemon_update', { id: pokemon.id })) }) }}
                {% endif %}
                
            </div>

        {% endblock %}{% endcomponent %}

    {% endfor %}
    </div>

{% endblock %}
", "pokemon/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\pokemon\\index.html.twig");
    }
}


/* pokemon/index.html.twig */
class __TwigTemplate_f496706aa77f15fc02d6b69c92f10880___21122723001 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 14, $this->source); })()), 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield "<span class=\"badge text-bg-info rounded-pill\">#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->fillNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 16, $this->source); })()), "number", [], "any", false, false, false, 16), "0", 3), "html", null, true);
        yield "</span>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 19
            yield "
            <span class=\"badge rounded-pill\"
                    style=\"background-color: ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "color", [], "any", false, false, false, 21), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "textColor", [], "any", false, false, false, 21), "html", null, true);
            yield ";\">
                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 22), "html", null, true);
            yield "
            </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
            <div class=\"mt-2\">

                ";
        // line 28
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "d-inline-block", "text" => "Détails", "type" => "info", "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)])]);
        yield "

                ";
        // line 31
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("POKEMON_EDIT", (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 31, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "d-inline-block", "text" => "Modifier", "type" => "warning", "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)])]);
            yield "
                ";
        }
        // line 34
        yield "                
            </div>

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
        return "pokemon/index.html.twig";
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
        return array (  354 => 34,  348 => 32,  345 => 31,  340 => 28,  335 => 25,  326 => 22,  320 => 21,  316 => 19,  312 => 18,  294 => 16,  251 => 14,  142 => 40,  135 => 38,  121 => 14,  118 => 13,  114 => 12,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Pokémons{% endblock %}

{% block body %}

    {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Précédent', type: 'info', link: (path('app_pokemon_index')) }) }}

    {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Suivant', type: 'info', link: (path('app_pokemon_index')) }) }}

    <div class=\"row mt-2\">
    {% for pokemon in pokemonList %}

        {% component 'BootstrapCard' with { class: 'col-3', title: (pokemon.name), img: 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'~(pokemon.number)~'.png' } %}
        
            {% block content %}<span class=\"badge text-bg-info rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>

            {% for type in pokemon.types %}

            <span class=\"badge rounded-pill\"
                    style=\"background-color: {{ type.color }}; color: {{ type.textColor }};\">
                {{ type.name }}
            </span>
            {% endfor %}

            <div class=\"mt-2\">

                {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Détails', type: 'info', link: (path('app_pokemon_show', { id: pokemon.id })) }) }}

                {# Si droit d'édition, on affiche le bouton #}
                {% if is_granted('POKEMON_EDIT', pokemon) %}
                {{ component('BootstrapButton', { class: 'd-inline-block', text: 'Modifier', type: 'warning', link: (path('app_pokemon_update', { id: pokemon.id })) }) }}
                {% endif %}
                
            </div>

        {% endblock %}{% endcomponent %}

    {% endfor %}
    </div>

{% endblock %}
", "pokemon/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\pokemon\\index.html.twig");
    }
}
