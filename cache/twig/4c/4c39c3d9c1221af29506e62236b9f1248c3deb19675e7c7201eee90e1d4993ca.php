<?php

/* partials/navigation.html.twig */
class __TwigTemplate_445ed018d92d1a2430d7004944893ac7385b61f33abbfbf10386871f4cff27a5 extends Twig_Template
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
        echo "<nav class=\"navbar ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array());
        } else {
            echo "navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top";
        }
        echo "\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        if ( !$this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array())) {
            echo ($context["base_url_absolute"] ?? null);
        } else {
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array());
        }
        echo "\">
            ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "icon", array())) {
            echo "<span class=\"icon-";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "icon", array());
            echo "\"></span>";
        }
        // line 5
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text", array())) {
            echo "<span class=\"sr-only\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text", array());
            echo "</span>";
        }
        // line 6
        echo "        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                ";
        // line 15
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 16
        echo "                ";
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 19
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 20
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"";
                // line 21
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 22
                echo $this->getAttribute($context["page"], "menu", array());
                echo "<span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                ";
            }
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 28
            echo "                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 34
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 35
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_module"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"#";
                // line 36
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
                ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                ";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 42
            echo "                <li class=\"nav-item nav-item-toggable hidden-sm-up\">
                    <form class=\"navbar-form\">
                        ";
            // line 44
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 44)->display($context);
            // line 45
            echo "                    </form>
                </li>
                <li class=\"navbar-divider hidden-sm-down\"></li>
                <li class=\"nav-item dropdown nav-dropdown-search hidden-sm-down\">
                    <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"icon-search\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-search\" aria-labelledby=\"dropdownMenu1\">
                        <form class=\"navbar-form\">
                            ";
            // line 54
            $context["form2"] = true;
            // line 55
            echo "                            ";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 55)->display($context);
            // line 56
            echo "                        </form>
                    </div>
                </li>
                ";
        }
        // line 60
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array())) {
            // line 61
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())) {
                // line 62
                echo "                <li class=\"nav-item dropdown hidden-sm-down textselect-off\">
                    ";
                // line 63
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 64
                    echo "                        <a class=\"nav-link dropdown-toggle nav-dropdown-user\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"http://www.gravatar.com/avatar/";
                    // line 65
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                    echo "?s=40\" class=\"img-circle\" alt=\"Gravatar\"/><span class=\"icon-caret-down\"></span>
                        </a>
                    ";
                }
                // line 68
                echo "                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated\" aria-labelledby=\"dropdownMenu2\">
                        <div class=\"media\">
                        ";
                // line 70
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 71
                    echo "                        <div class=\"media-left\">
                            <img src=\"http://www.gravatar.com/avatar/";
                    // line 72
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                    echo "?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                        </div>
                        ";
                }
                // line 75
                echo "                            ";
                if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()))) {
                    // line 76
                    echo "                            <div class=\"media-body media-middle\">
                                ";
                    // line 77
                    if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) {
                        // line 78
                        echo "                                <h5 class=\"media-heading\">";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                        echo "</h5>
                                ";
                    }
                    // line 80
                    echo "                                ";
                    if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                        // line 81
                        echo "                                <h6>";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                        echo "</h6>
                                ";
                    }
                    // line 83
                    echo "                            </div>
                            ";
                }
                // line 85
                echo "                        </div>
                        <a href=\"";
                // line 86
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
                        <a href=\"";
                // line 87
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
                        <a href=\"";
                // line 88
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
                        ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "userlinks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 90
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" class=\"dropdown-item text-uppercase\">";
                    echo $this->getAttribute($context["item"], "text", array());
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["uri"] ?? null), "url", array());
                echo "/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
                        <a href=\"";
                // line 93
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/users/";
                echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array());
                echo "\" class=\"btn-circle has-gradient pull-right\">
                            <span class=\"sr-only\">Edit</span>
                            <span class=\"icon-edit\"></span>
                        </a>
                    </div>
                </li>
                ";
            } else {
                // line 100
                echo "                <li class=\"nav-item nav-item-toggable \">
                    <a class=\"nav-link\" href=\"login\">
                        ";
                // line 102
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN");
                echo "
                    </a>
                </li>
                ";
            }
            // line 106
            echo "                ";
        }
        // line 107
        echo "            </ul>
        </div>
        ";
        // line 109
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 110
            echo "        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                ";
            // line 112
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                // line 113
                echo "                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/";
                // line 114
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                echo "?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                ";
            }
            // line 117
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()))) {
                // line 118
                echo "                <div class=\"media-body media-middle\">
                    ";
                // line 119
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) {
                    // line 120
                    echo "                    <h5 class=\"media-heading\">";
                    echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                    echo "</h5>
                    ";
                }
                // line 122
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 123
                    echo "                    <h6>";
                    echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                    echo "</h6>
                    ";
                }
                // line 125
                echo "                </div>
                ";
            }
            // line 127
            echo "            </div>
            <a href=\"";
            // line 128
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"";
            // line 129
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"";
            // line 130
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "userlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 132
                echo "                <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\" class=\"dropdown-item text-uppercase\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "            <a href=\"";
            echo $this->getAttribute(($context["uri"] ?? null), "url", array());
            echo "/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"";
            // line 135
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/users/";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array());
            echo "\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        ";
        }
        // line 141
        echo "    </div>
