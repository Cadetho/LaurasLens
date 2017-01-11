<?php

/* modular/lightslider.html.twig */
class __TwigTemplate_67cbac477a24b6699616f1ef121ba69f1daa69895f6e0f6445cbe3f42b8dfc3e extends Twig_Template
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
        $context["settings"] = array();
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["header"] ?? null), "lightslider", array())) {
            // line 4
            echo "    ";
            $context["settings"] = $this->getAttribute(($context["header"] ?? null), "lightslider", array());
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "lightslider", array())) {
            // line 8
            echo "    ";
            $context["settings"] = twig_array_merge(($context["settings"] ?? null), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "lightslider", array()));
        }
        // line 10
        echo "
";
        // line 11
        $context["settings"] = twig_array_merge($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.lightslider"), "method"), ($context["settings"] ?? null));
        // line 12
        if ($this->getAttribute(($context["settings"] ?? null), "unique_id", array())) {
            $context["unique_id"] = $this->getAttribute(($context["settings"] ?? null), "unique_id", array());
        } else {
            $context["unique_id"] = ("ls-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(10));
        }
        // line 13
        echo "
<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#";
        // line 16
        echo ($context["unique_id"] ?? null);
        echo "\").lightSlider({
        item: ";
        // line 17
        echo (($this->getAttribute(($context["settings"] ?? null), "item", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "item", array()), 1)) : (1));
        echo ",
        slideMove: ";
        // line 18
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMove", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMove", array()), 3)) : (3));
        echo ",
        slideMargin: ";
        // line 19
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMargin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMargin", array()), 5)) : (5));
        echo ",
        mode: '";
        // line 20
        echo (($this->getAttribute(($context["settings"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "mode", array()), "slide")) : ("slide"));
        echo "',
        cssEasing: '";
        // line 21
        echo (($this->getAttribute(($context["settings"] ?? null), "cssEasing", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "cssEasing", array()), "ease")) : ("ease"));
        echo "',
        easing: '";
        // line 22
        echo (($this->getAttribute(($context["settings"] ?? null), "easing", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "easing", array()), "")) : (""));
        echo "',
        speed: ";
        // line 23
        echo (($this->getAttribute(($context["settings"] ?? null), "speed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "speed", array()), 1000)) : (1000));
        echo ",
        auto: ";
        // line 24
        echo (($this->getAttribute(($context["settings"] ?? null), "auto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "auto", array()), "false")) : ("false"));
        echo ",
        loop: ";
        // line 25
        echo (($this->getAttribute(($context["settings"] ?? null), "loop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "loop", array()), "false")) : ("false"));
        echo ",
        pause: ";
        // line 26
        echo (($this->getAttribute(($context["settings"] ?? null), "pause", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pause", array()), 2000)) : (2000));
        echo ",
        pauseOnHover: ";
        // line 27
        echo (($this->getAttribute(($context["settings"] ?? null), "pauseOnHover", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pauseOnHover", array()), false)) : (false));
        echo ",
        controls: ";
        // line 28
        echo (($this->getAttribute(($context["settings"] ?? null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "controls", array()), "true")) : ("true"));
        echo ",
        keyPress: ";
        // line 29
        echo (($this->getAttribute(($context["settings"] ?? null), "keyPress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "keyPress", array()), "true")) : ("true"));
        echo ",
        adaptiveHeight: ";
        // line 30
        echo (($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", array()), "true")) : ("true"));
        echo ",
        vertical: ";
        // line 31
        echo (($this->getAttribute(($context["settings"] ?? null), "vertical", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "vertical", array()), "false")) : ("false"));
        echo ",
        verticalHeight: ";
        // line 32
        echo (($this->getAttribute(($context["settings"] ?? null), "verticalHeight", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "verticalHeight", array()), 500)) : (500));
        echo ",
        pager: ";
        // line 33
        echo (($this->getAttribute(($context["settings"] ?? null), "pager", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pager", array()), "true")) : ("true"));
        echo ",
        gallery: ";
        // line 34
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery", array()), "false")) : ("false"));
        echo ",
        galleryMargin: ";
        // line 35
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_margin", array()), 5)) : (5));
        echo ",
        thumbMargin: ";
        // line 36
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", array()), 5)) : (5));
        echo ",
        enableTouch: ";
        // line 37
        echo (($this->getAttribute(($context["settings"] ?? null), "enableTouch", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableTouch", array()), "true")) : ("true"));
        echo ",
        enableDrag: ";
        // line 38
        echo (($this->getAttribute(($context["settings"] ?? null), "enableDrag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableDrag", array()), "true")) : ("true"));
        echo ",

    });
  });
</script>


<div id=\"";
        // line 45
        echo ($context["unique_id"] ?? null);
        echo "-wrapper\" class=\"grav-lightslider\">
    ";
        // line 46
        if (($this->getAttribute(($context["settings"] ?? null), "slider_type", array()) == "text")) {
            // line 47
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\" style=\"";
            if ($this->getAttribute(($context["settings"] ?? null), "type_text_height", array())) {
                echo "height: ";
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_height", array());
                echo ";";
            }
            echo "\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "<hr />"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
                // line 49
                echo "            ";
                $context["panel_media"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), (("image-" . $this->getAttribute($context["loop"], "index", array())) . ".jpg"), array(), "array");
                // line 50
                echo "            ";
                $context["panel_image"] = $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "brightness", array(0 => (($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", array()), "-100")) : ("-100"))), "method"), "url", array());
                // line 51
                echo "            ";
                if ((($context["panel_media"] ?? null) && $this->getAttribute(($context["settings"] ?? null), "gallery", array()))) {
                    // line 52
                    echo "                ";
                    $context["panel_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "cropResize", array(0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", array()), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", array()), 100)) : (100))), "method"), "url", array())) . "\"");
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            <li ";
                echo ($context["panel_data_thumb"] ?? null);
                echo ">
                <div class=\"panel-bg\" style=\"
                    ";
                // line 56
                if (($context["panel_image"] ?? null)) {
                    echo "background-image: url(";
                    echo ($context["panel_image"] ?? null);
                    echo ");";
                }
                // line 57
                echo "                    min-height: ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", array()), "auto")) : ("auto"));
                echo ";
                    height: ";
                // line 58
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_height", array()), "auto")) : ("auto"));
                echo ";
                    \">
                    <div class=\"panel-padding ";
                // line 60
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_css_class", array());
                echo "\" style=\"
                        padding: ";
                // line 61
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", array()), 0)) : (0));
                echo " ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", array()), 0)) : (0));
                echo "
                        \">
                        ";
                // line 63
                echo $context["panel"];
                echo "
                    </div>
                </div>
            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </ul>
    ";
        } else {
            // line 70
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 72
                echo "            ";
                if ($this->getAttribute(($context["settings"] ?? null), "gallery", array())) {
                    // line 73
                    echo "                ";
                    $context["image_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute($context["image"], "cropResize", array(0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", array()), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", array()), 100)) : (100))), "method"), "url", array())) . "\"");
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "            <li ";
                echo ($context["image_data_thumb"] ?? null);
                echo ">
                <img src=\"";
                // line 76
                echo $this->getAttribute($context["image"], "url", array());
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </ul>
    ";
        }
        // line 81
        echo "</div>



";
    }

    public function getTemplateName()
    {
        return "modular/lightslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 81,  290 => 79,  281 => 76,  276 => 75,  273 => 74,  270 => 73,  267 => 72,  263 => 71,  258 => 70,  254 => 68,  235 => 63,  228 => 61,  224 => 60,  219 => 58,  214 => 57,  208 => 56,  202 => 54,  199 => 53,  196 => 52,  193 => 51,  190 => 50,  187 => 49,  170 => 48,  159 => 47,  157 => 46,  153 => 45,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  50 => 13,  44 => 12,  42 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set settings = {} %}

{% if header.lightslider %}
    {% set settings =  header.lightslider %}
{% endif %}

{% if page.header.lightslider %}
    {% set settings = settings|merge(page.header.lightslider) %}
{%  endif %}

{% set settings = config.get('plugins.lightslider')|merge(settings) %}
{% if settings.unique_id %}{% set unique_id = settings.unique_id %}{% else %}{% set unique_id = 'ls-' ~ random_string(10) %}{% endif %}

<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#{{ unique_id }}\").lightSlider({
        item: {{ settings.item|default(1) }},
        slideMove: {{ settings.slideMove|default(3) }},
        slideMargin: {{ settings.slideMargin|default(5) }},
        mode: '{{ settings.mode|default('slide') }}',
        cssEasing: '{{ settings.cssEasing|default('ease') }}',
        easing: '{{ settings.easing|default('') }}',
        speed: {{ settings.speed|default(1000) }},
        auto: {{ settings.auto|default('false') }},
        loop: {{ settings.loop|default('false') }},
        pause: {{ settings.pause|default(2000) }},
        pauseOnHover: {{ settings.pauseOnHover|default(false) }},
        controls: {{ settings.controls|default('true') }},
        keyPress: {{ settings.keyPress|default('true') }},
        adaptiveHeight: {{ settings.adaptiveHeight|default('true') }},
        vertical: {{ settings.vertical|default('false') }},
        verticalHeight: {{ settings.verticalHeight|default(500) }},
        pager: {{ settings.pager|default('true') }},
        gallery: {{ settings.gallery|default('false') }},
        galleryMargin: {{ settings.gallery_margin|default(5) }},
        thumbMargin: {{ settings.gallery_thumb_margin|default(5) }},
        enableTouch: {{ settings.enableTouch|default('true') }},
        enableDrag: {{ settings.enableDrag|default('true') }},

    });
  });
</script>


<div id=\"{{ unique_id }}-wrapper\" class=\"grav-lightslider\">
    {% if settings.slider_type == 'text' %}
    <ul id=\"{{ unique_id }}\" style=\"{% if settings.type_text_height %}height: {{ settings.type_text_height }};{% endif %}\">
        {% for panel in page.content|split('<hr />') %}
            {% set panel_media = page.media['image-'~loop.index~'.jpg'] %}
            {% set panel_image = panel_media.brightness(settings.type_text_brightness|default('-100')).url %}
            {% if panel_media and settings.gallery %}
                {% set panel_data_thumb = 'data-thumb=\\\"'~panel_media.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ panel_data_thumb|raw }}>
                <div class=\"panel-bg\" style=\"
                    {% if panel_image %}background-image: url({{ panel_image }});{% endif %}
                    min-height: {{ settings.type_text_min_height|default('auto') }};
                    height: {{ settings.type_text_height|default('auto') }};
                    \">
                    <div class=\"panel-padding {{ settings.type_text_css_class }}\" style=\"
                        padding: {{ settings.type_text_vertical_padding|default(0) }} {{ settings.type_text_horizontal_padding|default(0) }}
                        \">
                        {{ panel|raw }}
                    </div>
                </div>
            </li>
        {% endfor %}
    </ul>
    {% else %}
    <ul id=\"{{ unique_id }}\">
        {% for image in page.media.images %}
            {% if settings.gallery %}
                {% set image_data_thumb = 'data-thumb=\\\"'~image.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ image_data_thumb }}>
                <img src=\"{{ image.url }}\" />
            </li>
        {% endfor %}
    </ul>
    {% endif %}
</div>



", "modular/lightslider.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\plugins\\lightslider\\templates\\modular\\lightslider.html.twig");
    }
}
