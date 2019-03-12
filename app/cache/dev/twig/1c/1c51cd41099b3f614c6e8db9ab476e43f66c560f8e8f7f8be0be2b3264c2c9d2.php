<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_54bac3ca74320e8b7502bc45261a3087b52d7dfaf3fadea2bcadd63888b89128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", [])) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", []) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", [])) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", [])), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", [])), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", [], "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", []), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", []), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  29 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "TwigBundle:Exception:trace.txt.twig", "/home/thinkpad/symfony/Administracion/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
