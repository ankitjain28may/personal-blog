<?php

/* themes/mediumish_blog/templates/page--archive.html.twig */
class __TwigTemplate_51dbde69954a728e609db2a6e2f1bf69e556d5cae92ec5f3b35d02e30be83a5d extends Twig_Template
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
        $tags = array("include" => 48, "if" => 58);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 48
        $this->loadTemplate("@mediumish_blog/preloader.html.twig", "themes/mediumish_blog/templates/page--archive.html.twig", 48)->display($context);
        // line 49
        echo "
<div class=\"layout-container\">

  ";
        // line 52
        $this->loadTemplate("@mediumish_blog/header.html.twig", "themes/mediumish_blog/templates/page--archive.html.twig", 52)->display($context);
        // line 53
        echo "

  <div class=\"site-content container\">
    <div class=\"row mediumish-content-sidebar\">
      <div class=\"col-md-8 col-xs-12 mediumish-main-content\">
        ";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 59
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        ";
        }
        // line 61
        echo "      </div>

      <div class=\"col-md-4 col-md-offset-10 col-xs-12 right-sidebar\">
      ";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())) {
            // line 65
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
      ";
        }
        // line 67
        echo "      </div>
    </div>
  </div>


  ";
        // line 72
        $this->loadTemplate("@mediumish_blog/footer.html.twig", "themes/mediumish_blog/templates/page--archive.html.twig", 72)->display($context);
        // line 73
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/mediumish_blog/templates/page--archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 73,  87 => 72,  80 => 67,  74 => 65,  72 => 64,  67 => 61,  61 => 59,  59 => 58,  52 => 53,  50 => 52,  45 => 49,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mediumish_blog/templates/page--archive.html.twig", "/opt/bitnami/apps/drupal/htdocs/themes/mediumish_blog/templates/page--archive.html.twig");
    }
}
