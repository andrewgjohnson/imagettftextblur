---
layout:    default
title:     imagettftextblur • Readme
permalink: /
nav_order: 1
nav_text:  Readme
---

{% capture content %}{% include README.md %}{% endcapture %}
{{ content | markdownify }}

<!-- Make the avatar image appear/act as though it weren’t a link -->
<style>#avatar{cursor:default;padding-top:10px}</style>
<script>
    (function() {
        var avatarElement = document.getElementById('avatar');
        if (avatarElement !== null) {
            avatarElement.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
        }
    })();
</script>
