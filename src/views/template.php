<?php

/* @var $this \yii\web\View */
/* @var $id integer */
/* @var $clickmap boolean */
/* @var $trackLinks boolean */
/* @var $accurateTrackBounce boolean */
/* @var $webvisor boolean */

?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter<?= $id ?> = new Ya.Metrika2({
					id:<?= $id ?>,
					clickmap:<?= $clickmap ? 'true' : 'false' ?>,
					trackLinks:<?= $trackLinks ? 'true' : 'false' ?>,
					accurateTrackBounce:<?= $accurateTrackBounce ? 'true' : 'false' ?>,
					webvisor:<?= $webvisor ? 'true' : 'false' ?>
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/tag.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/<?= $id ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
