---
layout:    layout
title:     imagettftextblur&#58; Menu
permalink: /menu.html
---

# Menu

<ul>
    {% assign site_title_with_semicolon = site.title | append: '&#58; ' %}
    {% assign pages_sorted = site.pages | sort: 'nav' %}
    {% for page in pages_sorted %}
        {% if page.nav %}
            <li>
                <a href="{{ page.url | prepend: site.baseurl }}" title="{{ page.title }}">{{ page.title | replace: site_title_with_semicolon, '' }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>
