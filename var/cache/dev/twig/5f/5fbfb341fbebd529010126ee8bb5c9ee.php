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

/* components/BootstrapCard.html.twig */
class __TwigTemplate_468ce7b5d912b3deb17211bca4626332 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/BootstrapCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/BootstrapCard.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"card\">
        <img src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "img", [], "any", false, false, false, 3), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Image\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</h5>

            ";
        // line 7
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 8
        yield "
            <div class=\"mt-3\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "actions", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["btn"]) {
            // line 11
            yield "                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("BootstrapButton", ["class" => "d-inline-block", "text" => CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "label", [], "any", false, false, false, 11), "type" => CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "type", [], "any", false, false, false, 11), "link" => CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "link", [], "any", false, false, false, 11)]);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/BootstrapCard.html.twig";
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
        return array (  99 => 7,  84 => 13,  75 => 11,  71 => 10,  67 => 8,  65 => 7,  60 => 5,  55 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes }}>
    <div class=\"card\">
        <img src=\"{{ this.img }}\" class=\"card-img-top\" alt=\"Image\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ this.title }}</h5>

            {% block content %}{% endblock %}

            <div class=\"mt-3\">
            {% for btn in this.actions %}
                {{ component('BootstrapButton', { class: 'd-inline-block', text: (btn.label), type: btn.type, link: (btn.link) }) }}
            {% endfor %}
            </div>
        </div>
    </div>
</div>
", "components/BootstrapCard.html.twig", "C:\\Users\\guillaume.hess\\Documents\\Symfony\\pokedwwm_webapp\\templates\\components\\BootstrapCard.html.twig");
    }
}
