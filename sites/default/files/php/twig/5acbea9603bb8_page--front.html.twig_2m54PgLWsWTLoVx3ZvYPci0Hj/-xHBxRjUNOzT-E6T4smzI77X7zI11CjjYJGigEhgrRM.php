<?php

/* themes/mediumish_blog/templates/page--front.html.twig */
class __TwigTemplate_abdea47ac1d314adaeea2cff34bc2247f45bd36b9a2f6fc24ac0af7b9a19c03e extends Twig_Template
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
        $tags = array("include" => 48, "if" => 61);
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
        $this->loadTemplate("@mediumish_blog/preloader.html.twig", "themes/mediumish_blog/templates/page--front.html.twig", 48)->display($context);
        // line 49
        echo "
<div class=\"layout-container\">

  ";
        // line 52
        $this->loadTemplate("@mediumish_blog/header.html.twig", "themes/mediumish_blog/templates/page--front.html.twig", 52)->display($context);
        // line 53
        echo "
  ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

  <div class=\"site-content container\">
  ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 62
            echo "    <section class=\"posts\">
      ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
    </section>
  ";
        }
        // line 66
        echo "
    <div class=\"row mediumish-content-sidebar\">
      <div class=\"col-md-8 col-xs-12\">
      ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "recent_posts", array())) {
            // line 70
            echo "        <section class=\"posts\">
          ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "recent_posts", array()), "html", null, true));
            echo "
        </section>
      ";
        }
        // line 74
        echo "      </div>

      <div class=\"col-md-4 col-md-offset-10 col-xs-12 right-sidebar\">
      ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())) {
            // line 78
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
      ";
        }
        // line 80
        echo "      </div>
    </div>

  </div>

  ";
        // line 85
        $this->loadTemplate("@mediumish_blog/footer.html.twig", "themes/mediumish_blog/templates/page--front.html.twig", 85)->display($context);
        // line 86
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/mediumish_blog/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 86,  118 => 85,  111 => 80,  105 => 78,  103 => 77,  98 => 74,  92 => 71,  89 => 70,  87 => 69,  82 => 66,  76 => 63,  73 => 62,  71 => 61,  65 => 58,  60 => 56,  55 => 54,  52 => 53,  50 => 52,  45 => 49,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mediumish_blog/templates/page--front.html.twig", "/opt/bitnami/apps/drupal/htdocs/themes/mediumish_blog/templates/page--front.html.twig");
    }
}
