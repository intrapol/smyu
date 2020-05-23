<section>
	<article>
		<div class="head"><?php echo $values["article_content"][0]["notice_head"]; ?></div>
		<?php foreach($values["article_content"] as $contents ) {?>
		<div class="content">
			<div class="content-date"><?php echo $contents["notice_date"]; ?></div>	
			<div class="content-head"><a href="?url=user&no=<?php echo $contents["user_no"]; ?>"><?php echo $contents['user_name']; ?></a></div>
			<div class="content-body"><?php echo $contents["notice_body"] ; ?></div>
		</div>
		<?php } ?>
	</article>
	<aside>
		<div class="head">Hizli Baglantilar</div>
		<div class="bar">
			<ul>
				<li><a href="https://obs.cumhuriyet.edu.tr/">OBS Ogrenci Bilgi Sistemi</a></li>
				<li><a href="http:./sqlmanager/">SQL Manager</a></li>
				<li><a href="http:./webexamsys/">WEB Exams</a></li>
				<li><a href="http:./phpweb/">PHP Server</a></li>
				<li><a href="ftp:./">FTP Server</a></li>
				<li><a href="http://www.cumhuriyet.edu.tr/haber/">Haberler</a></li>
				<li><a href="http://www.cumhuriyet.edu.tr/etkinlik/">Etkinlikler</a></li>
				<li><a href="http://www.cumhuriyet.edu.tr/duyuru/">Duyurular</a></li>
				<!--Cu-Radio <li><audio controls="" autoplay="autoplay"><source src="http://95.173.162.186:9804/;stream.mp3" type="audio/mp3">Tarayıcınız Desteklemiyor</audio></li> Cu-Radio-->
			</ul>
		</div>
	</aside>
</section>

