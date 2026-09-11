<?php $nor = 10; include "admin/cms_db.php"; 
 
$title="Accretion Live News: Latest Media News Live | Media Live – Accretion";
$desc="Media News Get all the latest news on Media, air ambulance news, helicopter news, private plane news, helicopter joyride news, charter news, vaishno devi by helicopter and Analysis News more on accretion media.";
$keywords="media news, latest news, live news, live media, accretion live news.";


include "header.php"; ?>

<section class="parallax-media">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
						<center>
            	<div class="banner-head"><h1>Accretion News Media</h1></div>
                <div class="banner-subhead">Home / MEDIA</div>
             </center>
            </div>
        </div>
    </div>
</section>

<section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
          </div>
          <div class="row">
            <!-- Recomended item-->
						<?php
						$sql = $dbh->prepare("SELECT * FROM sub_cat");
						$sql->execute();
						$total_records = $sql->rowCount();
						($total_records%$nor == 0 )? $pg_no = (int)($total_records/$nor) : $pg_no = (int)($total_records/$nor)+1;

						if(isset($_GET['page'])  ){
							$currentPage = $_GET['page'];
							$to = ($currentPage-1)*$nor;
						}else{
							$currentPage = 1;
							$to = 0;
						}
						$sql = $dbh->prepare("SELECT * FROM sub_cat order by cat_id desc limit $to,$nor");
						$sql->execute();
						$rows = $sql->fetchAll();
						foreach($rows as $row){

						 ?>
						 <div class="col-md-6 recom-bot">
						 <div class="recom-item">
						 <div class="recom-media">
						 <div class="pic"><img style="height: 250px; width: 100%" src="<?php echo "//cms.accretion.in/cat_upload/".$row['image']; ?>"  data-at2x="images/aboutus-banner.jpeg"  alt="media"></div>
						 <div class="location">Publish Date :&nbsp;<?php echo $row['date'] !='0000-00-00' ? $row['date'] : ""; ?></div>
						 </div>
						 <!-- Recomended Content-->
						 <div class="recom-item-body recom-bot">
						 <img src="<?php echo "//cms.accretion.in/cat_upload/".$row['logo']; ?>" class="img-responsive" alt="logo" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
						 <h6 class="blog-title" style="font-size:15px;"><?php echo $row['title']; ?></h6>

						 <div class="recom-price"><?php echo $row['description']; ?></div>
						 <br>
						 <div class="text-center">
						 <a href="<?php echo "//cms.accretion.in/cat_upload/".$row['image']; ?>" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
						 </div>

						 </div>
						 <!-- Recomended Image-->
						 </div>
						 </div>
					 <?php } /* ?>
                        <div class="col-md-6 recom-bot">
              <div class="recom-item ">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img1.jpg"  data-at2x="admin/img/12th jan free press news.jpg" loading="lazy" alt="Free Press media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="admin/img/miniby.jpg.php" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Free Press </h6>

                  <div class="recom-price">Air Charter Services for Udaipur Begins </div>
            <br>
                <div class="text-center">
                  <a href="http://www.freepressjournal.in/indore/indore-air-charter-services-for-udaipur-begins/1000952" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img2.jpg"  data-at2x="admin/img/Accretion-Aviation-Yacht.jpg" loading="lazy" alt="Aviation Yacht media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo2.png" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Your Story </h6>

                  <div class="recom-price">Accretion Aviation – The UBER of private charters and y</div>
            <br>
                <div class="text-center">
                  <a href="https://yourstory.com/2017/03/accretion-aviation/" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img3.jpg"  data-at2x="admin/img/free press.jpg" loading="lazy" alt="Free Press media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo3.png" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Free Press </h6>

                  <div class="recom-price">Air Ambulance Launched In City </div>
            <br>
                <div class="text-center">
                  <a href="http://www.freepressjournal.in/indore/air-ambulance-launched-in-city/872088" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img4.gif"  data-at2x="admin/img/201612262254274432_Aviation-aggregator-eyes-city-for-high-returns_SECVPF.gif" loading="lazy" alt="Aviation aggregator media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo4.jpg" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">DT NEXT </h6>

                  <div class="recom-price">Aviation aggregator eyes city for high returns</div>
            <br>
                <div class="text-center">
                  <a href="http://www.dtnext.in/News/Business/2016/12/26225425/1024281/Aviation-aggregator-eyes-city-for-high-returns.vpf" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img5.jpg"  data-at2x="admin/img/free press 22 june.jpg" loading="lazy" alt="Free Press June media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo3.png" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Free Press </h6>

                  <div class="recom-price">Industrialist Applaud FDI Push in Five Sector </div>
            <br>
                <div class="text-center">
                  <a href="http://epaper.freepressjournal.in/c/11187510" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>


                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img6.jpg"  data-at2x="admin/img/bw1.jpg" loading="lazy" alt="Black and white media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body recom-bot">
                <img src="images/logo5.jpg" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">BW DISRUPT </h6>

                  <div class="recom-price">Accretion Aviation - A Charter Scheduling Company Which</div>
            <br>
                <div class="text-center">
                  <a href="http://bwdisrupt.businessworld.in/article/Accretion-Aviation-A-Charter-Scheduling-Company-Which-Provides-Air-Ambulance-Helicopters-Private-Jets-/06-03-2017-113843/" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>


                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img7.gif"  data-at2x="admin/img/T330_59884_Untitled-5.gif" loading="lazy" alt="Media graphic"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo6.jpg" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">DNA </h6>

                  <div class="recom-price">Chopper darshan to give Mumbaikars a high</div>
            <br>
                <div class="text-center">
                  <a href="http://www.dnaindia.com/mumbai/report-chopper-ganesh-darshan-put-mumbaikars-on-a-high-2015473" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img8.png"  data-at2x="admin/img/aa.png" loading="lazy" alt="Media item"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo7.png" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Patrika News </h6>

                  <div class="recom-price">Celebration of Birthday on Helicopter </div>
            <br>
                <div class="text-center">
                  <a href="http://epaper.patrika.com//c/16063774" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img9.png"  data-at2x="admin/img/NAIDUNIA 10 JUNE.png" loading="lazy" alt="Media coverage"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo8.jpg" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Nai Dunia </h6>

                  <div class="recom-price">Air Ambulance Service for Indore,Mumbai, Delhi & Hydera</div>
            <br>
                <div class="text-center">
                  <a href="" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>

                        <div class="col-md-6 recom-bot">
              <div class="recom-item">
                <div class="recom-media">
                    <div class="pic"><img style="height: 250px; width: 100%" src="images/img10.JPG"  data-at2x="admin/img/sky.JPG" loading="lazy" alt="Sky media"></div>
                  <div class="location">Publish Date :&nbsp;</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body">
                <img src="images/logo9.png" class="img-responsive" style="margin-left:78px; margin-right:auto; width: 37%; margin-top: 10px;">
                    <h6 class="blog-title" style="font-size:15px;">Marwar </h6>

                  <div class="recom-price">For Couples Only</div>
            <br>
                <div class="text-center">
                  <a href="http://www.marwar.com/wedding-special/for-couples-only.html" target="_blank" style="text-align:center; background: #6867b5; color: white; padding: 10px 10px;">Read more</a>
                </div>

                </div>
								<?php */ ?>
                <!-- Recomended Image-->
              </div>
            </div>


          </div>
        </div>

				<center>
				  <?php if(!isset($_GET['all'])){
				          if($pg_no!=0){ ?>

				<ul class="pagination">
				          <li class="pg"><a href="media.php?page=<?php  echo($currentPage!=1?$currentPage-1:1) ;?>">Previous</a></li>

				         <?php
				         if (isset($_REQUEST['page']))
				          $page_no = $_REQUEST['page'];
				         else
				         $page_no = 1;
				         for($i = 1;$i<$pg_no+1;$i++)
				           {
				            ?>
				          <li class="pg page-item <?php if($i == $page_no) echo 'active';?>"><a href="media.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

				      <?php } ?>

				    <li class="pg"><a href="media.php?page=<?php echo($currentPage == $pg_no ? ($currentPage = $pg_no) : ($currentPage = $currentPage+1)); ?>">Next</a></li>
				      </ul>

				      <?php
				    }else echo "<p class='alert-msg'>Result Not Found</p>"; } ?>
				    </center>
<!-- <div class="col-md-12" style="text-align:center">
<div class="pagination">
  <a href="media.php?id=1" class="active" >1</a>

  <a href="mediatwo.php" class="active" >2</a>

  <a href="mediathree.php" class="active" >3</a>

<a href="media.php?id=2" class="active" >Next</a>
</div></div> -->
      </section>



<?php include "footer.php"; ?>
