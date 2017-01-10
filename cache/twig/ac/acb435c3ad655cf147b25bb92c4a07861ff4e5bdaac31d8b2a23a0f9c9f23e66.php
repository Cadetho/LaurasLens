<?php

/* modular/video.html.twig */
class __TwigTemplate_4f9417b869965e0c8cb1f1a53c990b13c3b0e1495d0e4461213742a1c86aa122 extends Twig_Template
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
        echo "
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videos", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 3
            echo "  <section class=\"section-video bg-inverse text-center wp wp-4\">
  <video id=\"video";
            // line 4
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"video-js vjs-default-skin vjs-big-play-centered\" controls poster=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["video"], "poster", array()), array(), "array"), "url", array());
            echo "\" data-setup='{}'>
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["video"], "sources", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 6
                echo "      <source src=\"";
                echo $this->getAttribute($context["source"], "url", array());
                echo "\" type='";
                echo $this->getAttribute($context["source"], "type", array());
                echo "'>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "  </video>
    <script type=\"text/javascript\">
    function htmlVideo() {
      videojs(\"video";
            // line 11
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\", {
        controlBar: {
          timeDivider: false,
          fullscreenToggle: false,
          playToggle: false,
          remainingTimeDisplay: false
        },
        \"height\": \"auto\",
        \"width\": \"auto\"
      }).ready(function() {
        var myPlayer = this;
        var aspectRatio = 5 / 12; // aspect ratio 12:5 (video frame 960x400)
        function resizeVideoJS() {
            var width = document.getElementById(myPlayer.id()).parentElement.offsetWidth;
            myPlayer.width(width).height(width * aspectRatio);
        }
        resizeVideoJS();
        window.onresize = resizeVideoJS;
      });
    }
    </script>
</section>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 8,  52 => 6,  48 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  {% for video in page.header.videos %}
  <section class=\"section-video bg-inverse text-center wp wp-4\">
  <video id=\"video{{ loop.index }}\" class=\"video-js vjs-default-skin vjs-big-play-centered\" controls poster=\"{{ page.media[video.poster].url }}\" data-setup='{}'>
    {% for source in video.sources %}
      <source src=\"{{ source.url }}\" type='{{ source.type }}'>
    {% endfor %}
  </video>
    <script type=\"text/javascript\">
    function htmlVideo() {
      videojs(\"video{{ loop.index }}\", {
        controlBar: {
          timeDivider: false,
          fullscreenToggle: false,
          playToggle: false,
          remainingTimeDisplay: false
        },
        \"height\": \"auto\",
        \"width\": \"auto\"
      }).ready(function() {
        var myPlayer = this;
        var aspectRatio = 5 / 12; // aspect ratio 12:5 (video frame 960x400)
        function resizeVideoJS() {
            var width = document.getElementById(myPlayer.id()).parentElement.offsetWidth;
            myPlayer.width(width).height(width * aspectRatio);
        }
        resizeVideoJS();
        window.onresize = resizeVideoJS;
      });
    }
    </script>
</section>
  {% endfor %}
", "modular/video.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\landio\\templates\\modular\\video.html.twig");
    }
}
