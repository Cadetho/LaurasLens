<?php

/* modular/news.html.twig */
class __TwigTemplate_e54c5c7e451a754c49c5ca03b1db1dd0ea5e1a8415056202808460dd8ede1754 extends Twig_Template
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
        // line 1
        echo "<section id=\"news\" class=\"section-news\">
  <div class=\"container\">
    <h3 class=\"sr-only\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
    <div class=\"bg-inverse\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "news", array()), 2));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 7
                echo "      <div class=\"row\">
        ";
                // line 8
                if ($this->getAttribute($context["news"], "image", array())) {
                    // line 9
                    echo "        <div class=\"";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "col-md-6 p-r-0";
                    } else {
                        echo "col-md-6 col-md-push-6 p-l-0";
                    }
                    echo "\">
          <figure class=\"has-light-mask m-b-0 image-effect\">
            <img src=\"";
                    // line 11
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["news"], "image", array()), array(), "array"), "url", array());
                    echo "\" alt=\"Article thumbnail\" class=\"img-responsive\">
          </figure>
        </div>
        ";
                }
                // line 15
                echo "        <div class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "col-md-6 p-l-0";
                } else {
                    echo "col-md-6 col-md-pull-6 p-r-0";
                }
                echo "\">
          <article class=\"center-block\">
            ";
                // line 17
                if ($this->getAttribute($context["news"], "label", array())) {
                    // line 18
                    echo "            <span class=\"label label-info\">";
                    echo $this->getAttribute($context["news"], "label", array());
                    echo "</span>
            <br>
            ";
                }
                // line 21
                echo "            ";
                if ($this->getAttribute($context["news"], "title", array())) {
                    // line 22
                    echo "            <h5><a href=\"";
                    echo $this->getAttribute($context["news"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["news"], "title", array());
                    echo " <span class=\"icon-arrow-right\"></span></a></h5>
            ";
                }
                // line 24
                echo "            <p class=\"m-b-0\">
              ";
                // line 25
                if ($this->getAttribute($context["news"], "tags", array())) {
                    // line 26
                    echo "              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-tag\"></span>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news"], "tags", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        echo $context["item"];
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</span></a>
              ";
                }
                // line 28
                echo "              ";
                if ($this->getAttribute($context["news"], "time", array())) {
                    // line 29
                    echo "              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-time\"></span> ";
                    echo $this->getAttribute($context["news"], "time", array());
                    echo "</span></a>
              ";
                }
                // line 31
                echo "            </p>
          </article>
        </div>
      </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 37,  161 => 36,  143 => 31,  137 => 29,  134 => 28,  120 => 26,  118 => 25,  115 => 24,  107 => 22,  104 => 21,  97 => 18,  95 => 17,  85 => 15,  78 => 11,  68 => 9,  66 => 8,  63 => 7,  45 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"news\" class=\"section-news\">
  <div class=\"container\">
    <h3 class=\"sr-only\">{{ page.header.title }}</h3>
    <div class=\"bg-inverse\">
      {% for row in page.header.news|batch(2) %}
      {% for news in row %}
      <div class=\"row\">
        {% if news.image %}
        <div class=\"{% if loop.first %}col-md-6 p-r-0{% else %}col-md-6 col-md-push-6 p-l-0{% endif %}\">
          <figure class=\"has-light-mask m-b-0 image-effect\">
            <img src=\"{{ page.media[news.image].url }}\" alt=\"Article thumbnail\" class=\"img-responsive\">
          </figure>
        </div>
        {% endif %}
        <div class=\"{% if loop.first %}col-md-6 p-l-0{% else %}col-md-6 col-md-pull-6 p-r-0{% endif %}\">
          <article class=\"center-block\">
            {% if news.label %}
            <span class=\"label label-info\">{{ news.label }}</span>
            <br>
            {% endif %}
            {% if news.title %}
            <h5><a href=\"{{ news.url }}\">{{ news.title }} <span class=\"icon-arrow-right\"></span></a></h5>
            {% endif %}
            <p class=\"m-b-0\">
              {% if news.tags %}
              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-tag\"></span>{% for item in news.tags %}{{ item }} {% endfor %}</span></a>
              {% endif %}
              {% if news.time %}
              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-time\"></span> {{ news.time }}</span></a>
              {% endif %}
            </p>
          </article>
        </div>
      </div>
      {% endfor %}
      {% endfor %}
    </div>
  </div>
</section>
", "modular/news.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\landio\\templates\\modular\\news.html.twig");
    }
}
