---
published: true
---

{% block stylesheet %}
{% do assets.addCss('theme://css/slider.css') %}
{% endblock %}
{{ assets.css() }}
    <div id="slider">
        <figure>
        {% for image in page.media.images %}
            {{ image.html }}
        {% endfor %}
        </figure>
    </div>

    {{ page.content }}