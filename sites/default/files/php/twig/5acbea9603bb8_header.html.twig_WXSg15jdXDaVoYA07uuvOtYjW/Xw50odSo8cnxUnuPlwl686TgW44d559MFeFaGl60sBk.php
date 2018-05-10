<?php

/* @mediumish_blog/header.html.twig */
class __TwigTemplate_a9321aba3ffb676edcd482a87560d4d05fdba23c89a44e2d74c61a316933523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<nav class=\"navbar navbar-toggleable-md navbar-light bg-white fixed-top-header mediumnavigation\">
  <div class=\"container\">
  ";
        // line 3
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 4
            echo "    <div class=\"row\">
      <div class=\"col-sm-12 col-md-4 mediumish-site-branding\">

      ";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "

      ";
            // line 9
            if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
                // line 10
                echo "        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      ";
            }
            // line 14
            echo "
      </div>
      <div class=\"col-sm-12 col-md-8\">

      ";
            // line 18
            if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
                // line 19
                echo "        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
          ";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 23
            echo "      </div>
    </div>
  ";
        }
        // line 26
        echo "  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "@mediumish_blog/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  84 => 23,  78 => 20,  75 => 19,  73 => 18,  67 => 14,  61 => 10,  59 => 9,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@mediumish_blog/header.html.twig", "/opt/bitnami/apps/drupal/htdocs/themes/mediumish_blog/templates/header.html.twig");
    }
}