</nav>
";
    }

    // line 16
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 16,  397 => 141,  386 => 135,  381 => 134,  370 => 132,  366 => 131,  362 => 130,  358 => 129,  354 => 128,  351 => 127,  347 => 125,  341 => 123,  338 => 122,  332 => 120,  330 => 119,  327 => 118,  324 => 117,  318 => 114,  315 => 113,  313 => 112,  309 => 110,  307 => 109,  303 => 107,  300 => 106,  293 => 102,  289 => 100,  277 => 93,  272 => 92,  261 => 90,  257 => 89,  253 => 88,  249 => 87,  245 => 86,  242 => 85,  238 => 83,  232 => 81,  229 => 80,  223 => 78,  221 => 77,  218 => 76,  215 => 75,  209 => 72,  206 => 71,  204 => 70,  200 => 68,  194 => 65,  191 => 64,  189 => 63,  186 => 62,  183 => 61,  180 => 60,  174 => 56,  171 => 55,  169 => 54,  158 => 45,  156 => 44,  152 => 42,  150 => 41,  147 => 40,  141 => 39,  133 => 36,  128 => 35,  125 => 34,  122 => 33,  117 => 32,  106 => 29,  103 => 28,  98 => 27,  92 => 26,  85 => 22,  81 => 21,  76 => 20,  73 => 19,  70 => 18,  65 => 17,  63 => 16,  61 => 15,  50 => 6,  43 => 5,  37 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar {% if page.header.navbar_class %}{{ page.header.navbar_class }}{% else %}navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top{% endif %}\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{% if not site.logo.url %}{{ base_url_absolute }}{% else %}{{ site.logo.url }}{% endif %}\">
            {% if site.logo.icon %}<span class=\"icon-{{ site.logo.icon }}\"></span>{% endif %}
            {% if site.logo.text %}<span class=\"sr-only\">{{ site.logo.text }}</span>{% endif %}
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
                {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
                {% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"nav-item nav-item-toggable {{ current_page }}\">
                    <a class=\"nav-link\" href=\"{{ page.url }}\">
                        {{ page.menu }}<span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
                </li>
                {% endfor %}
                {% for module in page.collection() %}
                {% if not module.header.hidemenu %}
                {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
                <li class=\"nav-item nav-item-toggable {{ current_module }}\">
                    <a class=\"nav-link\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
                </li>
                {% endif %}
                {% endfor %}

                {% if config.plugins.simplesearch.enabled %}
                <li class=\"nav-item nav-item-toggable hidden-sm-up\">
                    <form class=\"navbar-form\">
                        {% include 'partials/simplesearch_searchbox.html.twig' %}
                    </form>
                </li>
                <li class=\"navbar-divider hidden-sm-down\"></li>
                <li class=\"nav-item dropdown nav-dropdown-search hidden-sm-down\">
                    <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"icon-search\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-search\" aria-labelledby=\"dropdownMenu1\">
                        <form class=\"navbar-form\">
                            {% set form2 = true %}
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </form>
                    </div>
                </li>
                {% endif %}
                {% if config.plugins.login.enabled %}
                {% if grav.user.username %}
                <li class=\"nav-item dropdown hidden-sm-down textselect-off\">
                    {% if grav.user.email %}
                        <a class=\"nav-link dropdown-toggle nav-dropdown-user\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=40\" class=\"img-circle\" alt=\"Gravatar\"/><span class=\"icon-caret-down\"></span>
                        </a>
                    {% endif %}
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated\" aria-labelledby=\"dropdownMenu2\">
                        <div class=\"media\">
                        {% if grav.user.email %}
                        <div class=\"media-left\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                        </div>
                        {% endif %}
                            {% if grav.user.fullname or grav.user.email %}
                            <div class=\"media-body media-middle\">
                                {% if grav.user.fullname %}
                                <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                                {% endif %}
                                {% if grav.user.email %}
                                <h6>{{ grav.user.email }}</h6>
                                {% endif %}
                            </div>
                            {% endif %}
                        </div>
                        <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
                        <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
                        <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
                        {% for item in site.userlinks %}
                            <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
                        {% endfor %}
                        <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
                        <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                            <span class=\"sr-only\">Edit</span>
                            <span class=\"icon-edit\"></span>
                        </a>
                    </div>
                </li>
                {% else %}
                <li class=\"nav-item nav-item-toggable \">
                    <a class=\"nav-link\" href=\"login\">
                        {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}
                    </a>
                </li>
                {% endif %}
                {% endif %}
            </ul>
        </div>
        {% if config.plugins.login.enabled and grav.user.username %}
        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                {% if grav.user.email %}
                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                {% endif %}
                {% if grav.user.fullname or grav.user.email %}
                <div class=\"media-body media-middle\">
                    {% if grav.user.fullname %}
                    <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                    {% endif %}
                    {% if grav.user.email %}
                    <h6>{{ grav.user.email }}</h6>
                    {% endif %}
                </div>
                {% endif %}
            </div>
            <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            {% for item in site.userlinks %}
                <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
            {% endfor %}
            <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        {% endif %}
    </div>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\landio\\templates\\partials\\navigation.html.twig");
    }
}
