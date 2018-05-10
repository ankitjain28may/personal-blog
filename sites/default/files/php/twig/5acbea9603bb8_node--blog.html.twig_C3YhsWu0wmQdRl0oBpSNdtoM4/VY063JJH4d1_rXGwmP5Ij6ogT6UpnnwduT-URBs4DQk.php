<?php

/* themes/mediumish_blog/templates/node--blog.html.twig */
class __TwigTemplate_6e368adb7c845313c02b1c43aad78aa4d94f2d95f74f709e3b7f6ad00403271c extends Twig_Template
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
        $tags = array("if" => 78);
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

        // line 75
        echo "
<div class=\"row post-top-meta\">
  <div class=\"col-md-2 col-sm-2 mediumish-author\">
  ";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["author_picture"] ?? null), "#user", array(), "array"), "user_picture", array()), "target_id", array())) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
  ";
        } else {
            // line 81
            echo "    <a href=\"#\"><img class=\"author-thumb\" src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_default_image"] ?? null), "html", null, true));
            echo "\" alt=\"anonymous\"></a>
  ";
        }
        // line 83
        echo "  </div>
  <div class=\"col-md-10 col-sm-10 mediumish-author-details\">
    ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
        echo "
    <span class=\"author-description mediumish-description\">";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_bio"] ?? null), "html", null, true));
        echo "</span>
    <span class=\"post-date\">";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</span>
  </div>
</div>

";
        // line 91
        if ($this->getAttribute(($context["node"] ?? null), "hasField", array(0 => "field_image"), "method")) {
            // line 92
            echo "<!-- Begin Featured Image -->
  <div class=\"mediumish-blog-image\">
  ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
            echo "
  </div>
  <!-- End Featured Image -->
";
        }
        // line 98
        echo "
";
        // line 99
        if ($this->getAttribute(($context["node"] ?? null), "hasField", array(0 => "body"), "method")) {
            // line 100
            echo "<!-- Begin Post Content -->
<div class=\"mediumish-blog-body\">
";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
            echo "
</div>
<!-- End Post Content -->
";
        }
        // line 106
        echo "
";
        // line 107
        if ($this->getAttribute(($context["node"] ?? null), "hasField", array(0 => "field_tags"), "method")) {
            // line 108
            echo "<!-- Begin Tags -->
<div class=\"mediumish-blog-tags\">
";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_tags", array()), "html", null, true));
            echo "
</div>
<!-- End Tags -->
";
        }
        // line 114
        echo "
";
        // line 115
        if ($this->getAttribute(($context["node"] ?? null), "hasField", array(0 => "field_category"), "method")) {
            // line 116
            echo "<!-- Begin Categories -->
<div class=\"mediumish-blog-category\">
";
            // line 118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_category", array()), "html", null, true));
            echo "
</div>
<!-- End Categories -->
";
        }
        // line 122
        echo "

";
        // line 124
        if ($this->getAttribute(($context["node"] ?? null), "hasField", array(0 => "field_comments"), "method")) {
            // line 125
            echo "<div class=\"mediumish-blog-comment\">
";
            // line 126
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_comments", array()), "html", null, true));
            echo "
</div>
";
        }
        // line 129
        echo "
<div class=\"hideshare\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/mediumish_blog/templates/node--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 129,  151 => 126,  148 => 125,  146 => 124,  142 => 122,  135 => 118,  131 => 116,  129 => 115,  126 => 114,  119 => 110,  115 => 108,  113 => 107,  110 => 106,  103 => 102,  99 => 100,  97 => 99,  94 => 98,  87 => 94,  83 => 92,  81 => 91,  74 => 87,  70 => 86,  66 => 85,  62 => 83,  56 => 81,  50 => 79,  48 => 78,  43 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mediumish_blog/templates/node--blog.html.twig", "/opt/bitnami/apps/drupal/htdocs/themes/mediumish_blog/templates/node--blog.html.twig");
    }
}
