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

/* _partials/header.html.twig */
class __TwigTemplate_5382c7cf2a4b97845dfc80033579dc95 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/header.html.twig"));

        // line 1
        yield "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger\">
        <div class=\"container\">
            <a class=\"navbar-brand fw-bold\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                PokéDwwm
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_index");
        yield "\" class=\"nav-link\">Pokémons</a>
                    </li>

                    ";
        // line 17
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pokemon_create");
            yield "\" class=\"nav-link\">+ Ajouter un Pokémon</a>
                    </li>

                    ";
            // line 23
            yield "                    ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROF")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "                    <li class=\"nav-item\">
                        <a href=\"";
                // line 25
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type");
                yield "\" class=\"nav-link\">Types</a>
                    </li>
                    ";
            }
            // line 28
            yield "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link\">Se déconnecter</a>
                    </li>
                    ";
        } else {
            // line 33
            yield "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link\">S'inscrire</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Se connecter</a>
                    </li>
                    ";
        }
        // line 40
        yield "                </ul>
            </div>
            <div class=\"nav-dot\"></div>
        </div>
    </nav>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/header.html.twig";
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
        return array (  120 => 40,  114 => 37,  108 => 34,  105 => 33,  99 => 30,  95 => 28,  89 => 25,  86 => 24,  83 => 23,  77 => 19,  74 => 18,  71 => 17,  65 => 13,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger\">
        <div class=\"container\">
            <a class=\"navbar-brand fw-bold\" href=\"{{ path('app_dashboard') }}\">
                PokéDwwm
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_pokemon_index') }}\" class=\"nav-link\">Pokémons</a>
                    </li>

                    {# On vérifie si un utilisateur est connecté ou non #}
                    {% if app.user %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_pokemon_create') }}\" class=\"nav-link\">+ Ajouter un Pokémon</a>
                    </li>

                    {# Vérification si rôle PROF #}
                    {% if is_granted('ROLE_PROF') %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_type') }}\" class=\"nav-link\">Types</a>
                    </li>
                    {% endif %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Se déconnecter</a>
                    </li>
                    {% else %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_register') }}\" class=\"nav-link\">S'inscrire</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_login') }}\" class=\"nav-link\">Se connecter</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
            <div class=\"nav-dot\"></div>
        </div>
    </nav>
</header>", "_partials/header.html.twig", "C:\\Users\\guillaume.hess\\Documents\\Symfony\\pokedwwm_webapp\\templates\\_partials\\header.html.twig");
    }
}
