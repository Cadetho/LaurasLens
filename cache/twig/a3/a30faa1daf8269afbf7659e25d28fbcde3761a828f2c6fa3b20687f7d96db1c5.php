<?php

/* modular/pricing.html.twig */
class __TwigTemplate_fbf7b49ada7d1b0493cedbdb7986471700f59d22f3a5ba42db378449dbbd10e8 extends Twig_Template
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
        echo "<section id=\"subscriptions\" class=\"section-pricing bg-faded text-center\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "pricing", array())) {
            // line 5
            echo "    <div class=\"row p-y-lg\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "pricing", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "      <div class=\"col-md-4 ";
                if ( !$this->getAttribute($context["item"], "highlighted", array())) {
                    echo "p-t-md wp";
                } else {
                    echo "stacking-top";
                }
                if ($this->getAttribute($context["item"], "additional_css", array())) {
                    echo " ";
                    echo $this->getAttribute($context["item"], "additional_css", array());
                }
                echo " \">
        <div class=\"card pricing-box ";
                // line 8
                if ($this->getAttribute($context["item"], "highlighted", array())) {
                    echo "pricing-best p-x-0";
                }
                echo "\">
          ";
                // line 9
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 10
                    echo "          <div class=\"card-header text-uppercase\">
            ";
                    // line 11
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
          </div>
          ";
                }
                // line 14
                echo "          <div class=\"card-block\">
            ";
                // line 15
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 16
                    echo "            <p class=\"card-title\">";
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</p>
            ";
                }
                // line 18
                echo "            <h4 class=\"card-text\">
              ";
                // line 19
                if ($this->getAttribute($context["item"], "currency", array())) {
                    // line 20
                    echo "              <sup class=\"pricing-box-currency\">";
                    echo $this->getAttribute($context["item"], "currency", array());
                    echo "</sup>
              ";
                }
                // line 22
                echo "              ";
                if ($this->getAttribute($context["item"], "price", array())) {
                    // line 23
                    echo "              <span class=\"pricing-box-price\">";
                    echo $this->getAttribute($context["item"], "price", array());
                    echo "</span>
              ";
                }
                // line 25
                echo "              ";
                if ($this->getAttribute($context["item"], "period", array())) {
                    // line 26
                    echo "              <small class=\"text-muted text-uppercase\">";
                    echo $this->getAttribute($context["item"], "period", array());
                    echo "</small>
              ";
                }
                // line 28
                echo "            </h4>
          </div>
          ";
                // line 30
                if ($this->getAttribute($context["item"], "features", array())) {
                    // line 31
                    echo "          <ul class=\"list-group list-group-flush p-x\">
            ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "features", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 33
                        echo "            <li class=\"list-group-item\">";
                        echo $this->getAttribute($context["feature"], "item", array());
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "          </ul>
          ";
                }
                // line 37
                echo "          ";
                if ($this->getAttribute($context["item"], "button_text", array())) {
                    // line 38
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["item"], "button_url", array());
                    echo "\" class=\"btn btn-primary";
                    if ( !$this->getAttribute($context["item"], "highlighted", array())) {
                        echo "-outline";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["item"], "button_text", array());
                    echo "</a>
          ";
                }
                // line 40
                echo "        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </div>
    ";
        }
        // line 45
        echo "  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  155 => 43,  147 => 40,  135 => 38,  132 => 37,  128 => 35,  119 => 33,  115 => 32,  112 => 31,  110 => 30,  106 => 28,  100 => 26,  97 => 25,  91 => 23,  88 => 22,  82 => 20,  80 => 19,  77 => 18,  71 => 16,  69 => 15,  66 => 14,  60 => 11,  57 => 10,  55 => 9,  49 => 8,  36 => 7,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"subscriptions\" class=\"section-pricing bg-faded text-center\">
  <div class=\"container\">
    {{ page.content }}
    {% if page.header.pricing %}
    <div class=\"row p-y-lg\">
      {% for item in page.header.pricing %}
      <div class=\"col-md-4 {% if not item.highlighted %}p-t-md wp{% else %}stacking-top{% endif %}{% if item.additional_css %} {{ item.additional_css }}{% endif %} \">
        <div class=\"card pricing-box {% if item.highlighted %}pricing-best p-x-0{% endif %}\">
          {% if item.title %}
          <div class=\"card-header text-uppercase\">
            {{ item.title }}
          </div>
          {% endif %}
          <div class=\"card-block\">
            {% if item.description %}
            <p class=\"card-title\">{{ item.description }}</p>
            {% endif %}
            <h4 class=\"card-text\">
              {% if item.currency %}
              <sup class=\"pricing-box-currency\">{{ item.currency }}</sup>
              {% endif %}
              {% if item.price %}
              <span class=\"pricing-box-price\">{{ item.price }}</span>
              {% endif %}
              {% if item.period %}
              <small class=\"text-muted text-uppercase\">{{ item.period }}</small>
              {% endif %}
            </h4>
          </div>
          {% if item.features %}
          <ul class=\"list-group list-group-flush p-x\">
            {% for feature in item.features %}
            <li class=\"list-group-item\">{{ feature.item }}</li>
            {% endfor %}
          </ul>
          {% endif %}
          {% if item.button_text %}
          <a href=\"{{ item.button_url }}\" class=\"btn btn-primary{% if not item.highlighted %}-outline{% endif %}\">{{ item.button_text }}</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    {% endif %}
  </div>
</section>
", "modular/pricing.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\landio\\templates\\modular\\pricing.html.twig");
    }
}
