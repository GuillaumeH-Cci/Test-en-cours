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

/* hello_world/index.html.twig */
class __TwigTemplate_ec0edcb819b4f75f15745247d0a6cba0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

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

        yield "Hello HelloWorldController!";
        
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
<div class=\"example-wrapper\">

    <h1>Hello ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->customCapitalize((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "!</h1>

    ";
        // line 11
        $context["textFirstCapitalized"] = "Ma première lettre est en majuscule";
        // line 12
        yield "    <p>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->customCapitalize((isset($context["textFirstCapitalized"]) || array_key_exists("textFirstCapitalized", $context) ? $context["textFirstCapitalized"] : (function () { throw new RuntimeError('Variable "textFirstCapitalized" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "</p>

    ";
        // line 14
        $context["textFirstNotCapitalized"] = "Ma première lettre est en minuscule";
        // line 15
        yield "    <p>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->customCapitalize((isset($context["textFirstNotCapitalized"]) || array_key_exists("textFirstNotCapitalized", $context) ? $context["textFirstNotCapitalized"] : (function () { throw new RuntimeError('Variable "textFirstNotCapitalized" does not exist.', 15, $this->source); })()), false), "html", null, true);
        yield "</p>

    ";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["pokemonList"]) || array_key_exists("pokemonList", $context) ? $context["pokemonList"] : (function () { throw new RuntimeError('Variable "pokemonList" does not exist.', 17, $this->source); })()));
        yield "

    <h2>Liste des Pokémon</h2>
    <ul class=\"list-group\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemonList"]) || array_key_exists("pokemonList", $context) ? $context["pokemonList"] : (function () { throw new RuntimeError('Variable "pokemonList" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 22
            yield "        <li class=\"list-group-item\">
            <span class=\"badge text-bg-primary rounded-pill\">#";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->fillNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "number", [], "any", false, false, false, 23), "0", 3), "html", null, true);
            yield "</span>
            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "
        </li>
    ";
            $context['_iterated'] = true;
        }
        // line 26
        if (!$context['_iterated']) {
            // line 27
            yield "        <li class=\"list-group-item list-group-item-warning\">
            Aucun Pokémon n'a été trouvé
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pokemon'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    </ul>

    <h2>Liste des Pokémon (card)</h2>
    <div class=\"row mt-2\">
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemonList"]) || array_key_exists("pokemonList", $context) ? $context["pokemonList"] : (function () { throw new RuntimeError('Variable "pokemonList" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 36
            yield "
        ";
            // line 37
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("BootstrapCard", Twig\Extension\CoreExtension::toArray(["class" => "col-3", "title" => CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 37), "img" => (("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "number", [], "any", false, false, false, 37)) . ".png"), "link" => "#", "label" => "Détail"]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("BootstrapCard", Twig\Extension\CoreExtension::toArray(["class" => "col-3", "title" => CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 37), "img" => (("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "number", [], "any", false, false, false, 37)) . ".png"), "link" => "#", "label" => "Détail"]), $context, "hello_world/index.html.twig", 21307014771);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 21307014771);
                $this->load("hello_world/index.html.twig", 37, "21307014771")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 43
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pokemon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </div>





    ";
        // line 51
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "my-2", "text" => "Bootstrap est disponible!", "type" => "success", "link" => "#"]);
        yield "

    ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["text" => "Hello World!", "type" => "warning", "link" => "#", "outlined" => true]);
        yield "

    <div class=\"row mt-2\">
        <div class=\"col-3\"> 
            ";
        // line 57
        $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v1->preRender("BootstrapCard", Twig\Extension\CoreExtension::toArray(["title" => "Mon image #1", "img" => "https://picsum.photos/200", "link" => "/images/1", "label" => "Cliquez ici"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v1->startEmbedComponent("BootstrapCard", Twig\Extension\CoreExtension::toArray(["title" => "Mon image #1", "img" => "https://picsum.photos/200", "link" => "/images/1", "label" => "Cliquez ici"]), $context, "hello_world/index.html.twig", 6819213151);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6819213151);
            $this->load("hello_world/index.html.twig", 57, "6819213151")->display($embeddedContext, $embeddedBlocks);
            $_v1->finishEmbedComponent();
        }
        // line 62
        yield "        </div>
    </div>
    
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
        return "hello_world/index.html.twig";
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
        return array (  231 => 62,  217 => 57,  210 => 53,  205 => 51,  197 => 45,  190 => 43,  176 => 37,  173 => 36,  169 => 35,  163 => 31,  154 => 27,  152 => 26,  145 => 24,  141 => 23,  138 => 22,  133 => 21,  126 => 17,  120 => 15,  118 => 14,  112 => 12,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HelloWorldController!{% endblock %}

{% block body %}

<div class=\"example-wrapper\">

    <h1>Hello {{ controller_name|custom_capitalize }}!</h1>

    {% set textFirstCapitalized = \"Ma première lettre est en majuscule\" %}
    <p>{{ textFirstCapitalized|custom_capitalize }}</p>

    {% set textFirstNotCapitalized = \"Ma première lettre est en minuscule\" %}
    <p>{{ textFirstNotCapitalized|custom_capitalize(false) }}</p>

    {{ dump(pokemonList) }}

    <h2>Liste des Pokémon</h2>
    <ul class=\"list-group\">
    {% for pokemon in pokemonList %}
        <li class=\"list-group-item\">
            <span class=\"badge text-bg-primary rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            {{ pokemon.name }}
        </li>
    {% else %}
        <li class=\"list-group-item list-group-item-warning\">
            Aucun Pokémon n'a été trouvé
        </li>
    {% endfor %}
    </ul>

    <h2>Liste des Pokémon (card)</h2>
    <div class=\"row mt-2\">
    {% for pokemon in pokemonList %}

        {% component 'BootstrapCard' with { class: 'col-3', title: (pokemon.name), img: 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'~(pokemon.number)~'.png', link: '#', label: 'Détail' } %}
        
            {% block content %}<span class=\"badge text-bg-info rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            <span class=\"badge text-bg-primary rounded-pill\">{{ pokemon.type }}</span>

        {% endblock %}{% endcomponent %}

    {% endfor %}
    </div>





    {{ component('BootstrapButton', { class: 'my-2', text: 'Bootstrap est disponible!', type: 'success', link: '#' }) }}

    {{ component('BootstrapButton', { text: 'Hello World!', type: 'warning', link: '#', outlined: true }) }}

    <div class=\"row mt-2\">
        <div class=\"col-3\"> 
            {% component 'BootstrapCard' with { title: 'Mon image #1', img: 'https://picsum.photos/200', link: '/images/1', label: 'Cliquez ici' } %}
                {% block content %}<p>Ceci est le texte de mon contenu</p>
                <p>En format <strong>HTML</strong></p>

            {% endblock %}{% endcomponent %}
        </div>
    </div>
    
</div>
{% endblock %}
", "hello_world/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\hello_world\\index.html.twig");
    }
}


/* hello_world/index.html.twig */
class __TwigTemplate_ec0edcb819b4f75f15745247d0a6cba0___21307014771 extends Template
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
        // line 37
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 37, $this->source); })()), 37);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

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

    // line 39
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->fillNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 39, $this->source); })()), "number", [], "any", false, false, false, 39), "0", 3), "html", null, true);
        yield "</span>
            <span class=\"badge text-bg-primary rounded-pill\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>

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
        return "hello_world/index.html.twig";
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
        return array (  426 => 40,  409 => 39,  366 => 37,  231 => 62,  217 => 57,  210 => 53,  205 => 51,  197 => 45,  190 => 43,  176 => 37,  173 => 36,  169 => 35,  163 => 31,  154 => 27,  152 => 26,  145 => 24,  141 => 23,  138 => 22,  133 => 21,  126 => 17,  120 => 15,  118 => 14,  112 => 12,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HelloWorldController!{% endblock %}

{% block body %}

<div class=\"example-wrapper\">

    <h1>Hello {{ controller_name|custom_capitalize }}!</h1>

    {% set textFirstCapitalized = \"Ma première lettre est en majuscule\" %}
    <p>{{ textFirstCapitalized|custom_capitalize }}</p>

    {% set textFirstNotCapitalized = \"Ma première lettre est en minuscule\" %}
    <p>{{ textFirstNotCapitalized|custom_capitalize(false) }}</p>

    {{ dump(pokemonList) }}

    <h2>Liste des Pokémon</h2>
    <ul class=\"list-group\">
    {% for pokemon in pokemonList %}
        <li class=\"list-group-item\">
            <span class=\"badge text-bg-primary rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            {{ pokemon.name }}
        </li>
    {% else %}
        <li class=\"list-group-item list-group-item-warning\">
            Aucun Pokémon n'a été trouvé
        </li>
    {% endfor %}
    </ul>

    <h2>Liste des Pokémon (card)</h2>
    <div class=\"row mt-2\">
    {% for pokemon in pokemonList %}

        {% component 'BootstrapCard' with { class: 'col-3', title: (pokemon.name), img: 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'~(pokemon.number)~'.png', link: '#', label: 'Détail' } %}
        
            {% block content %}<span class=\"badge text-bg-info rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            <span class=\"badge text-bg-primary rounded-pill\">{{ pokemon.type }}</span>

        {% endblock %}{% endcomponent %}

    {% endfor %}
    </div>





    {{ component('BootstrapButton', { class: 'my-2', text: 'Bootstrap est disponible!', type: 'success', link: '#' }) }}

    {{ component('BootstrapButton', { text: 'Hello World!', type: 'warning', link: '#', outlined: true }) }}

    <div class=\"row mt-2\">
        <div class=\"col-3\"> 
            {% component 'BootstrapCard' with { title: 'Mon image #1', img: 'https://picsum.photos/200', link: '/images/1', label: 'Cliquez ici' } %}
                {% block content %}<p>Ceci est le texte de mon contenu</p>
                <p>En format <strong>HTML</strong></p>

            {% endblock %}{% endcomponent %}
        </div>
    </div>
    
</div>
{% endblock %}
", "hello_world/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\hello_world\\index.html.twig");
    }
}


/* hello_world/index.html.twig */
class __TwigTemplate_ec0edcb819b4f75f15745247d0a6cba0___6819213151 extends Template
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
        // line 57
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 57, $this->source); })()), 57);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello_world/index.html.twig"));

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

    // line 58
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

        yield "<p>Ceci est le texte de mon contenu</p>
                <p>En format <strong>HTML</strong></p>

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
        return "hello_world/index.html.twig";
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
        return array (  603 => 58,  560 => 57,  426 => 40,  409 => 39,  366 => 37,  231 => 62,  217 => 57,  210 => 53,  205 => 51,  197 => 45,  190 => 43,  176 => 37,  173 => 36,  169 => 35,  163 => 31,  154 => 27,  152 => 26,  145 => 24,  141 => 23,  138 => 22,  133 => 21,  126 => 17,  120 => 15,  118 => 14,  112 => 12,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HelloWorldController!{% endblock %}

{% block body %}

<div class=\"example-wrapper\">

    <h1>Hello {{ controller_name|custom_capitalize }}!</h1>

    {% set textFirstCapitalized = \"Ma première lettre est en majuscule\" %}
    <p>{{ textFirstCapitalized|custom_capitalize }}</p>

    {% set textFirstNotCapitalized = \"Ma première lettre est en minuscule\" %}
    <p>{{ textFirstNotCapitalized|custom_capitalize(false) }}</p>

    {{ dump(pokemonList) }}

    <h2>Liste des Pokémon</h2>
    <ul class=\"list-group\">
    {% for pokemon in pokemonList %}
        <li class=\"list-group-item\">
            <span class=\"badge text-bg-primary rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            {{ pokemon.name }}
        </li>
    {% else %}
        <li class=\"list-group-item list-group-item-warning\">
            Aucun Pokémon n'a été trouvé
        </li>
    {% endfor %}
    </ul>

    <h2>Liste des Pokémon (card)</h2>
    <div class=\"row mt-2\">
    {% for pokemon in pokemonList %}

        {% component 'BootstrapCard' with { class: 'col-3', title: (pokemon.name), img: 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'~(pokemon.number)~'.png', link: '#', label: 'Détail' } %}
        
            {% block content %}<span class=\"badge text-bg-info rounded-pill\">#{{ pokemon.number|fill_number('0', 3) }}</span>
            <span class=\"badge text-bg-primary rounded-pill\">{{ pokemon.type }}</span>

        {% endblock %}{% endcomponent %}

    {% endfor %}
    </div>





    {{ component('BootstrapButton', { class: 'my-2', text: 'Bootstrap est disponible!', type: 'success', link: '#' }) }}

    {{ component('BootstrapButton', { text: 'Hello World!', type: 'warning', link: '#', outlined: true }) }}

    <div class=\"row mt-2\">
        <div class=\"col-3\"> 
            {% component 'BootstrapCard' with { title: 'Mon image #1', img: 'https://picsum.photos/200', link: '/images/1', label: 'Cliquez ici' } %}
                {% block content %}<p>Ceci est le texte de mon contenu</p>
                <p>En format <strong>HTML</strong></p>

            {% endblock %}{% endcomponent %}
        </div>
    </div>
    
</div>
{% endblock %}
", "hello_world/index.html.twig", "C:\\Users\\Guill\\Dossier Boulot\\Test-en-cours\\templates\\hello_world\\index.html.twig");
    }
}
