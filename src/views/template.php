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
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(<?= $id ?>, "init", {
		clickmap:<?= $clickmap ? 'true' : 'false' ?>,
		trackLinks:<?= $trackLinks ? 'true' : 'false' ?>,
		accurateTrackBounce:<?= $accurateTrackBounce ? 'true' : 'false' ?>,
		webvisor:<?= $webvisor ? 'true' : 'false' ?>
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/<?= $id ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->