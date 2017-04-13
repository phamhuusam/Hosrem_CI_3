	<div id="danhbawrapper">
		<div class="db-header">
			<div class="search-box">
				<form action="Search" method="post">
					<input class="keys typeahead" type="text" name="keys" autocomplete="off" spellcheck="false" placeholder="Tìm kiếm bác sĩ">
					<input type="submit" class="searchbtn" name="submit" value="Tìm"> <br />
					<input class="button" type="button" onclick="location.href='<?php echo base_url() ?>danhba/dangky';" value="Đăng ký danh bạ bác sĩ" name="search">
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<div id="ca-container" class="ca-container">
			<div class="ca-wrapper carousel">
			<?php
			$i = 0;
			foreach ($danhsach_Bacsi as $bacsi) {
				$i++;
				echo "<div class='bacsi-box ca-item ca-item-$i'>";
				echo "<div class='ca-item-main'>";
				echo '<img src="' . base_url() . 'public/images/hinh_bacsi/' . $bacsi['HinhAnh'] . '">';
				echo "<span class='title'>";
				echo "<h2 class='tenbs'>" . $bacsi['Ten'] . "</strong></h2>";
				echo "<h3 class='noicongtac'>" . $bacsi['DonViCongTac'] . "</h3>";
				echo "<span class='muiten'><a href='chitietbacsi/".$bacsi['Id']."''><img src='" . base_url() . "public/images/arrow.png'></a></span></span>";
				echo "</div></div>";
			}
			?>
			</div>
		</div>
	</div>
	  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	  <script src="<?php echo base_url() ?>public/slick/slick.js" type="text/javascript" charset="utf-8"></script>
	    <script type="text/javascript">
	    $(document).on('ready', function() {
	     $('.carousel').slick({
			dots: true,
			slidesPerRow: 3,
			rows: 2,
			responsive: [
				{
				  breakpoint: 478,
				  settings: {
					slidesPerRow: 1,
					rows: 1,
				  }
				}
			]
			});
	      });
		  </script>