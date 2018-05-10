<?php

/* themes/mediumish_blog/templates/views-view--archive.html.twig */
class __TwigTemplate_4d22d6f0653fc41fc8956a0787f991035c4617d0df8d3b7da7f6b954dbcf8611 extends Twig_Template
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
        $tags = array("set" => 36, "if" => 45);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 36
        $context["classes"] = array(0 => ((        // line 37
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 40
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
  ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 45
        if (($context["header"] ?? null)) {
            // line 46
            echo "    <header>
      ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
    </header>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
        echo "
  ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
        echo "

  <section class=\"mediumish-archive\">
  ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
        echo "
  </section>
  ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
        echo "

  ";
        // line 59
        if (($context["pager"] ?? null)) {
            // line 60
            echo "  <div class=\"bottompagination\"><span class=\"navigation\">
  ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
  </span></div>
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
        echo "

  ";
        // line 68
        if (($context["footer"] ?? null)) {
            // line 69
            echo "    <footer>
      ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/mediumish_blog/templates/views-view--archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 74,  132 => 73,  126 => 70,  123 => 69,  121 => 68,  116 => 66,  112 => 65,  109 => 64,  103 => 61,  100 => 60,  98 => 59,  93 => 57,  88 => 55,  82 => 52,  78 => 51,  75 => 50,  69 => 47,  66 => 46,  64 => 45,  59 => 43,  55 => 42,  51 => 41,  46 => 40,  44 => 37,  43 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mediumish_blog/templates/views-view--archive.html.twig", "/opt/bitnami/apps/drupal/htdocs/themes/mediumish_blog/templates/views-view--archive.html.twig");
    }
}
